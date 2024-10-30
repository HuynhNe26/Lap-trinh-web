<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Liên hệ với chúng tôi để biết thêm thông tin.">
    <title>Liên hệ với chúng tôi</title>
    <!-- Kết nối với file CSS để định dạng giao diện -->
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="stylesheet" href="../css/fontawesome-free-6.6.0/css/all.min.css">
    <script src="js/main.js" defer></script>
    <style>
        
        .form_out {
    display: flex;
    flex-direction: column;
    max-width: 100%;
    align-items: center;
    background-image: url(image/dangkilaithu.png);
    background-position:-100px;

  }

  .form-dangkilt {
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 80%;
    max-width: 600px;
  }

  .form-dangkilt legend {
    font-weight: bold;
    margin-bottom: 5px;
  }

  .form-dangkilt input[type=text], .form-dangkilt input[type=number], .form-dangkilt select, .form-dangkilt textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  .form-dangkilt button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
  }

  .nut-xacnhan {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
  }

  .form-dangkilt button:hover {
    background-color: #45a049;
  }

  .nut-xacnhan:hover {
    background-color: #45a049;
  }

  html {
    scroll-behavior: smooth;
  }

</style>

   <div class="form_out" style="display:flex; flex-direction:column; max-width:100%; align-items:center">
        <h1 style="font-size: 35px; color:lavender">XÁC NHẬN ĐẶT XE</h1>

        <form class="form-dangkilt" action="" method="post" enctype="multipart/form-data">
                            <legend for="title">Họ và tên</legend>
                            <input type="text" name="name" value="Lê Phạm Bảo Uyên" readonly>
                            </select> <br>
                            <legend for="number">Số điện thoại</legend>
                            <input type="number" value="0973628172" readonly> <br>
                            <legend for="email">Email</legend>
                            <input type="text" value="lephambaouyen@gmail.com" readonly> <br>
                            <legend for="province">Thành phố/Tỉnh</legend>
                            <input type="text" value="Đồng Nai" readonly> <br>
                            <legend for="district">Địa chỉ</legend>
                            <input type="text" name="district" id="district" value="Ấp 5, xã Thạnh Phú, huyện Vĩnh Cửu" readonly>
                            <legend for="district">Mẫu xe bạn chọn</legend>
                            <input type="text" name="type" id="type" value="BMW 3" readonly>
                            <legend for="district">Số lượng</legend>
                            <input type="text" name="type" id="type" value="1" readonly>
                            <legend for="district">Màu sắc</legend>
                            <input type="text" name="type" id="type" value="Trắng" readonly>
                            <legend for="district">Nội thất</legend>
                            <input type="text" name="type" id="type" value="Da" readonly>
                            <legend for="district">Thành tiền</legend>
                            <input type="text" name="type" id="type" value="1.529.000.000" readonly>
                            <legend for="district">Thành tiền (viết chữ)</legend>
                            <input type="text" name="type" id="type" value="Một tỷ năm trăm hai mươi lăm triệu" readonly>
                            <legend for="district">Tỉ giá</legend>
                            <input type="text" name="type" id="type" value="VNĐ (Việt Nam Đồng)" readonly>
                            <button class="button" onclick="goToNextPage()">Thanh toán</button>
                            <button class="button" onclick="goToPreviousPage()">Quay lại</button>
                        </form>
    </div>
    <!-- <div id="thanhtoan-qr">
        <div class="nganhang">
            <ul style="list-style:none">
                <li>
                    
                </li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div> -->

    <script>
        function goToPreviousPage() {
            // Đường dẫn tới trang trước
            window.location.href = "index.php?pid=9";
        }

        function goToNextPage() {
            // Đường dẫn tới trang sau
            window.location.href = "";
        }
    </script>
