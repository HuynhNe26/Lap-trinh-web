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

  .form-dangkilt input[type=text], .form-dangkilt input[type=number], .form-dangkilt select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  .form-dangkilt .nut-xacnhan {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
  }

  .form-dangkilt .nut-xacnhan:hover {
    background-color: #45a049;
  }

    </style>

   <div class="form_out" style="display:flex; flex-direction:column; max-width:100%; align-items:center">
        <h1 style="font-size: 35px; color:lavender">ĐĂNG KÍ LÁI THỬ</h1>

        <form class="form-dangkilt" action="dangkilt.php" method="post">
                            <legend for="title">Danh xưng*</legend>
                            <select id="title" name="title" required>
                                <option value="">Vui lòng chọn</option>
                                <option value="mr">Anh</option>
                                <option value="ms">Chị</option>
                            </select> <br>
                            <legend for="name">Tên*</legend>
                            <input type="text" required> <br>
                            <legend for="name">Họ*</legend>
                            <input type="text" required> <br>
                            <legend for="number">Số điện thoại*</legend>
                            <input type="number"> <br>
                            <legend for="email">Email*</legend>
                            <input type="text" required> <br>
                            <legend for="province">Thành phố/Tỉnh*</legend>
                            <select id="province" name="province" required>
                                <option value="">Vui lòng chọn</option>
                                <option value="TP. Hồ Chí Minh">Hồ Chí Minh</option>
                                <option value="Hà Nội">Hà Nội</option>
                                <option value="Điện Biên">Điện Biên</option>
                                <option value="Hòa Bình">Hòa Bình</option>
                                <option value="Lai Châu">Lai Châu</option>
                                <option value="Sơn La">Sơn La</option>
                                <option value="HCM">Hà Giang</option>
                                <option value="HCM">Cao Bằng</option>
                                <option value="HCM">Bắc Kạn</option>
                                <option value="HCM">Lạng Sơn</option>
                                <option value="HCM">Tuyên Quang</option>
                                <option value="HCM">Thái Nguyên</option>
                                <option value="HCM">Phú Thọ</option>
                                <option value="HCM">Bắc Giang</option>
                                <option value="HCM">Quảng Ninh</option>
                                <option value="HCM">Bắc Ninh</option>
                                <option value="HCM">Ninh Bình</option>
                                <option value="HCM">Hà Nam</option>
                                <option value="HCM">Lào Cai</option>
                                <option value="HCM">Hải Dương</option>
                                <option value="HCM">Hải Phòng</option>
                                <option value="HCM">Hưng Yên</option>
                                <option value="HCM">Nam Định</option>
                                <option value="HCM">Thái Bình</option>
                                <option value="HCM">Vĩnh Phúc</option>
                                <option value="HCM">Thanh Hóa</option>
                                <option value="HCM">Nghệ An</option>
                                <option value="HCM">Vinh</option>
                                <option value="HCM">Hà Tĩnh</option>
                                <option value="HCM">Quảng Bình</option>
                                <option value="HCM">Quảng Trị</option>
                                <option value="HCM">Thừa Thiên Huế</option>
                                <option value="HCM">Đà Nẵng</option>
                                <option value="HCM">Quảng Nam</option>
                                <option value="HCM">Quảng Ngãi</option>
                                <option value="HCM">Bình Định</option>
                                <option value="HCM">Quảng Ngãi</option>
                                <option value="HCM">Phú Yên</option>
                                <option value="HCM">Yên Bái</option>
                                <option value="HCM">Gia Lai</option>
                                <option value="HCM">Khánh Hòa</option>
                                <option value="HCM">Ninh Thuận</option>
                                <option value="HCM">Đắk Lắk</option>
                                <option value="HCM">Đắk Nông</option>
                                <option value="HCM">Lâm Đồng</option>
                                <option value="HCM">Bình Dương</option>
                                <option value="HCM">Bình Phước</option>
                                <option value="HCM">Tây Ninh</option>
                                <option value="HCM">Đồng Nai</option>
                                <option value="HCM">Bà Rịa Vũng Tàu</option>
                                <option value="HCM">Cần Thơ</option>
                                <option value="HCM">Long An</option>
                                <option value="HCM">An Giang</option>
                                <option value="HCM">Đồng Tháp</option>
                                <option value="HCM">Tiền Giang</option>
                                <option value="HCM">Bến Tre</option>
                                <option value="HCM">Vĩnh Long</option>
                                <option value="HCM">Trà Vinh</option>
                                <option value="HCM">Hậu Giang</option>
                                <option value="HCM">Kiên Giang</option>
                                <option value="HCM">Sóc Trăng</option>
                                <option value="HCM">Bạc Liêu</option>
                                <option value="HCM">Cà Mau</option>
                                <option value="HCM">Kon Tum</option>
                            </select> <br>
                            <legend for="district">Quận/Huyện:</legend>
                            <select id="district" name="district" required>
                                <option value="">Chọn quận/huyện</option>
                            </select> <br>
                            <legend for="type">Mẫu xe muốn lái thử*</legend>
                            <select id="type" name="type" required>
                                <option value="">Vui lòng chọn</option>
                                <option value="BMW 3 Series Sedan">BMW 3 Series Sedan</option>
                                <option value="BMW 4 Series Convertible">BMW 4 Series Convertible</option>
                                <option value="BMW 4 Series Gran Coupé">BMW 4 Series Gran Coupé</option>
                                <option value="BMW 5 Series Sedan">BMW 5 Series Sedan</option>
                                <option value="BMW 7 Series Sedan">BMW 7 Series Sedan</option>
                                <option value="BMW 8 Series Gran Coupé">BMW 8 Series Gran Coupé</option>
                                <option value="BMW X3 Serie">BMW X3 Series</option>
                                <option value="BMW X5 Series">BMW X5 Series</option>
                                <option value="BMW X6 Series">BMW X6 Series</option>
                                <option value="BMW X7 Serie">BMW X7 Series</option>
                                <option value="BMW XM Series">BMW XM Series</option>
                                <option value="BMW iX3">BMW iX3</option>
                                <option value="BMW i4 Gran Coupé">BMW i4 Gran Coupé</option>
                                <option value="BMW i7">BMW i7</option>
                                <option value="BMW Z4">BMW Z4</option>
                            </select> <br>
                            <input type="submit" class="nut-xacnhan" name="submit" value="Gửi liên hệ">
                        </form>
    </div>

