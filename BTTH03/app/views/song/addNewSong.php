
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
    <div class="row vh-100 mx-auto">
        <div class="content text-center mx-auto" style="width: 70%;">

            <h3 style="text-align: center; font-weight: 700;">THÊM MỚI BÀI HÁT</h3>
            <form action="" method="post">
                <div class="input-group flex-nowrap mt-2">
                    <span class="input-group-text" for="name_song">Tên bài hát</span>
                    <input type="text" class="form-control" name="name_song">
                </div>
                <div class="input-group flex-nowrap mt-2">
                    <span class="input-group-text" for="name_tg">Ca sĩ</span>
                    <input type="text" class="form-control" name="tg">
                </div>
                <div class="input-group flex-nowrap mt-2">
                    <span class="input-group-text" for="id_category">ID thể loại</span>
                    <input type="text" class="form-control" name="id_category">
                </div>
                
                <div class="btn_add_back">
                    <button type="submit" class="btn btn-success m-2">
                        Thêm
                    </button>
                    <a href="<?= DOMAIN .'public/index.php'?>" class="btn btn-warning m-2">Quay lại</a>

                </div>

            </form>

        </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>