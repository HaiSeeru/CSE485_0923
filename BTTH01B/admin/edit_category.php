<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$response2 = isset($_GET['response_error']) ? urldecode($_GET['response_error']) : "";
try {
    require_once '../Component/connect.php';

    $sql = "SELECT * FROM theloai WHERE ma_tloai='$id'";
    $query = $conn->prepare($sql);
    $query->execute();

    $category = $query->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Component/style1.css">
</head>

<body>
    <div class="row vh-100 mx-auto">
        <?php
        include '../Component/header_category.php';
        ?>
        <div class="content text-center mx-auto" style="width: 70%;">

            <?php
            include '../Component/response_category.php';
            ?>

            <form action="../Component/process_edit_category.php" method="post">
                <h3 style="text-align: center; font-weight: 700;">SỬA THÔNG TIN THỂ LOẠI</h3>
                <div class="input-group flex-nowrap my-2">
                    <span class="input-group-text" for="id_category">Mã Thể Loại</span>
                    <input type="text" class="form-control" name="id_category" value="<?= $category['ma_tloai'] ?>" readonly style="cursor:pointer">
                </div>
                <div class="input-group flex-nowrap my-2">
                    <span class="input-group-text" for="name_category">Tên Thể Loại</span>
                    <input type="text" class="form-control" name="name_category" value="<?= $category['ten_tloai'] ?>">
                </div>
                <div class="btn_add_back">
                    <button type="submit" class="btn btn-success m-2">
                        Lưu lại
                    </button>
                    <a href="category.php" class="btn btn-warning m-2">Quay lại</a>

                </div>
            </form>


        </div>


        <?php
        include '../Component/footer_category.php';
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        var toastElList = [].slice.call(document.querySelectorAll('.toast'));
        var toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl);
        });

        if (toastList.length > 0) {
            toastList[0].show();
        }
    </script>
</body>

</html>