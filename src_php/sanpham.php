<?php 
$link = new mysqli("localhost", "root", "", "bmw_web");
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
$sql_theloai = "select * from theloai";
$result_theloai = $link->query($sql_theloai);

$theloai = isset($_GET['matl']) ? (int)$_GET['matl'] : 0;
$sql_chitiettheloai = "select * from chitiettl where matl='$theloai'";
$result_chitiettheloai = $link->query($sql_chitiettheloai);

$chitiettheloai = isset($_GET['machitiettl']) ? (int)$_GET['machitiettl'] : 0;
$sql_sanpham = "select * from sanpham where machitiettl='$chitiettheloai'";
$result_sanpham = $link->query($sql_sanpham);
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

<div style="border-bottom:1px solid var(--lightgrey-color);">
        <ul style="list-style:none;display:inline-flex;text-align:center;padding:0;cursor:pointer;align-items:center;margin:auto">
        <?php
        while ($row = $result_chitiettheloai->fetch_assoc())
        {
        ?>
        <a class="chitiettl__a" href="index.php?pid=1&matl=<?php echo $row['matl'] ?>&machitiettl=<?php echo $row['machitiettl'] ?>" style="text-decoration:none; color: grey;font-size:15px;font-family:arial;font-weight:bold;">
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

<?php
if ($result_chitiettheloai->num_rows > 0) {
    while ($row = $result_sanpham->fetch_assoc()) {
?>
        <a class="sanpham__a" href="index.php?pid=8&masp=<?php echo $row['masp']; ?>" style="text-decoration:none;margin-left:60px;float:left;margin-top:60px">
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
} else {
}
$link->close();
?>
