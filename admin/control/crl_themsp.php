<?php
$link = new mysqli('localhost', 'root', '', 'bmw_web');

$thu_muc = "../../image/";
$ten_file = $thu_muc . $_FILES['hinhanh']['name'];
move_uploaded_file($_FILES['hinhanh']['name'], $ten_file);

$machitiettl = $_POST['machitiettl'];
$tensp = $_POST['tensp'];
$dongia = $_POST['dongia'];
$mota = $_POST['mota'];
$hinhanh = $_FILES['hinhanh']['name'];
$link_sp = $_POST['link'];

$sql_themsp = "INSERT INTO sanpham (tensp, mota, dongia, machitiettl, hinhanh, link) VALUES ('$tensp', '$mota', '$dongia', '$machitiettl' ,'$hinhanh', '$link_sp')";

if ($link->query($sql_themsp) === TRUE) {
    header("Location: ../admin.php?pid=3");
} else {
    echo '<script>alert("Thêm sản phẩm không thành công. Vui lòng kiểm tra lại!"); history.back();</script>';
}
?>
