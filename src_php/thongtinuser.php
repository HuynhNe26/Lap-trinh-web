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

          <form class="chinhsuathongtinuser" action="index.php?pid=14" method="post" enctype="multipart/form-data">
              <legend for="name">Họ và tên</legend>
              <input type="text" value="<?php echo $row['hovaten'] ?>" readonly> <br>
              <legend for="name">Email</legend>
              <input type="text" value="<?php echo $row['email'] ?>" readonly> <br>
              <legend for="number">Ngày sinh</legend>
              <input type="text" value="<?php echo $row['ngaysinh'] ?>" readonly> <br>
              <legend for="email">Giới tính</legend>
              <input type="text" value="<?php echo $row['gioitinh'] ?>" readonly> <br>
              <legend for="province">Địa chỉ</legend>
              <input type="text" value="<?php echo $row['diachi'] ?>" readonly> <br>
              <input type="submit" class="nut-xacnhan" name="submit" value="Chỉnh sửa thông tin">
          </form>
    </div>
<?php
}
?>
