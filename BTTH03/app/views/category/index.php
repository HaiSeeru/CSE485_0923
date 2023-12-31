<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

</head>

<body>
    <div class="row container vh-100 mx-auto">
        
        <div class="content text-center mx-auto">

            <table class="table">
                <a href="" class="nav nav-link ms-5 ps-5">
                    <button type="button" class="btn btn-success d-flex justify-content-start ms-5">Thêm mới</button>
                </a>

                <thead>
                    <tr>
                        <th scope="col">Mã thể loại</th>
                        <th scope="col">Tên thể loại</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $category) {
                    ?>
                    <tr>

                        <th scope="row">
                            <?php echo $category -> getId() ?>
                        </th>
                        <td><?php echo $patient -> getTenTheLoai() ?></td>
                            <a href="" class="btn btn-outline-warning">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="" class="btn btn-outline-warning">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>