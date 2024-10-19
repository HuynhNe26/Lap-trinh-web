<?php 
$link = new mysqli("localhost", "root", "", "bmw_web");
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
if(isset($_POST['timkiem'])) {
$timkiemxe = $_POST['timkiem'];
echo '<p style="font-size:18px;font-weight:600; margin-left:50px">Sản phẩm được tìm: ' . $timkiemxe . '</p>';
$sql_timkiemxe = "select * from sanpham where tensp like '%$timkiemxe%'";
$result_timkiemxe = $link->query($sql_timkiemxe);
while ($row = $result_timkiemxe->fetch_assoc()) {
?>
        <a class="sanpham__a" href="" style="text-decoration:none;margin-left:60px;float:left;margin-top:60px">
            <img class="sanpham__img" src="image/<?php echo $row['hinhanh']; ?>" ><br> <br> <br>
            <span class="sanpham__content-main"  ><?php echo $row['tensp']; ?></span> <br>
            <span class="sanpham__content" ><?php echo $row['mota']; ?></span> <br>
            <span class="sanpham__content" ><?php echo $row['dongia']; ?>&nbsp;VNĐ</span> <br>
            <span>
                <button class="sanpham__button" onclick="button" style="min-width:100px;height:30px">Giỏ hàng</button>
                <button class="sanpham__button" onclick="button" style="min-width:100px;height:30px">Mua ngay</button>
            </span>
        </a>
<?php
}
}
?>
