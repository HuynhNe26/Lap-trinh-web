<div class="thongkeluotmua-container">
    <h1>Thống kê lượt mua</h1>
    
    <!-- Filter Section -->
    <form action="purchase_statistics.php" method="get" class="thongkeluotmua-form">
        <label for="from_date">Từ ngày:</label>
        <input type="date" id="from_date" name="from_date" required>

        <label for="to_date">Đến ngày:</label>
        <input type="date" id="to_date" name="to_date" required>

        <button type="submit" class="button-thongkeluotmua">Lọc</button>
    </form>

    <!-- Purchase Statistics Table -->
    <table class="thongkeluotmua-table">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Mô tả</th>
                <th>Giá mỗi sản phẩm (VNĐ)</th>
                <th>Tổng doanh thu (VNĐ)</th>
                <th>Số lần mua</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example data, replace with dynamic data from the backend -->
            <tr>
                <td>BMW 3 Series</td>
                <td>Xăng</td>
                <td>1.529.000.000</td>
                <td>15.290.000.000</td>
                <td>8</td>
            </tr>
            <tr>
                <td>BMW i7</td>
                <td>Hybrid</td>
                <td>6.799.000.000</td>
                <td>33.995.000.000</td>
                <td>5</td>
            </tr>
            <tr>
                <td>BMW XM</td>
                <td>Plug-in Hybrid</td>
                <td>10.999.000.000</td>
                <td>32.997.000.000</td>
                <td>3</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3"><strong>Tổng cộng:</strong></td>
                <td><strong>82.282.000.000</strong></td>
                <td><strong>16</strong></td>
            </tr>
        </tfoot>
    </table>
</div>
