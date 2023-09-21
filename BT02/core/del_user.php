<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


try {
    require_once 'connect.php';

    $sql = "DELETE FROM users WHERE id = $id";

    $query = $conn->prepare($sql);
    $query->execute();

    $rowCount = $query->rowCount();
    if ($rowCount > 0) {
        header("Location: ../user.php");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
