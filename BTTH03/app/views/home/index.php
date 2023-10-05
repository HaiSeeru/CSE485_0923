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
        <div class="content text-center mx-auto bg-light mt-0">
            <?php
                    if (isset($_GET['response'])) {
                        $response = $_GET['response'];
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
            <table class="table">
                <div class="d-flex align-items-center justify-content-between py-3 px-4">
                    <h3 >Danh sách bài hát</h3>
                    <a href="<?= DOMAIN .'public/index.php?controller=song&action=add'?>" class="btn btn-success"><i class="bi bi-plus-lg"></i>Thêm bài hát</a>
                </div>
                <thead>
                    <tr>
                        <th scope="col">Mã bài hát</th>
                        <th scope="col">Tên bài hát</th>
                        <th scope="col">Ca sĩ</th>
                       <th scope="col">Tên thể loại</th>
                        <th scope="col"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($songs as $song) {
                        $modalId = "songModal_" . $song->getId();
                    ?>
                    <tr>

                        <th scope="row">
                            <?php echo $song -> getId() ?>
                        </th>
                        <td><?php echo $song -> getNameSong() ?></td>
                         <td>
                            <?php echo $song -> getSinger() ?>
                        </td>
                        <td>
                            <?php echo $song -> getIdCategory() ?>
                        </td>
                        <td>
                            <a href="index.php?controller=song&action=edit&id=<?= $song->getId()?>" class="btn btn-outline-warning">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#<?php echo $modalId; ?>">
                                <i class="bi bi-trash3"></i>
                             </a>
                            <!-- <a href="index.php?controller=song&action=delete&id=" class="btn btn-outline-warning">
                                <i class="bi bi-trash3"></i>
                            </a>                        -->
                        </td>

                        <!-- pop up xác nhận xóa -->
                        <div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete User</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                        <a href="index.php?controller=song&action=delete&id=<?= $song->getId()?>" class="btn btn-outline-danger">Yes</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

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