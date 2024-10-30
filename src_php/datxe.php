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

  .form-dangkilt button:hover {
    background-color: #45a049;
  }

    </style>

   <div class="form_out" style="display:flex; flex-direction:column; max-width:100%; align-items:center">
        <h1 style="font-size: 35px; color:lavender">THÔNG TIN ĐẶT XE</h1>

        <form class="form-dangkilt" action="index.php?pid=9" method="post">
                            <legend for="type">Mẫu xe muốn đặt*</legend>
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
                            <legend>Màu sắc:</legend>
                            <select id="color" name="color" required>
                                <option value="">Vui lòng chọn màu</option>
                                <option value="Trắng">Trắng</option>
                                <option value="Đen">Đen</option>    
                                <option value="Xanh lá">Xanh lá</option>
                                <option value="Xanh đen">Xanh đen</option>
                                <option value="Vàng">Vàng</option>
                                <option value="Hồng">Hồng</option>
                                <option value="Cam">Cam</option>
                                <option value="Tím">Tím</option>
                                <option value="Đỏ">Đỏ</option>
                                <option value="Nâu">Nâu</option>
                            </select> <br>
                            <legend>Nội thất:</legend>
                            <select id="interior" name="interior" required>
                                <option value="">Vui lòng chọn nội thất</option>
                                <option value="Da">Da</option>
                                <option value="Đen">Đen</option>
                                <option value="Nâu">Nâu</option>
                            </select> <br>
                            <button class="button" onclick="goToNextPage()">Tiếp theo</button>
                        </form>
    </div>

    <script>
        function goToPreviousPage() {
            // Đường dẫn tới trang trước
            window.location.href = "";
        }

        function goToNextPage() {
            // Đường dẫn tới trang sau
            window.location.href = "index.php?pid=9";
        }
    </script>
