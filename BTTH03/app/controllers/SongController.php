<?php


require_once APP_ROOT.'/CSE485/BTTH03/app/services/SongService.php';
class SongController{
     public function add(){

        if(isset($_POST['btnAdd'])){
            $name_song = $_POST['name_song'];
            $name_tg = $_POST['name_tg'];
            $id_category = $_POST['id_category'];

            $songService = new SongService();
            $songService->add($name_song, $name_tg, $id_category);
        }

        require_once APP_ROOT . '/CSE485/BTTH03/app/views/song/addNewSong.php';
    }

    public function edit(){
        if(isset($_GET['id'])){
            // hiển thị dữ liệu lên form        
            $id = $_GET['id'];
            $songService = new SongService();
            $song = $songService->one($id);

            //Sửa thông tin bài hát
            if(isset($_POST['btnEdit'])){
                $nameSong = $_POST['name_song'];
                $nameSinger = $_POST['name_tg'];
                $idCategory = $_POST['id_category'];

                $songService = new SongService();
                $songService->edit($id, $nameSong, $nameSinger, $idCategory);
            }
        }
        require_once APP_ROOT . '/CSE485/BTTH03/app/views/song/editSong.php';
    }

    public function delete(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $songService = new SongService();
            $songService->delete($id);
        }
    }
}