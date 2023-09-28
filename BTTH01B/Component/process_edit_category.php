<?php

$id = $_POST['id_category'];
$name = $_POST['name_category'];

try {
    require_once 'connect.php';
    $sql_check = "SELECT * FROM theloai WHERE (ten_tloai = '$name' AND ma_tloai != $id)";
    $query_check = $conn->prepare($sql_check);
    $query_check->execute();
    $rowCount = $query_check->rowCount();

    if ($rowCount > 0) {
        header('Location: ../admin/edit_category');
    } else {
        $sql = "UPDATE theloai SET ten_tloai = '$name' WHERE ma_tloai = $id";
        $query = $conn->prepare($sql);
        $query->execute();

        header("Location: ../admin/category.php");
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
