<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW 5</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="base.css">
    <link rel="icon" href="../image/Logo.png">
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/fontawesome-free-6.6.0/css/all.min.css">
    <link rel="stylesheet" href="">
    <style>
        html{
            scroll-behavior: smooth;
        }
        body {
            margin: 0;
            background-color: black;
            color: white;
        }
        .image-container {
            position: relative;
            text-align: center;
        }
        img {
            width: 100%;
            height: auto;
            display: block; /* Thêm dòng này */
            }
        .GTspi7 {
            position: absolute; /*chữ vào ảnh*/
            top: 20%; left:3%; /* Điều chỉnh vị trí dọc */
            color:ghostwhite;
            text-align: left;
            align-items: left;
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .button {
            display: inline-block;
            padding: 10px 40px 10px;
            margin-top: 20px;
            background-color:#555555; /* Màu nền cho nút */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            }
            .button:hover {
                background-color:#222222; /* Màu nền khi hover */
            }
        .menu {
            display: flex;
            background-color: white;
            padding: 20px 0px 20px 20px;
            border-bottom: 2px solid #666666; /* Viền dưới cho menu */
            position: sticky;
            z-index:1000;
            top:0;
            }

            .menu a {
                text-decoration: none;
                color:#666666;
                margin: 0 20px;
                font-weight: bold;
                position: relative; /* Để tạo hiệu ứng dưới */
                font-size:18px;
            }

            .menu a:hover {
                color:#444444; /* Màu chữ khi hover */
            }

            .menu a::after { /*over dưới chân*/
                content: '';
                display: block;
                height: 2px;
                width: 0;
                background:#555555; /* Màu viền dưới */
                transition: width 0.3s; /* Hiệu ứng chuyển tiếp */
                position: absolute;
                left: 50%;
                bottom: -2px; /* Đặt viền dưới */
                transform: translateX(-50%);
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }

            .menu a:hover::after,
            .menu a.active::after {
                width: 100%; /* Đầy chiều rộng khi hover hoặc active */
            }
        .font{
            color:#444444;
            background-color: white;
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;        }
        .mota {
            padding: 30px 0px 0px 40px;
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size:16.5px;
            background-color:white;
            color:#444444;
            line-height: 1.8;
            }
        .thietke{
            padding:10px 30px 0px 40px;
            display:inline-block;
            justify-content: space-between;
            background-color: white;
            color:#444444;
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size:16.5px;
            line-height: 1.8;
        }
        .GDbang {
            line-height: 1.8;
            width: auto;
            margin: 0 auto;
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: white;
        }
        .ptubang {
            font-size:17px;
            display: flex;
            justify-content: space-between;
            padding: 40px 40px 10px 30px;
            border-bottom: 1px solid #e0e0e0;
            background-color: white;
        }
        .ptubang :last-child {
            border-bottom: none;
        }
        .nhanchu {
            font-weight: normal;
            color: #333;
        }
        .gt {
            font-weight: bold;
            padding-left:100px;
            color: #000;
        }
    </style>
</head>
<body>
<div style="background-color:white">
    <div class="image-container">
        <img src="../image/bmw_5.webp" alt="BMW i7">
        <div class="GTspi7">
            <div style="font-size:45px; padding-bottom:10px;">THE 5</div>
            <div style="font-size:25px; padding-bottom:40px;">BMW 5 SERIES</div>
            <div>
                <a style="font-weight:bold; font-size:15px; " href="#" class="button">TƯ VẤN CHI TIẾT</a>
            </div>
            <div>
                <div style="float:left; padding-top:55%; font-size:22px;">Giá từ
                    <div style="font-size:15px"> 1.979.000.000 VNĐ </div>
                </div>
                <div style="float:left; padding-top:55%; padding-left: 50px; font-size:22px;">Nhiên liệu
                    <div style="font-size:15px"> Xăng </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu" style="color:#999999">
        <div> <a href="#tkkg">Thiết kế</a> </div>
        <div> <a href="#cnbv">Dịch vụ & Phụ tùng</a> </div>
    </div>
    <div class="mota">
        <div>BMW 5 Series là biểu tượng của sự kết hợp giữa thể thao và sang trọng. Ngay từ ánh nhìn đầu tiên, chiếc xe đã toát lên vẻ thanh lịch và mạnh mẽ riêng biệt. Các đường nét tinh tế tạo nên vẻ ngoài hiện đại và đẳng cấp. Nội thất sang trọng và tiện nghi được trang bị công nghệ tiên tiến cùng các tính năng dành riêng cho xe thể thao, mang lại trải nghiệm lái của tương lai. Động cơ vận hành của 5 Series mang đến cảm giác lái mạnh mẽ kết hợp cùng công nghệ đột phá, BMW 5 Series tạo nên sự thoải mái, tự tin và trên hết là niềm vui lái xe tuyệt vời trong mọi hành trình.</div>
    </div>
    <div id="tkkg" class="font" style="font-size:40px; padding:150px 0px 10px 40px">ĐỘNG CƠ VÀ CÔNG NGHỆ KHUNG GẦM CỦA BMW 5 SERIES.</div>
    <div  class="font" style="font-size:30px; padding:150px 0px 10px 40px">Thông tin về hệ thống truyền động và khung gầm</div>
    <div  class="font" style="font-size:25px; padding:150px 0px 10px 40px">BMW 5 Series sử dụng động cơ 4 xilanh TwinPower Turbo cho khả năng vận hành mượt mà trên nhiều địa hình. Với các công nghệ vận hành và hệ thống khung gầm được tinh chỉnh hoàn hảo tạo nên cảm giác lái phấn khích tuyệt đối cho 5 Series.</div>
    <div style="justify-content:space-around">
        <div class="thietke" style="display: flex;">
            <div>
                <img src="../image/bmw_5_series_sedan_mc_driving_01.webp" style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Hệ thống treo thích ứng.</div>
                <div style="width:460px;">Hệ thống treo thích ứng giúp giảm thiểu những chuyển động không mong muốn của xe nhờ bộ giảm chấn tự động thích ứng với mọi điều kiện đường xá. Ngoài chế độ lái COMFORT tiêu chuẩn giúp tăng độ thoải mái khi ngồi trên xe, chế độ SPORT giúp người lái có trải nghiệm lái thể thao nhưng không đánh đổi độ thoải mái và êm ái.</div>
            </div>
            <div>
                <img src="../image/bmw5_a7_05431_min.webp"style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Động cơ mạnh mẽ và linh hoạt</div>
                <div style="width:460px;">Động cơ của BMW 5 Series cung cấp sức mạnh đáng kinh ngạc cùng độ linh hoạt vượt trội, tạo nên trải nghiệm lái xe cuốn hút và hấp dẫn. Với công nghệ tiên tiến và hiệu suất tối ưu, động cơ xăng trên 5 Series không chỉ mang lại sức mạnh mạnh mẽ mà còn tiết kiệm nhiên liệu. Sự linh hoạt và khả năng phản ứng nhanh chóng của động cơ giúp việc lái xe trở nên thú vị và đầy hứng khởi trên mọi hành trình.</div>
            </div>
            <div>
                <img src="../image/bmw_5_series_sedan_mc_driving_03.webp"style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Cụm đèn hậu LED dạng chữ L với đồ hoạ 3D (*)</div>
                <div style="width:460px;">Cụm đèn sau thiết kế dạng chữ L đặc trưng của BMW với đồ hoạ dạng khối 3D tạo ấn tượng cao cấp và độc đáo.</div>
            </div>
        </div>
    </div>
    <div class="font" style="font-size:40px;background-color:white; color:#444444; padding:150px 0px 10px 40px">NHỮNG ĐIỂM NỔI BẬT VỀ THIẾT KẾ Ở NGOẠI THẤT VÀ NỘI THẤT.</div>
    <div style="justify-content:space-around">
        <div class="thietke" style="display: flex;">
            <div style="padding:0px 0px 20px 40px">
                <div>
                    <img src="../image/bmw_5_series_sedan_gallery_image_design_01_890.webp" style="width:600px; height:auto">
                    <div style="width:700px;padding: 5px 0px 10px 70px; font-size:18px">Thiết kế đầu xe với lưới tảng nhiệt hình quả thận đặc trưng của BMW.(*)</div>
                </div>
                <div>
                    <img src="../image/bmw_5_series_sedan_gallery_image_design_02_890.webp"style="width:600px; height:auto">
                    <div style="width:700px; font-size:18px">Cụm đèn trước BMW Laser phạm vi chiếu sáng lên đến hơn 650m.(*)</div>
                </div>
                </div>
                <div style="padding:0px 80px 20px 0px">
                <div>
                    <img src="../image/bmw_5_series_sedan_gallery_image_design_03_890.webp" style="width:600px; height:auto">
                    <div style="width:700px;padding: 5px 0px 10px 80px; font-size:18px">Cản sau với ống xả kép tinh tế.(*)</div>
                </div>
                <div>
                    <img src="../image/bmw_5_series_sedan_sp_technical_mediumteaser.webp" style="width:600px; height:auto">
                    <div style="width:700px;padding: 5px 0px 10px 120px; font-size:18px">Cụm đèn LED dạng chữ L nổi khối 3D độc đáo.(*)</div>
                </div>
            </div>
    </div>
    </div>
    <div class="font" style="font-size:40px; padding:50px 0px 10px 40px">THÔNG SỐ KỸ THUẬT BMW 5 SERIES.</div>
    <div class="mota" style="padding:0px 0px 30px 40px; font-size: 25px">BMW 520i.</div>
    <div class="thietke" style="width:auto; height:450px; background-color: white;">
        <div style="float:left;">
            <img src="../image/copy_of_bmw5_a7_08879.webp" style="width:100%; height:auto;">
        </div>
        <div class="GDBang" style="float:left; background-color: white; width:739px">
            <div class="ptubang">
                <div class="nhanchu">Công suất động cơ kW (hp) tại vòng/ phút</div>
                <div class="gt">135 (184)/5,000-6,500</div>
            </div>
            <div class="ptubang">
                <div class="nhanchu">Thời gian tăng tốc từ 0-100km/h (s):</div>
                <div class="gt">7.9</div>
            </div>
            <div class="ptubang">
                <div class="nhanchu">Lượng nhiên liệu tiêu thụ kết hợp (l/100km)</div>
                <div class="gt">6.8</div>
            </div>
            <div class="ptubang">
                <div class="nhanchu">Lượng khí thải CO2 kết hợp (g/km)</div>
                <div class="gt">156</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
