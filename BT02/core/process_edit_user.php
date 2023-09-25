<?php

$name = $_POST['name'];
$mail = $_POST['email'];
$username = $_POST['user-name'];
$pwd = $_POST['pwd'];
$id = $_POST['sid'];

try {
    require_once 'connect.php';

    $sql_check = "SELECT * FROM users WHERE (username = '$username' OR mail = '$mail') AND id != $id";
    $query_check = $conn->prepare($sql_check);
    $query_check->execute();
    $rowCount = $query_check->rowCount();

    if ($rowCount > 0) {
        $response4 = "Account exist";
        header("Location: form_edit_user.php?id=$id&response_edit=" . urlencode($response4));
    } else {
        $sql = "UPDATE users SET name = '$name', mail = '$mail', username = '$username', pwd = '$pwd' WHERE id = $id";
        $query = $conn->prepare($sql);
        $query->execute();
        $response4 = "Edit successfully";
        header("Location: ../user.php?response_edit=$response4");
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
