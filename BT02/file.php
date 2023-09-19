<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
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

            <div class="header h1 mt-4 d-flex align-items-center justify-content-between">
                <div class="left">
                    <i class="bi bi-list p-2"></i>
                    <span class="p-2">File</span>
                </div>
                <?php
                include "./core/search.php";
                ?>

            </div>
            <div class="header-table d-flex justify-content-between align-items-center bg-light">
                <span class="p-3 h5 ms-4 fw-bold">File</span>
                <div class="option p-3">
                    <button type="button" class="btn btn-outline-danger">Delete</button>
                    <button type="button" class="btn btn-success">Add File <i class="bi bi-plus-circle"></i></button>
                </div>
            </div>


            <!-- table -->
            <table class="table mt-5 p-4">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < 10; $i++) {
                        $name = "test.php";
                        $date = "15/09/2023";
                        $type = "PHP file";
                    ?>
                        <tr>

                            <th scope="row"><?php echo $i + 1 ?> </th>
                            <td><?php echo $name ?></td>
                            <td><?php echo $date ?></td>
                            <td><?php echo $type ?></td>
                            <td>
                                <button class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-outline-danger"><i class="bi bi-trash3"></i></button>

                            </td>
                        <?php
                    }
                        ?>
                        </tr>

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
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</body>

</html>