<?php
$link = new mysqli('localhost','root','','bmw_khachhang');
if(isset($_SESSION['username'])) {
$tenkhachhang = $_SESSION['username'];
$sql_thongtinkhachhang = "SELECT * FROM member_user WHERE hovaten like '%$tenkhachhang'";
$result_thongtinkhachhang = $link->query($sql_thongtinkhachhang);
$row = $result_thongtinkhachhang->fetch_assoc();
?>
<link rek="stylesheet" href="../main.css">
    <style>
        
        .form_out {
    display: flex;
    flex-direction: column;
    max-width: 100%;
    align-items: center;
    background-image: url(image/dangkilaithu.png);
    background-position:-100px;

  }

  .chinhsuathongtinuser {
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 80%;
    max-width: 600px;
  }

  .chinhsuathongtinuser legend {
    font-weight: bold;
    margin-bottom: 5px;
  }

  .chinhsuathongtinuser input[type=text], .chinhsuathongtinuser input[type=number], .chinhsuathongtinuser select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  .chinhsuathongtinuser .nut-xacnhan {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
  }

  .chinhsuathongtinuser .nut-xacnhan:hover {
    background-color: #45a049;
  }
</style>

   <div class="form_out" style="display:flex; flex-direction:column; max-width:100%; align-items:center">
        <h1 style="font-size: 35px; color:lavender">THÔNG TIN CỦA <?php echo $_SESSION['username'] ?></h1>

        <form class="chinhsuathongtinuser" action="dangkilt.php" method="post">
            <legend for="name">Họ và tên</legend>
            <input type="text" name="<?php $row['hovaten'] ?>" readonly> <br>
            <legend for="name">Họ*</legend>
            <input type="text" required> <br>
            <legend for="number">Số điện thoại*</legend>
            <input type="number"> <br>
            <legend for="email">Email*</legend>
            <input type="text" required> <br>
            <legend for="province">Thành phố/Tỉnh*</legend>
            <input type="submit" class="nut-xacnhan" name="submit" value="Gửi liên hệ">
                        </form>
    </div>

<?php
}
?>
