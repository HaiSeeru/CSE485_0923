<?php

$name = $_POST['name'];
$mail = $_POST['email'];
$date = date('Y-m-d');
$username = $_POST['user-name'];
$pwd = $_POST['pwd1'];

try {
    require_once 'connect.php';

    $sql_check = "SELECT * FROM users WHERE username = '$username' OR mail = '$mail'";
    $query_check = $conn->prepare($sql_check);
    $query_check->execute();
    $rowCount = $query_check->rowCount();

    if ($rowCount > 0) {
        $response1 = "Account exist";
        header("Location: form_user_add.php?response=$response1");
    } else {
        $response2 = "Added successfully";
        $pass_hash = password_hash($pwd, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, join_date, mail, username, pwd) 
            VALUES ('$name', '$date', '$mail', '$username', '$pass_hash')";
        $query = $conn->prepare($sql);
        $query->execute();
        header("Location: ../user.php?response_add=$response2");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
