<?php

require_once APP_ROOT.'/CSE485/BTTH03/app/services/SongService.php';

class HomeController{
    public function index(){
        $songService = new SongService();
        $songs = $songService->getAllSong();

        include APP_ROOT.'/CSE485/BTTH03/app/views/home/index.php';
    }


}