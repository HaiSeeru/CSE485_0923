<?php

if (isset($_POST['btnSubmit'])) {
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];

    try {
        require_once 'connect.php';

        $sql = "SELECT * FROM users WHERE username = '$user' OR mail = '$user'";
        $query = $conn->prepare($sql);
        $query->execute();
        $rowCount = $query->rowCount();

        if ($rowCount > 0) {
            $acc = $query->fetch();

            $pass_hash = $acc[5];
            if (password_verify($pwd, $pass_hash)) {
                session_start();
                $_SESSION['isLogin'] = $acc[4];
                $res1 = "Logged in successfully";
                header("Location: ../user.php?response=$res1");
            } else {
                $res2 = "Incorrect password";
                header("Location: ../login.php?response=$res2");
            }
        } else {
            $res3 = "Username or email is incorrect";
            header("Location: ../login.php?response=$res3");
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
