<?php

$name = $_POST['name'];
$mail = $_POST['email'];
$date = date('Y-m-d');
$username = $_POST['user-name'];
$pwd = $_POST['pwd'];

try {
    require_once 'connect.php';

    $sql = "INSERT INTO users (name, join_date, mail, username, pwd) 
            VALUES ('$name', '$date', '$mail', '$username', '$pwd')";
    $query = $conn->prepare($sql);
    $query->execute();

    header("Location: ../user.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}
