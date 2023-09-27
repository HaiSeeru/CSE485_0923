<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="row vh-100 container-fluid">

        <!--SIDEBAR  -->
        <?php
        include "./core/sidebar.php";
        ?>

        <!-- MAIN_CONTENT -->
        <div class=" main-content col-md-9 ms-10">

            <!-- Header -->
            <div class="header h1 mt-4 d-flex align-items-center justify-content-between">
                <div class="left">
                    <i class="bi bi-list p-2"></i>
                    <span class="p-2">User</span>
                </div>
                <?php
                include "./core/search.php";
                ?>

            </div>
            <div class="header-table d-flex justify-content-between align-items-center bg-light">
                <span class="p-3 h5 ms-4 fw-bold">User</span>

                <?php
                include './core/response_user.php';
                ?>

                <div class="option p-3">
                    <button type="button" class="btn btn-outline-danger">Delete</button>
                    <a href="./core/form_user_add.php">
                        <button type="button" class="btn btn-success">
                            Add User
                            <i class="bi bi-plus-circle"></i>
                        </button>
                    </a>
                </div>
            </div>
            <!-- table -->
            <table class="table mt-5 p-4">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Name</th>
                        <th scope="col">Join Date</th>
                        <th scope="col">Mail</th>
                        <th scope="col">Username</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include './core/show.php';
                    ?>

                </tbody>
            </table>


            <!-- number page -->
            <nav aria-label="Page navigation example ">
                <ul class="pagination d-flex justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="user.php?page=1">1</a></li>
                    <li class="page-item"><a class="page-link" href="user.php?page=2">2</a></li>
                    <li class="page-item"><a class="page-link" href="user.php?page=3">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

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