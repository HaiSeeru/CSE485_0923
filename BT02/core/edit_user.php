<?php

$id = $_GET['sid'];

require_once 'connect.php';

$edit_query = "SELECT * FROM users WHERE id=$id";

$result = mysqli_query($conn, $edit_query);

$row = mysqli_fetch_assoc($result);
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
            <form class="mx-2" action="process_edit_user.php" method="post">
                <input type="hidden" name="sid" value="<?php echo $id; ?>">
                <div class="form-outline mb-4">
                    <label class="form-label" for="name">Your Name</label>
                    <input type="text" id="name" class="form-control form-control-lg" name="name" value="<?php echo $row['name'] ?>" />

                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Your Email</label>
                    <input type="email" id="email" class="form-control form-control-lg" name="email" value="<?php echo $row['mail'] ?>" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="user-name">Username</label>
                    <input type="text" id="user-name" class="form-control form-control-lg" name="user-name" value="<?php echo $row['username'] ?>" />

                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="pwd">Password</label>
                    <input type="password" id="pwd" class="form-control form-control-lg" name="pwd" value="<?php echo $row['pwd'] ?>" />
                </div>

                <div class="d-flex justify-content-center pb-3">
                    <button type="reset" class="btn btn-outline-danger me-2">Cancel</button>
                    <button type="submit" class="btn btn-success">OK</button>
                </div>
            </form>
            <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Xác nhận</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Bạn có chắc chắn muốn xóa?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="./core/del_user.php?sid=<?php echo $row['id']; ?>" class="btn btn-outline-danger">Yes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>