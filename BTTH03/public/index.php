<?php

require_once('../app/config/config.php');

$controller = isset($_GET['controller'])?$_GET['controller']:'home';

$action = isset($_GET['action'])? $_GET['action']:'index';


// chỉnh tên url
$controller = ucfirst($controller); 

$controller = $controller."Controller"; 
$path = "../app/controllers/".$controller.".php"; 

// điều hướng tới path
if(!file_exists($path)){
    die("Request not found. Check your path");
}
include "$path";

$myController = new $controller();
if (method_exists($myController, $action)) {
    $myController->$action();
} else {
    echo "$action does not exist in $controller class";
}
