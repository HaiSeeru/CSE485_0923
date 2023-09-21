<?php

$name = $_POST['name'];
$mail = $_POST['email'];
$username = $_POST['user-name'];
$pwd = $_POST['pwd'];
$id = $_POST['sid'];

try {
    require_once 'connect.php';

    $sql = "UPDATE users SET name = '$name', mail = '$mail', username = '$username', pwd = '$pwd' WHERE id = $id";
    $query = $conn->prepare($sql);
    $query->execute();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

header('Location: ../user.php');
