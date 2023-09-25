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
        <header class="header fixed-top bg-light">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="logo d-inline-flex align-items-center">
                    <span class="h1">Administration</span>
                    <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-2">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
                            </li>
                            <li>
                                <a class="nav-link" href="">Trang ngoài</a>
                            </li>
                            <li>
                                <a class="nav-link" href="category.php">Thể loại</a>
                            </li>
                            <li>
                                <a class="nav-link" href="">Tác giả</a>
                            </li>
                            <li>
                                <a class="nav-link" href="">Bài viết</a>
                            </li>
                        </ul>
                    </nav>
                </div>


            </div>
        </header>
        <div class="content container-fluid text-center mt-5">
            <div class="main row row-cols-2 row-cols-lg-4 g-2 g-lg-3 mt-5">
                <div class="col">
                    <div class="song d-flex flex-column mb-3 border border-success-subtle ">
                        <span style="color: blue;" class="mt-5 h5">Người dùng</span>
                        <span class="h1 mb-5">110</span>
                    </div>
                </div>
                <div class="col">
                    <div class="song d-flex flex-column mb-3 border border-success-subtle ">
                        <span style="color: blue;" class="mt-5 h5">Thể loại</span>
                        <span class="h1 mb-5">10</span>
                    </div>
                </div>
                <div class="col">
                    <div class="song d-flex flex-column mb-3 border border-success-subtle ">
                        <span style="color: blue;" class="mt-5 h5">Tác giả</span>
                        <span class="h1 mb-5">20</span>
                    </div>
                </div>
                <div class="col">
                    <div class="song d-flex flex-column mb-3 border border-success-subtle ">
                        <span style="color: blue;" class="mt-5 h5">Bài viết</span>
                        <span class="h1 mb-5">110</span>
                    </div>
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