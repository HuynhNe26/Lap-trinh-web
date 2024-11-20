<?php
$link = new mysqli("localhost", "root", "", "bmw_web");
if ($link->connect_error) {
    die("Kết nối thất bại: " . $link->connect_error);
}

$don_hang_id = $_GET['don_hang_id'];

// Xóa đơn hàng từ cơ sở dữ liệu
$sql = "DELETE FROM don_hang WHERE don_hang_id=?";
$stmt = $link->prepare($sql);
$stmt->bind_param("i", $don_hang_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Đơn hàng đã được xóa thành công.";
} else {
    echo "Không thể xóa đơn hàng.";
}

header("Location:../admin.php?pid=1");
exit();
?>
