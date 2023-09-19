<?php

$id = $_GET['sid'];

require_once 'connect.php';

$del_query = "DELETE FROM users WHERE id=$id";

mysqli_query($conn, $del_query);

header('location: ../user.php');
