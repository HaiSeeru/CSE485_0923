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

            <h3 style="text-align: center; font-weight: 700;">THÊM MỚI THỂ LOẠI</h3>
            <form action="../Component/process_add_category.php" method="post">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" for="name_category">Tên thể loại</span>
                    <input type="text" class="form-control" name="name_category">
                </div>
                <div class="btn_add_back">
                    <button type="submit" class="btn btn-success m-2">
                        Thêm
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