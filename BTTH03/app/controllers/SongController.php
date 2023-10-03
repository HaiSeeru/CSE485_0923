<?php


require_once APP_ROOT.'/CSE485/BTTH03/app/services/SongService.php';
class SongController{
     public function addNewSong(){
        include APP_ROOT.'/CSE485/BTTH03/app/views/song/addNewSong.php';
        $songService = new SongService();
        $newSong = $songService->addNewSong();
        
    }
}
   