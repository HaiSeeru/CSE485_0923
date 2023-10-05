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
    <div class="container vh-100 mt-1 border border-success p-0">
        <header class="bg-light">
            <div class="container d-flex justify-content-between align-items-center py-4 border-bottom border-success">
                <div class="d-flex align-items-center">
                    <h1 style="color: green">Music</h1>
                    <span class="h1">Garden</span>
                </div>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Tìm</button>
                </form>
            </div>
        </header>
        <div class="content text-center mx-auto p-3">
            <?php
                    if (isset($_GET['response'])) {
                        $res= $_GET['response'];
                    ?>
                        <div class="toast align-items-center text-white bg-info border-0 position-absolute top-0 start-50 translate-middle-x mt-3" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                            <div class="d-flex">
                                <div class="toast-body">
                                    <?php echo $res ?>
                                </div>
                                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>
                    <?php
                    }
                ?>
            <h3 style="text-align: center; font-weight: 700;">CHỈNH SỬA BÀI HÁT</h3>
            <form action="" method="post">
                <div class="input-group flex-nowrap mt-2">
                    <span class="input-group-text" for="name_song">Tên bài hát</span>
                    <input type="text" class="form-control" value="<?= $song['tenBaiHat']?>" name="name_song">
                </div>
                <div class="input-group flex-nowrap mt-2">
                    <span class="input-group-text" for="name_tg">Ca sĩ</span>
                    <input type="text" class="form-control" value="<?= $song['caSi']?>" name="name_tg">
                </div>
                <div class="input-group flex-nowrap mt-2">
                    <span class="input-group-text" for="id_category">ID thể loại</span>
                    <input type="text" class="form-control" value="<?= $song['idTheLoai']?>" name="id_category">
                </div>
                
                <div class="btn_add_back">
                    <button type="submit" class="btn btn-success m-2" name="btnEdit">
                        Cập nhật
                    </button>
                    <a href="<?= DOMAIN .'public/index.php'?>" class="btn btn-warning m-2">Quay lại</a>

                </div>

            </form>

            </div>
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