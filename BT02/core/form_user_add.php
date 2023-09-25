<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

</head>

<body>
    <div class="container h-100 d-flex justify-content-center">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6 border border-success rounded-2 mt-5">
            <h2 class="text-uppercase text-center my-2">Add User</h2>
            <?php
            if (isset($_GET['response'])) {
                $response1 = $_GET['response'];
            ?>

                <div class="toast align-items-center text-white bg-info border-0 position-absolute top-0 end-0 mt-3 me-3" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                    <div class="d-flex">
                        <div class="toast-body">
                            <?php echo $response1 ?>
                        </div>
                        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            <?php
            }
            ?>
            <form class="mx-2" action="process_user_add.php" method="post">

                <div class="form-outline mb-4">
                    <label class="form-label" for="name">Your Name</label>
                    <input type="text" id="name" class="form-control form-control-lg" name="name" />

                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Your Email</label>
                    <input type="email" id="email" class="form-control form-control-lg" name="email" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="user-name">Username</label>
                    <input type="text" id="user-name" class="form-control form-control-lg" name="user-name" />

                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="pwd">Password</label>
                    <input type="password" id="pwd" class="form-control form-control-lg" name="pwd1" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="pwd">Re-type Password</label>
                    <input type="password" id="pwd" class="form-control form-control-lg" name="pwd2" />
                </div>

                <div class="d-flex justify-content-center pb-3">
                    <a href="../user.php" class="btn btn-outline-danger me-2">Cancel</a>
                    <button type="submit" class="btn btn-success">Add</button>
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