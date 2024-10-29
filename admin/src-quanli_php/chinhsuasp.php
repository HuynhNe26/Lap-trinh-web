<div class="main-content">
    <h1>Sửa sản phẩm</h1>

    <!-- Product Edit Form -->
    <form action="edit_product.php?id=1" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="product_name">Tên sản phẩm:</label>
            <input type="text" id="product_name" name="product_name" value="BMW 3 Series" required>
        </div>
        
        <div class="form-group">
            <label for="product_price">Giá (VNĐ):</label>
            <input type="number" id="product_price" name="product_price" value="1529000000" required>
        </div>

        <div class="form-group">
            <label for="product_description">Mô tả:</label>
            <textarea id="product_description" name="product_description" required>Mẫu sedan thể thao sang trọng</textarea>
        </div>

        <div class="form-group">
            <label for="product_image">Hình ảnh:</label>
            <input type="file" id="product_image" name="product_image">
            <small>Để trống nếu không thay đổi.</small>
        </div>

        <div class="form-group">
            <input type="submit" value="Cập nhật sản phẩm" class="btn-update">
        </div>
    </form>
</div>
