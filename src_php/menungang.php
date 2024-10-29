<?php
$link = new mysqli ('localhost','root','','bmw_web');
$sql_timkiem = "SELECT * FROM sanpham";
$result_timkiem = $link->query($sql_timkiem);
?>
<div style="display:inline-flex; transition:all .3s">
    <div style="margin-top:10px">
        <a class="menungang__a" href="index.php?pid">TRANG CHỦ</a>
        <a class="menungang__a" href="index.php?pid=1&matl=1&machitiettl=1&masp=1">SẢN PHẨM</a>
        <a class="menungang__a" href="index.php?pid=2">ĐĂNG KÍ LÁI THỬ</a>
        <a class="menungang__a" href="index.php?pid=3">LIÊN HỆ</a>
        <a class="menungang__a" href="index.php?pid=4">ĐẶT XE</a>
    </div>
    <div style="margin-left:350px;margin-top:5px">
        <form action="index.php?pid=7" method="post" style="display:inline-flex">
            <select name="timkiem" type="search" class="menungang__select" required>
                <option name="timkiem" type="search" value="">Vui lòng chọn loại xe cần tìm!</option>
                <?php
                while ($row = $result_timkiem ->fetch_assoc()) {
                ?>    
                <option name="timkiem" type="search" value="<?php echo $row['tensp'] ?>"><?php echo $row['tensp'] ?></option>
                <?php
                }
                ?>
            </select> <br>
            <input class="menungang__input" type="submit" name="timkiem__submit" value="Tìm kiếm">
        </form>
    </div>
    <div style="margin-left:20px;">
        <a class="menungang__a" href="index.php?pid=8"><?php echo '<img src="image/shopping-cart_icon.png" style="width:30px; height:30px">' ?></a>
    </div>
    <div style="margin-left:10px;margin-top:10px">
        <a class="menungang__a" href="index.php?pid=6&&page=dangnhap">ĐĂNG NHẬP</a>
    </div>
</div>
