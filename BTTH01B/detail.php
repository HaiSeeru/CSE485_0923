<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .imgsong {
            height: 300px;
            width: 300px;
        }

        .song_detail {
            width: 85%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container-fluid vh-100 mx-auto">
        <?php
        include './Component/header.php';
        ?>

        <div class="container my-5" style="height: 70%;">
            <div class="song_detail row">
                <div class="col-md-3">
                    <!-- Hình ảnh bên trái -->
                    <img src="./image/bh-1.jpg" class="imgsong img-fluid" alt="Hình ảnh bài viết">
                </div>
                <div class="col-md-9">
                    <!-- Nội dung bên phải -->
                    <h1 class="my-3 text-primary">Cây và gió</h1>
                    <p class="lead">Ngày đăng: 26/09/2023</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec augue velit. Integer nec sapien quis metus gravida tristique. Vivamus lacinia elit eu purus rhoncus, in condimentum sapien congue.</p>
                    <p>Suspendisse potenti. Sed bibendum quam ac odio tristique, at aliquam eros fringilla. Sed iaculis aliquet purus, nec dignissim odio vehicula in. Nulla facilisi.</p>
                </div>
            </div>
        </div>

        <div class="footer container-fluid text-center">
            <h3>TLU'S MUSIC GARDEN</h3>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>