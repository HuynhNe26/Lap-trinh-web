<div class="main-content">
    <h1>Quản lý đơn hàng</h1>
    <p>Danh sách các đơn hàng hiện tại:</p>

    <!-- Order Management Table -->
    <table class="table">
        <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Tổng tiền (VNĐ)</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example Order 1 -->
            <tr>
                <td>DH001</td>
                <td>Nguyễn Văn A</td>
                <td>nguyenvana@example.com</td>
                <td>0912345678</td>
                <td>1.000.000</td>
                <td>Chờ xác nhận</td>
                <td>
                    <a href="order_detail.php?id=DH001" class="detail-btn">Chi tiết</a>
                    <a href="update_order.php?id=DH001&status=confirmed" class="confirm-btn">Xác nhận</a>
                    <a href="update_order.php?id=DH001&status=delivered" class="deliver-btn">Đang giao</a>
                    <a href="delete_order.php?id=DH001" class="delete-btn">Xóa</a>
                </td>
            </tr>

            <!-- Example Order 2 -->
            <tr>
                <td>DH002</td>
                <td>Trần Thị B</td>
                <td>tranthib@example.com</td>
                <td>0987654321</td>
                <td>2.500.000</td>
                <td>Đang giao</td>
                <td>
                    <a href="order_detail.php?id=DH002" class="detail-btn">Chi tiết</a>
                    <a href="update_order.php?id=DH002&status=delivered" class="deliver-btn">Hoàn tất</a>
                    <a href="delete_order.php?id=DH002" class="delete-btn">Xóa</a>
                </td>
            </tr>

            <!-- Example Order 3 -->
            <tr>
                <td>DH003</td>
                <td>Lê Văn C</td>
                <td>levanc@example.com</td>
                <td>0909876543</td>
                <td>3.700.000</td>
                <td>Hoàn tất</td>
                <td>
                    <a href="order_detail.php?id=DH003" class="detail-btn">Chi tiết</a>
                    <a href="delete_order.php?id=DH003" class="delete-btn">Xóa</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
