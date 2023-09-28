<?php

session_unset(); // Xóa dữ liệu session
session_destroy(); // Hủy session
header("Location: ../login.php"); // Điều hướng đến trang đăng nhập
exit();
