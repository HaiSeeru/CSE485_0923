<?php

require_once('../app/config/config.php');

$controller = isset($_GET['controller'])?$_GET['controller']:'home';

$action = isset($_GET['action'])? $_GET['action']:'index';

if (isset($_GET['response_add'])) {
    $response = $_GET['response_add'];
    // Hiển thị thông báo response ở đây (ví dụ: sử dụng Bootstrap toast)
    echo '<div class="toast align-items-center text-white bg-info border-0 position-absolute top-0 start-50 mt-3 me-3" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">';
    echo '<div class="d-flex">';
    echo '<div class="toast-body">';
    echo $response;
    echo '</div>';
    echo '<button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>';
    echo '</div>';
    echo '</div>';
}

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
