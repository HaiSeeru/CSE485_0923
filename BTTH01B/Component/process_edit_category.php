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
        $response1 = "This category is already available";
        header("Location: ../admin/edit_category.php?id=$id&response_error=" . urlencode($response1));
    } else {
        $sql = "UPDATE theloai SET ten_tloai = '$name' WHERE ma_tloai = $id";
        $query = $conn->prepare($sql);
        $query->execute();

        $response2 = "Edit successfully!";
        header("Location: ../admin/category.php?response_done1=$response2");
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
