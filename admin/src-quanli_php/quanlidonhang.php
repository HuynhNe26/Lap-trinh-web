<?//link tới sql nào thi chưa làm được 
$link = new mysqli("localhost", "root", "", "bmw_web");
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);
}
$hoadon= = "SELECT * FROM donhang";
$result_hoadon = $link->query($hoadon);
?>
<div class="main-content">
    <h1>Quản lý đơn hàng</h1>
    <p>Danh sách các đơn hàng hiện tại:</p>

    <table class="table">
        <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Tổng tiền (VNĐ)</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if ($result_hoadon->num_rows > 0) {
            while ($row = $result_hoadon->fetch_assoc()) {
            echo "
            <tr>
                <td>{$row['madh']}</td>
                <td>{$row['hovaten']}</td>
                <td>{$row['email']}</td>
                <td>{$row['tongdonhang']}</td>
                <td>";
                    if($row['trangthai'] == 0) {
                        echo "Chờ xác nhận";
                    } elseif ($row['trangthai'] == 1) {
                        echo "Đã xác nhận";
                    } else {
                        echo "Đang giao hàng";
                    }
                echo "</td>
                <td>
                    <a href='order_detail.php?id={$row['madh']}' class='detail-btn'>Chi tiết</a>
                    <a href='update_order.php?id={$row['madh']}&status=confirmed' class='confirm-btn'>Xác nhận</a>
                    <a href='update_order.php?id={$row['madh']}&status=delivered' class='deliver-btn'>Đang giao</a>
                    <a href='delete_order.php?id={$row['madh']}' class='delete-btn'>Xóa</a>
                </td>
            </tr>";
                }
            }
        ?>

        </tbody>
    </table>
</div>
