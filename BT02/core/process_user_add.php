<?php

$name = $_POST['name'];
$mail = $_POST['email'];
$date = date('Y-m-d');
$username = $_POST['user-name'];
$pwd = $_POST['pwd'];

require_once 'connect.php';

$query = "INSERT INTO users (name, join_date, mail, username, pwd) 
            VALUES ('$name', '$date', '$mail', '$username', '$pwd')";

mysqli_query($conn, $query);

$conn->close();

echo "Successfully";
