<?php

require_once APP_ROOT . '/CSE485/BTTH03/app/models/Song.php';
require_once APP_ROOT . '/CSE485/BTTH03/app/libs/DBConnection.php';

class SongService
{
    public function getAllSong()
    {
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConn();

        if($conn != null){
            $sql = "SELECT * FROM BaiHat ORDER BY id DESC";
            $query = $conn->prepare($sql);
            $query->execute();

            $songs = [];
            while ($row = $query->fetch()) {
                $song = new Song($row['id'], $row['tenBaiHat'], $row['caSi'], $row['idTheLoai']);
                $songs[] = $song;
            }
            return $songs;
        }
        
    }

    public function addNewSong($name_song, $name_tg, $id_category){
        try{
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConn();

            // Kiểm tra trùng lặp
            $sql_check = "SELECT * FROM BaiHat WHERE tenBaiHat = '$name_song'";
            $query_check = $conn->prepare($sql_check);
            $query_check->execute();
            $rowCount = $query_check->rowCount();     
             if ($rowCount > 0) {
                $return = DOMAIN.'public/index.php';
                header('Location: '.$return);
             }else{
                $sql = "INSERT INTO BaiHat(tenBaiHat, caSi, idTheLoai) VALUES ('$name_song', '$name_tg', '$id_category')";
                $query = $conn->prepare($sql);
                $query->execute();
                $return = DOMAIN.'public/index.php';
                header('Location: '.$return);
             }             
        }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

