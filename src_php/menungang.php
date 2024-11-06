<?php
ob_start();
$link = new mysqli('localhost', 'root', '', 'bmw_web');
if ($link->connect_error) {
    die("Kết nối thất bại: " . $link->connect_error);
}

$sql_timkiem = "SELECT * FROM sanpham";
$result_timkiem = $link->query($sql_timkiem);
if (!$result_timkiem) {
    die("Lỗi truy vấn: " . $link->error);
}
?>

<div style="display: flex; align-items: center; justify-content: flex-start; flex-wrap: nowrap; transition: all .3s;">
    <div style="margin-top: 10px">
        <a class="menungang__a" href="index.php?pid">TRANG CHỦ</a>
        <a class="menungang__a" href="index.php?pid=1&matl=1&machitiettl=1&masp=1">SẢN PHẨM</a>
        <a class="menungang__a" href="index.php?pid=2">ĐĂNG KÍ LÁI THỬ</a>
        <a class="menungang__a" href="index.php?pid=3">LIÊN HỆ</a>
        <a class="menungang__a" href="index.php?pid=4">ĐẶT XE</a>
    </div>
    <div style="margin-left: 220px; margin-top: 5px;">
        <form class="menungang__form" action="index.php?pid=7" method="post" style="display: flex; width: 100%;">
            <select name="timkiem" class="menungang__select" required>
                <option value="">Vui lòng chọn loại xe cần tìm!</option>
                <?php while ($row = $result_timkiem->fetch_assoc()): ?>
                    <option value="<?php echo htmlspecialchars($row['tensp']); ?>"><?php echo htmlspecialchars($row['tensp']); ?></option>
                <?php endwhile; ?>
            </select>
            <input class="menungang__input" type="submit" name="timkiem__submit" value="Tìm kiếm">
        </form>
    </div>
    <div style="margin-left: 20px;">
        <a class="menungang__a" href="index.php?pid=8">
            <img src="image/shopping-cart_icon.png" style="width:30px; height:30px">
        </a>
    </div>
    <div style="margin-left: 10px; margin-top: 10px">
        <?php if (isset($_SESSION['username'])): ?>
    <a class="menungang__a" href="index.php?pid=12" style="font-size:14px; text-decoration:none"><?php echo htmlspecialchars($_SESSION['username']); ?></a>
    <a class="menungang__a" href="src_php/login/dangxuat.php">ĐĂNG XUẤT</a>
<?php else: ?>
    <a class="menungang__a" href="index.php?pid=6&page=dangnhap">ĐĂNG NHẬP</a>
<?php endif; ?>
    </div>
</div>
