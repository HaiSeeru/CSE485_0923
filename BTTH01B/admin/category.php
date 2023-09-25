<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="row vh-100 mx-auto">
        <?php
        include '../Component/header_category.php';
        ?>
        <div class="content text-center">
            <table class="table">

                <a href="./add_category.php">
                    <button type="button" class="btn btn-success ms-5 mt-5 d-flex justify-content-start">Thêm mới</button>
                </a>

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên thể loại</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Nhạc trữ tình</td>
                        <td><a href="./edit_category.php"><i class="bi bi-pencil-square"></i></a></td>
                        <td><i class="bi bi-trash"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Nhạc cách mạng</td>
                        <td><a href="./edit_category.php"><i class="bi bi-pencil-square"></i></a></td>
                        <td><i class="bi bi-trash"></i></td>
                    </tr>
                </tbody>
            </table>

        </div>


        <div class="footer container-fluid text-center">
            <h3>TLU'S MUSIC GARDEN</h3>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>