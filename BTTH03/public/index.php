<?php

require_once('../app/config/config.php');

$controller = isset($_GET['controller'])?$_GET['controller']:'home';

$action = isset($_GET['action'])? $_GET['action']:'index';


if($controller == 'home'){
    require_once APP_ROOT.'/CSE485/BTTH03/app/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->index();
}elseif($controller == 'song' && $action=='add'){
    require_once APP_ROOT.'/CSE485/BTTH03/app/controllers/SongController.php';
    $songController = new SongController();
    $songController->addNewSong();
}elseif($controller == 'category' && $action=='index'){
    require_once APP_ROOT.'/CSE485/BTTH03/app/controllers/CategoryController.php';
    $songController = new SongController();
    $songController->addNewSong();
}
else{
    echo "Không tồn tại URL";
}
