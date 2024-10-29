<?php
$link = new mysqli('localhost', 'root','','bmw_hethong');
if (isset($_POST['tendangnhap-admin'])) {
    $username = $_POST['tendangnhap-admin'];
    $password = $_POST['matkhau-admin'];
    $sql_check_login_admin = "SELECT * FROM memember_admin WHERE tendangnhap = '$username' AND matkhau = '$password' AND quyen = 1";
    $kq = $link ->query($sql_check_login_admin);
    $memeber = $kq->fetch_assoc();
    if($kq -> num_rows ==1) {
        $_SESSION ['username_admin'] = $memeber['tendangnhap'];
        $_SESSION ['hovaten_admin'] = $memeber['hovaten'];
        echo $memeber['hovaten'];
    }
    else {
        echo "<script> alert('Tên đăng nhập hoặc mật khẩu không đúng! Vui lòng thử lại'); </script>";
    }
}
?>
