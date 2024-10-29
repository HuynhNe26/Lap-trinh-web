<?php
$link = new mysqli('localhost', 'root', '', 'bmw_web');

if ($link->connect_error) {
    die("Kết nối thất bại: " . $link->connect_error);
}

$sql_chitiettheloai = "SELECT * FROM chitiettl";
$result_chitiettheloai = $link->query($sql_chitiettheloai);
?>

<div class="main-content">
    <h1>Thêm sản phẩm mới</h1>
    <p>Vui lòng điền đầy đủ thông tin để thêm sản phẩm vào hệ thống.</p>
    <form action="control/crl_themsp.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="chitiettheloai">Chi tiết thể loại xe</label>
            <select name="chitiettl" id="chitiettheloai">
                <?php
                while ($row_chitiettheloai = $result_chitiettheloai->fetch_assoc()) {
                    echo '<option name="chitiettheloai" value="'.$row_chitiettheloai['machitiettl'].'">'.$row_chitiettheloai['tenchitiettl'].'</option>';
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="machitiettl">Mã chi tiết thể loại xe</label>
            <input type="text" id="product_type" name="machitiettl" placeholder="Nhập mã chi tiết thể lọai xe" required>
        </div>
        
        <div class="form-group">
            <label for="product_name">Tên sản phẩm</label>
            <input type="text" id="product_name" name="tensp" placeholder="Nhập tên sản phẩm" required>
        </div>
        <div class="form-group">
            <label for="product_price">Giá (VNĐ)</label>
            <input type="number" id="product_price" name="dongia" placeholder="Nhập giá sản phẩm" required>
        </div>

        <div class="form-group">
            <label for="product_description">Mô tả sản phẩm</label>
            <textarea id="product_description" name="mota" placeholder="Nhập mô tả sản phẩm" required></textarea>
        </div>

        <div class="form-group">
            <label for="product_image">Hình ảnh sản phẩm</label>
            <input type="file" id="product_image" name="hinhanh" accept="image/*" required>
        </div>

        <div class="form-group">
            <label for="product_link">Link sản phẩm</label>
            <input type="text" id="product_image" name="link" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Thêm sản phẩm">
            <input type="reset" value="Xóa nội dung">
        </div>
    </form>
</div>


