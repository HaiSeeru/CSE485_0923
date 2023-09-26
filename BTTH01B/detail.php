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
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    try {
        require_once './Component/connect.php';
        $sql = "SELECT baiviet.*, theloai.ten_tloai, tacgia.ten_tgia FROM baiviet 
                INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai    
                INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia           
                WHERE baiviet.ma_bviet = $id";

        $query = $conn->prepare($sql);
        $query->execute();

        $post = $query->fetchAll();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    ?>


    <div class="container-fluid vh-100 mx-auto">
        <?php
        include './Component/header.php';
        ?>

        <div class="container my-5" style="height: 70%;">
            <div class="song_detail row">
                <div class="col-md-3 d-flex align-items-start">
                    <!-- Hình ảnh bên trái -->
                    <img src="./image/bh-<?= $id; ?>.jpg" class="imgsong img-fluid" alt="Hình ảnh bài viết">
                </div>
                <div class="col-md-9">
                    <!-- Nội dung bên phải -->
                    <h1 class="text-primary"><?php echo $post[0]['ten_bhat'] ?></h1>
                    <p><strong>Bài hát: </strong><?php echo $post[0]['ten_bhat'] ?></p>
                    <p><strong>Thể loại: </strong><?php echo $post[0]['ten_tloai'] ?></p>
                    <p><strong>Tóm tắt: </strong><?php echo $post[0]['tomtat'] ?></p>
                    <p><strong>Nội dung: </strong><?php echo $post[0]['noidung'] ?></p>
                    <p><strong>Tác giả: </strong><?php echo $post[0]['ten_tgia'] ?></p>
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