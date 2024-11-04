<?php 
$link = new mysqli("localhost", "root", "", "bmw_web");
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
//PHÂN TRANG SẢN PHẨM NÈ :3//
if (!isset($_GET['p'])) {
    $p = 1;
}
else {
    $p = intval($_GET['p']);
}
$sosp = 4; 
$x = ($p - 1) * $sosp;
//TỚI ĐÂY AH//
$sql_theloai = "select * from theloai";
$result_theloai = $link->query($sql_theloai);

$theloai = isset($_GET['matl']) ? (int)$_GET['matl'] : 0;
$sql_chitiettheloai = "select * from chitiettl where matl='$theloai'";
$result_chitiettheloai = $link->query($sql_chitiettheloai);

$chitiettheloai = isset($_GET['machitiettl']) ? (int)$_GET['machitiettl'] : 0;
$sql_sanpham = "select * from sanpham where machitiettl='$chitiettheloai'";
$result_sanpham = $link->query($sql_sanpham);
//CÒN NÈ, KHÚC NÀY LÀ ĐẾM TỔNG SP PHÂN TRANG TRUY VẤN NHA//
$sql_count = "SELECT COUNT(*) as total FROM sanpham WHERE machitiettl='$chitiettheloai'";
$count_result = $link->query($sql_count);
$row_count = $count_result->fetch_assoc();
$total_records = $row_count['total'];
$tongsotrang = ceil($total_records / $sosp);
?>

<div style="text-align:center;margin-top:75px">
<div style="border-bottom:1px solid var(--lightgrey-color)">
<ul style="list-style:none;display:inline-flex;margin:auto;text-align:center;padding:0;border-top:1px solid var(--lightgrey-color); border-right:1px solid var(--lightgrey-color); border-left:1px solid var(--lightgrey-color)">
<?php
while ($row = $result_theloai->fetch_assoc())
{
?>
    <a href="index.php?pid=1&matl=<?php echo $row['matl']; ?>" style="text-decoration:none; color:grey;font-size:16px;font-family:arial;font-weight:bold;">
    <li class="theloai__li" style="padding:15px 30px 15px 30px; border-right:1px solid lightgrey ">
        <?php echo $row["tentl"]; ?>
    </li>
    </a>
<?php
}
?>
</ul>
</div>

<div class="chitiettl__div" style="border-bottom:1px solid var(--lightgrey-color);">
        <ul class="chitiettl__ul" style="list-style:none;display:inline-flex;text-align:center;padding:0;cursor:pointer;align-items:center;margin:auto">
        <?php
        while ($row = $result_chitiettheloai->fetch_assoc())
        {
        ?>
        <a class="chitiettl__a" href="index.php?pid=1&matl=<?php echo $row['matl'] ?>&machitiettl=<?php echo $row['machitiettl'] ?>">
            <li class="chitiettl__li" style="padding:15px 15px">
                <?php echo $row["tenchitiettl"]; ?>
            </li>
        </a>
        <?php
        } 
        ?>
        </ul>
</div>
</div>

<div>
    <?php
    if ($result_chitiettheloai->num_rows > 0) {
        while ($row = $result_sanpham->fetch_assoc()) {
    ?>
            <a  class="sanpham__a" target="blank" href="product_php/<?php echo $row['link']; ?>" style="text-decoration:none;margin-left:60px;float:left;margin-top:60px">
                <img class="sanpham__img" src="image/<?php echo $row['hinhanh']; ?>" style="width:300px; height:200px" ><br> <br> <br>
                <span class="sanpham__content-main"  ><?php echo $row['tensp']; ?></span> <br>
                <span class="sanpham__content" ><?php echo $row['mota']; ?></span> <br>
                <span class="sanpham__content" ><?php echo $row['dongia']; ?>&nbsp;VNĐ</span> <br>
                <span>
                    <input type="submit" name="submit__giohang" value="Giỏ hàng" style="min-width:100px;height:30px"> 
                    <input type="submit" name="submit__muangay" value="Mua ngay" style="min-width:100px;height:30px"> 
                </span>
            </a>
            
    <?php
        }
    } else {
    }
    $link->close();
    ?>
</div>
//THÊM 1 KHÚC NỮA NHA//
<div style="margin:auto; clear:both; text-align:center; color:dimgray; padding-top:50px">
    <?php
    for ($i = 1; $i <= $tongsotrang; $i++) {
        if ($i == $p) {
            echo "<b style='padding:3px; text-decoration: underline; color:black'>" . $i . "</b>&nbsp;";
        } 
        else {
            echo "<a style='padding:3px; text-decoration: none; color:dimagray;' href='index.php?pid=1&matl=" . $theloai . "&machitiettl=" . $chitiettheloai . "&p=" . $i . "'>" . $i . "</a>&nbsp;";
        }
    }
    ?>
</div>
//TỚI ĐÂY HẾT RUI//
<script>
    
</script>

