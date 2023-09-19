<?php

$name = $_POST['name'];
$mail = $_POST['email'];
$username = $_POST['user-name'];
$pwd = $_POST['pwd'];
$id = $_POST['sid'];

require_once 'connect.php';

$edit_query = "UPDATE users SET name = '$name', mail = '$mail', username = '$$username', pwd = '$pwd' WHERE id = $id";

mysqli_query($conn, $edit_query);

header('Location: ../user.php');
