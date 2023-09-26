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
            <h3 style="text-align: center; font-weight: 700;">SỬA THÔNG TIN THỂ LOẠI</h3>
            <div class="input-group flex-nowrap my-2">
                <span class="input-group-text" id="addon-wrapping">Mã Thể Loại</span>
                <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap my-2">
                <span class="input-group-text" id="addon-wrapping">Tên Thể Loại</span>
                <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="button-add-back">
                <button type="button" class="btn btn-success m-2">Lưu Lại</button>
                <a href="./category.php">
                    <button type="button" class="btn btn-warning m-2">Quay Lại</button>
                </a>
            </div>

        </div>


        <?php
        include '../Component/footer_category.php';
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>