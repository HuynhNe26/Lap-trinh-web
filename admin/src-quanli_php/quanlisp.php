<div class="main-content">
    <h1>Quản lý sản phẩm</h1>

    <!-- Button to Add Product -->
    <div class="button-container">
        <a href="admin.php?pid=4" class="btn-add">Thêm sản phẩm</a>
    </div>

    <!-- Products Table -->
    <table class="products-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá (VNĐ)</th>
                <th>Mô tả</th>
                <th>Hình ảnh</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example data, replace with dynamic data from the backend -->
            <tr>
                <td>1</td>
                <td>BMW 3 Series</td>
                <td>1.529.000.000</td>
                <td>Mẫu sedan thể thao sang trọng</td>
                <td><img src="../image/BMW-3.webp" alt="BMW 3 Series" style="width: 60px; height: 40px;"></td>
                <td>
                    <a href="admin.php?pid=8" class="btn-edit">Sửa</a>
                    <a href="admin.php?pid=9" class="btn-delete">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>BMW i7</td>
                <td>6.799.000.000</td>
                <td>Xe điện sang trọng với công nghệ tiên tiến</td>
                <td><img src="../image/BMW-i7.webp" alt="BMW i7" style="width: 60px; height: 40px;"></td>
                <td>
                    <a href="admin.php?pid=8" class="btn-edit">Sửa</a>
                    <a href="admin.php?pid=9" class="btn-delete">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>BMW XM</td>
                <td>10.999.000.000</td>
                <td>Xe SUV mạnh mẽ và tiện nghi</td>
                <td><img src="../image/BMW-XM.webp" alt="BMW XM" style="width: 60px; height: 40px;"></td>
                <td>
                    <a href="admin.php?pid=8" class="btn-edit">Sửa</a>
                    <a href="admin.php?pid=9" class="btn-delete">Xóa</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
