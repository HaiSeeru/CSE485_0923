<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

try {
    require_once 'connect.php';

    $sql = "DELETE FROM theloai WHERE ma_tloai = $id";
    $query = $conn->prepare($sql);
    $query->execute();
    $rowCount = $query->rowCount();

    if ($rowCount > 0) {
        header("Location: ../admin/category.php");
    }
} catch (PDOException $e) {
    $e->getMessage();
}
