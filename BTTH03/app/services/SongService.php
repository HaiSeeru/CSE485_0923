<?php

require_once APP_ROOT . '/CSE485/BTTH03/app/models/Song.php';
require_once APP_ROOT . '/CSE485/BTTH03/app/libs/DBConnection.php';

class SongService
{
    // Lấy ra tất cả
    public function all()
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

    // Lấy ra theo id
    public function one($id)
    {
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConn();

        if($conn != null){
            $sql = "SELECT * FROM BaiHat WHERE id = $id";
            $query = $conn->prepare($sql);
            $query->execute();

            $row = $query->fetch();
            return $row;
        }
        
    }

    //Thêm bài hát
    public function add($name_song, $name_tg, $id_category){
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

    // Chỉnh sửa bài hát
    public function edit($id, $nameSong, $nameSinger, $idCategory){
        try{
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConn();

            // Kiểm tra trùng lặp
            $sql_check = "SELECT * FROM BaiHat WHERE tenBaiHat = '$nameSong' AND id != $id";
            $query_check = $conn->prepare($sql_check);
            $query_check->execute();
            $rowCount = $query_check->rowCount();     
             if ($rowCount > 0) {
                $return = DOMAIN."public/index.php?controller=song&action=edit&id=$id";
                header('Location: '.$return);
             }else{
                $sql = "UPDATE BaiHat SET tenBaiHat = '$nameSong', caSi = '$nameSinger', idTheloai = '$idCategory' WHERE id = $id";
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

