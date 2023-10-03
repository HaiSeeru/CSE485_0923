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
                <div class="header mt-5 d-flex align-items-center justify-content-between">
                <h3 >Danh sách bài hát</h3>
                <a href="<?= DOMAIN .'public/index.php?controller=song&action=add'?>" class="btn btn-success"><i class="bi bi-plus-lg"></i>Thêm bài hát</a>
            </div>
                <thead>
                    <tr>
                        <th scope="col">Mã bài hát</th>
                        <th scope="col">Tên bài hát</th>
                        <th scope="col">Ca sĩ</th>
                        <th scope="col"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($songs as $song) {
                    ?>
                    <tr>

                        <th scope="row">
                            <?php echo $song -> getId() ?>
                        </th>
                        <td><?php echo $song -> getTenBaiHat() ?></td>
                         <th scope="row">
                            <?php echo $song -> getCaSi() ?>
                        </th>
                        <th scope="row">
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