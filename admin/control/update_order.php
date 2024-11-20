<?php
$link = new mysqli("localhost", "root", "", "bmw_web");

if ($link->connect_error) {
    die("Kết nối thất bại: " . $link->connect_error);
}

$don_hang_id = $_GET['don_hang_id'];
$status = $_GET['status'];

if ($status == 'confirmed') {
    $new_status = 'Xác nhận';
} elseif ($status == 'delivered') {
    $new_status = 'Đang giao';
}

// Cập nhật trạng thái đơn hàng
$sql = "UPDATE don_hang SET trangthai=? WHERE don_hang_id=?";
$stmt = $link->prepare($sql);
$stmt->bind_param("si", $new_status, $don_hang_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Trạng thái đơn hàng đã được cập nhật thành công.";
} else {
    echo "Không thể cập nhật trạng thái đơn hàng.";
}

// Chuyển hướng quay lại trang trước hoặc trang danh sách đơn hàng
header("Location: ../admin.php?pid=1");
exit();
?>
