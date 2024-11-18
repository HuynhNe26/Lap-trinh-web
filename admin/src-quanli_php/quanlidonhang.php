<?php
$link = new mysqli("localhost", "root", "", "bmw_web");
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);
}
$hoadon= = "SELECT * FROM don_hang";
$result = $link->query($sql);
?>
<div class="main-content">
    <h1>Quản lý đơn hàng</h1>
    <p>Danh sách các đơn hàng hiện tại:</p>
    <?php
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <tr>
                <th>ID Đơn Hàng</th>
                <th>Họ và Tên</th>
                <th>Email</th>
                <th>Tổng Tiền</th>
                <th>Trạng Thái</th>
                <th>Hành Động</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>{$row['don_hang_id']}</td>
            <td>{$row['hovaten']}</td>
            <td>{$row['email']}</td>
            <td>{$row['tongtien']}</td>
            <td>{$row['trangthai']}</td>
            <td>
                <a href='update_order.php?don_hang_id={$row['don_hang_id']}&status=confirmed' class='confirm-btn'>Xác nhận</a>
                <a href='update_order.php?don_hang_id={$row['don_hang_id']}&status=delivered' class='deliver-btn'>Đang giao</a>
                <a href='delete_order.php?don_hang_id={$row['don_hang_id']}' class='delete-btn'>Xóa</a>
            </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "Không có đơn hàng nào.";
}

$link->close();
?>
