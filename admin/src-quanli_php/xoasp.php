<div class="main-content">
    <h1>Xóa sản phẩm</h1>

    <div class="confirmation-message">
        <p>Bạn có chắc chắn muốn xóa sản phẩm sau đây không?</p>
        <table class="product-info-table">
            <tr>
                <th>Tên sản phẩm:</th>
                <td>BMW 3 Series</td>
            </tr>
            <tr>
                <th>Giá (VNĐ):</th>
                <td>1.529.000.000</td>
            </tr>
            <tr>
                <th>Mô tả:</th>
                <td>Mẫu sedan thể thao sang trọng</td>
            </tr>
            <tr>
                <th>Hình ảnh:</th>
                <td>
                    <img src="image/BMW-3.webp" alt="BMW 3 Series" style="width: 100px; height: auto;">
                </td>
            </tr>
        </table>

        <form action="delete_product.php?id=1" method="post" style="margin-top: 20px;">
            <input type="submit" value="Xóa sản phẩm" class="btn-delete">
            <a href="manage_products.php" class="btn-cancel">Hủy</a>
        </form>
    </div>
</div>
