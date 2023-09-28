<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>

<body>
    <?php
    if (isset($_GET['response'])) {
        $response = $_GET['response'];
    ?>

        <div class="toast align-items-center text-white bg-info border-0 position-absolute top-0 start-50 translate-middle-x mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
            <div class="d-flex">
                <div class="toast-body">
                    <?php echo $response ?>
                </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    <?php
    }
    ?>
    <div class="container text-center mx-auto my-5 py-5 border border-success rounded-2 col-md-5 bg-light">
        <h3 class="mb-5">LOGIN</h3>
        <form action="./core/process_login.php" method="post" class="mx-5">
            <div class="input-group flex-nowrap my-3">
                <span class="input-group-text" for="user"><i class="bi bi-person-circle"></i></span>
                <input type="text" class="form-control" name="user" placeholder="Email or Username">
            </div>
            <div class="input-group flex-nowrap my-3">
                <span class="input-group-text" for="pwd"><i class="bi bi-key-fill"></i></span>
                <input type="password" class="form-control" name="pwd" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-success m-2" name="btnSubmit">
                Login
            </button>
    </div>

    </form>

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