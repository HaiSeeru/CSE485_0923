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
                    <input type="password" id="pwd" class="form-control form-control-lg" name="pwd" />
                </div>

                <div class="d-flex justify-content-center pb-3">
                    <button type="reset" class="btn btn-outline-danger me-2">Cancel</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>

    </div>

</body>

</html>