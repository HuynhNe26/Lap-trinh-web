<div class="main-content">
    <!-- Welcome message -->
    <h1>Chào mừng <?php echo $_SESSION['hovaten_admin']; ?> đến trang hệ thống quản lý</h1>
    <p>Trang này cung cấp các thông tin thống kê tổng quan về tình hình đơn hàng, doanh thu, và sản phẩm.</p>

    <!-- Section: Overview Statistics -->
    <div class="statistics-overview">
        <div class="stat-box">
            <h3>Tổng số đơn hàng</h3>
            <p>150 đơn hàng</p>
        </div>

        <div class="stat-box">
            <h3>Tổng doanh thu</h3>
            <p>30,500,000,000 VNĐ</p>
        </div>

        <div class="stat-box">
            <h3>Số lượng khách hàng</h3>
            <p>75 khách hàng</p>
        </div>

        <div class="stat-box">
            <h3>Sản phẩm bán chạy nhất</h3>
            <p>BMW Series 3</p>
        </div>
    </div>

    <!-- Section: Order Details -->
    <h2>Chi tiết đơn hàng gần đây</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Khách hàng</th>
                <th>Ngày đặt hàng</th>
                <th>Tổng giá trị (VNĐ)</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>DH150</td>
                <td>Phạm Quang H</td>
                <td>2024-10-22</td>
                <td>18,000,000</td>
                <td>Đang giao</td>
            </tr>
            <tr>
                <td>DH149</td>
                <td>Nguyễn Thanh T</td>
                <td>2024-10-21</td>
                <td>45,500,000</td>
                <td>Đã giao</td>
            </tr>
            <tr>
                <td>DH148</td>
                <td>Lê Thị K</td>
                <td>2024-10-21</td>
                <td>30,000,000</td>
                <td>Chờ xác nhận</td>
            </tr>
        </tbody>
    </table>
</div>
