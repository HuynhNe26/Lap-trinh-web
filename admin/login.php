<?php
    session_start();
    include('check-login.php');
    if (!isset($_SESSION['username_admin'])) {
        include('src-quanli_php/login-admin.php');
    } else {
        header('Location: admin.php');
        exit(); // Đảm bảo script ngừng thực thi sau khi chuyển hướng
    }
?>
