<?php

$name_category = $_POST['name_category'];

try {
    require_once 'connect.php';

    $sql_check = "SELECT * FROM theloai WHERE ten_tloai = '$name_category'";
    $query_check = $conn->prepare($sql_check);
    $query_check->execute();
    $rowCount = $query_check->rowCount();

    if ($rowCount > 0) {
        $response1 = "This category is already available";
        header("Location: ../admin/add_category.php?response_error=$response1");
    } else {
        $response2 = "Added successfully!";
        $sql = "INSERT INTO theloai(ten_tloai) VALUES ('$name_category')";
        $query = $conn->prepare($sql);
        $query->execute();
        header("Location: ../admin/category.php?response_done=$response2");
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
