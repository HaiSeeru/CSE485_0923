<?php

if (isset($_GET['id'])) {
    $sid = $_GET['id'];
}

$response4 = isset($_GET['response_edit']) ? urldecode($_GET['response_edit']) : "";

try {
    require_once 'connect.php';

    $sql = "SELECT * FROM users WHERE id= '$sid'";
    $query = $conn->prepare($sql);
    $query->execute();

    $user = $query->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

</head>

<body>
    <div class="container h-100 d-flex justify-content-center">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6 border border-success rounded-2 mt-5">
            <h2 class="text-uppercase text-center my-2">Edit user</h2>
            <?php
            if (!empty($response4)) {
                echo '
                    <div class="toast align-items-center text-white bg-info border-0 position-absolute top-0 end-0 mt-3 me-3" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                        <div class="d-flex">
                            <div class="toast-body">
                                ' . $response4 . '
                            </div>
                            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>';
            }
            ?>
            <form class="mx-2" action="process_edit_user.php" method="post">
                <div class="form-outline mb-4">
                    <label class="form-label" for="name">ID</label>
                    <input type="" id="name" class="form-control form-control-lg" name="sid" value="<?php echo $sid ?>" readonly />

                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="name">Your Name</label>
                    <input type="text" id="name" class="form-control form-control-lg" name="name" value="<?php echo $user['name'] ?>" />

                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Your Email</label>
                    <input type="email" id="email" class="form-control form-control-lg" name="email" value="<?php echo $user['mail'] ?>" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="user-name">Username</label>
                    <input type="text" id="user-name" class="form-control form-control-lg" name="user-name" value="<?php echo $user['username'] ?>" />

                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="pwd">Password</label>
                    <input type="password" id="pwd" class="form-control form-control-lg" name="pwd" value="<?php echo $user['pwd'] ?>" />
                </div>

                <div class="d-flex justify-content-center pb-3">
                    <a href="../user.php" class="btn btn-outline-danger me-2">Cancel</a>
                    <button type="submit" class="btn btn-success">OK</button>
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