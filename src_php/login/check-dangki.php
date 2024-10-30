<?php
$link = new mysqli('localhost', 'root', '', 'bmw_hethong');

// Kiểm tra kết nối
if ($link->connect_error) {
    die("Kết nối thất bại: " . $link->connect_error);
}

if (isset($_POST['tendangki'])) {
    $username = $_POST['tendangki'];
    $password = $_POST['matkhaumoi'];
    $sql_check_dangki_user = "INSERT INTO user (tendangnhap, matkhau) VALUES ('$username', '$password')";

    if ($link->query($sql_check_dangki_user) === TRUE) {
        echo "<script> alert('Đăng ký thành công'); </script>";
    } else {
        echo "<script> alert('Lỗi: " . $link->error . "'); </script>";
    }
} else {
    echo "<script> alert('Tên đăng nhập hoặc mật khẩu không đúng! Vui lòng thử lại'); </script>";
}
?>
