<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex align-items-center">
        <div class="container p-2">
            <a class="navbar-brand text-success fs-2" href="/authors">Authors Management</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('authors') ? 'active' : '' }}" href="/authors">Authors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('books') ? 'active' : '' }}" href="/books">Books</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Tìm</button>
        </form>
        </div>
    </nav>
    
    <div class="container mt-4">
        @yield('content')
    </div>
    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>