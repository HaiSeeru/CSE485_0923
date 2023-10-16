<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicGarden</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        .carousel-inner img{
            max-height: 500px;
        }
    </style>
</head>
<body>

    <header class="bg-light" style="height: 100px;">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo d-inline-flex align-items-center">
                <img src="{{ asset('uploads/logo.png') }}" alt="" style="height: 100px;">
                <h1>Music</h1>
                <span class="h1">Garden</span>
                <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-2">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="\">TRANG CHỦ</a>
                        </li>
                        <li>
                            <a class="nav-link" href="">ADMIN</a>
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

    @yield('content')

    <div class="footer container-fluid text-center border-top border-3 border-success">
        <h3>TLU'S MUSIC GARDEN</h3>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>