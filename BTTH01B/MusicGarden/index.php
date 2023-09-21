<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Garden</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="row vh-100 container-fluid mx-auto">
        <header class="fixed-top bg-light">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="logo d-inline-flex align-items-center">
                    <img src="./image/logo.png" alt="">
                    <h1>Music</h1>
                    <span class="h1">Garden</span>
                    <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-2">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">TRANG CHỦ</a>
                            </li>
                            <li>
                                <a class="nav-link" href="login.php">ĐĂNG NHẬP</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Tìm</button>
                </form>
            </div>
        </header>

        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./image/bg-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./image/bg-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./image/bg-3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="content container-fluid text-center mt-5">
            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                <div class="col">
                    <div class="song d-flex flex-column mb-3 border border-success-subtle ">
                        <img src="./image/bh-1.jpg" alt="">
                        <a href="" class="link-underline link-underline-opacity-0">Chưa bao giờ</a>
                    </div>
                </div>
                <div class="col">
                    <div class="song d-flex flex-column mb-3 border border-success-subtle ">
                        <img src="./image/bh-2.jpg" alt="">
                        <a href="" class="link-underline link-underline-opacity-0">Yêu người có ước mơ</a>
                    </div>
                </div>
                <div class="col">
                    <div class="song d-flex flex-column mb-3 border border-success-subtle ">
                        <img src="./image/bh-3.jpg" alt="">
                        <a href="" class="link-underline link-underline-opacity-0">Bức tranh từ nước mắt</a>
                    </div>
                </div>
                <div class="col">
                    <div class="song d-flex flex-column mb-3 border border-success-subtle ">
                        <img src="./image/bh-4.jpg" alt="">
                        <a href="" class="link-underline link-underline-opacity-0">I do</a>
                    </div>
                </div>
                <div class="col">
                    <div class="song d-flex flex-column mb-3 border border-success-subtle ">
                        <img src="./image/bh-5.jpg" alt="">
                        <a href="" class="link-underline link-underline-opacity-0">Count on me</a>
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