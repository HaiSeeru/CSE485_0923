<?php

require_once APP_ROOT.'/CSE485/BTTH03/app/services/SongService.php';

class HomeController{
    public function index(){
        if(isset($_GET['response'])){
            $res = $_GET['response'];
        }
        $songService = new SongService();
        $songs = $songService->all();

        include APP_ROOT.'/CSE485/BTTH03/app/views/home/index.php';
    }
}