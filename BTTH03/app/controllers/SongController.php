<?php


require_once APP_ROOT.'/CSE485/BTTH03/app/services/SongService.php';
class SongController{
     public function addNewSong(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name_song = $_POST['name_song'];
        $name_tg = $_POST['name_tg'];
        $id_category = $_POST['id_category'];

        $songService = new SongService();
        $songService->addNewSong($name_song, $name_tg, $id_category);
        } else {
        include APP_ROOT . '/CSE485/BTTH03/app/views/song/addNewSong.php';
        }
    }
}
   