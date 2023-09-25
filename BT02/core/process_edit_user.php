<?php

$name = $_POST['name'];
$mail = $_POST['email'];
$username = $_POST['user-name'];
$pwd = $_POST['pwd'];
$id = $_POST['sid'];

try {
    require_once 'connect.php';

    $sql_check = "SELECT * FROM users WHERE username = '$username' OR mail = '$mail'";
    $query_check = $conn->prepare($sql_check);
    $query_check->execute();
    $rowCount = $query_check->rowCount();

    if ($rowCount > 0) {
        $respone = "Account exist";
        header('Location: form_user_add.php');
    } else {
        $sql = "UPDATE users SET name = '$name', mail = '$mail', username = '$username', pwd = '$pwd' WHERE id = $id";
        $query = $conn->prepare($sql);
        $query->execute();
        header('Location: ../user.php');
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
