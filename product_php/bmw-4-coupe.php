<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW 4 SERIES GRAN COUPÉ</title>
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
        <img src="../image/bmw_4_series_gran_coupe_2.webp" alt="BMW i7">
        <div class="GTspi7">
            <div style="font-size:45px; padding-bottom:10px;">THE 4</div>
            <div style="font-size:25px; padding-bottom:40px;">BMW 4 SERIES GRAN COUPÉ</div>
            <div>
                <a style="font-weight:bold; font-size:15px; " href="#" class="button">TƯ VẤN CHI TIẾT</a>
            </div>
            <div>
                <div style="float:left; padding-top:55%; font-size:22px;">Giá từ
                    <div style="font-size:15px"> 2.629.000.000 VNĐ </div>
                </div>
                <div style="float:left; padding-top:55%; padding-left: 50px; font-size:22px;">Nhiên liệu
                    <div style="font-size:15px"> Xăng </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu" style="color:#999999">
        <div> <a href="#tkkg">Thiết kế</a> </div>
        <div> <a href="#cnbv">Thông số kĩ thuật</a> </div>
        <div> <a href="">Dịch vụ & Phụ tùng</a></div>
    </div>
    <div class="mota">
        <div>Thiết kế ấn tượng, khả năng vận hành xuất sắc và không gian rộng rãi cho nhu cầu hàng ngày, BMW 4 Series Gran Coupé mới gây ấn tượng ở mọi góc độ. Với cảm giác lái phấn khích cùng thiết kế độc đáo, chiếc Gran Coupé cá tính này là người bạn đồng hành lý tưởng dành cho bạn trong mọi hành trình.</div>
    </div>
    <div id="tkkg" class="font" style="font-size:40px; padding:150px 0px 10px 40px">KHẢ NĂNG XỬ LÝ TỐI ƯU CỦA CHIẾC BMW 4 SERIES GRAN COUPÉ</div>
    <div style="justify-content:space-around">
        <div class="thietke" style="display: flex;">
            <div>
                <img src="../image/bmw_4_series_gran_coupe_onepager_vc_dynamics_thumbnail.webp" style="width:auto; height:auto">
                <div style="width:1600px;">Trục trước của BMW 4 Series Gran Coupé mới rộng hơn 25 mm so với phiên bản tiền nhiệm, mang lại khả năng lái tối ưu và thể thao hơn. Kết hợp với động cơ BMW TwinPower Turbo thế hệ mới nhất và hệ thống treo được tinh chỉnh hoàn hảo với những điểm nổi bật như vi sai thể thao M, tạo nên trải nghiệm lái đầy năng động và ổn định cho xe.​​</div>

            </div>
        </div>
    </div>
    <div class="font" style="font-size:40px;background-color:white; color:#444444; padding:150px 0px 10px 40px">BMW 4 SERIES GRAN COUPÉ VỚI CẢM GIÁC LÁI NĂNG ĐỘNG ĐẶC TRƯNG.</div>
    <div style="justify-content:space-around">
        <div class="thietke" style="display: flex;">
            <div>
                <img src="../image/bmw_4_series_gran_coupe_2.webp" style="width:auto; height:auto">
                <div style="width:465px">Hệ thống treo thích ứng M với giảm chấn điều khiển điện tử có khả năng tùy chỉnh độ cứng/mềm theo ý người lái, đảm bảo trải nghiệm lái thể thao nhưng không đánh đổi độ thoải mái và êm ái.</div>
            </div>
            <div>
                <img src="../image/bmw_4_series_gran_coupe_3.webp"style="width:auto; height:auto">
                <div style="width:465px">Hệ thống lái biến thiên thể thao Servotronic thích nghi theo tốc độ của xe tạo nên trải nghiệm lái phấn khích trứ danh của BMW. Nhờ đó việc điều khiển xe trở nên thú vị và dễ dàng hơn, nhất là khi đỗ xe và quay đầu xe.</div>
            </div>
            <div>
                <img src="../image/bmw_4_series_gran_coupe_4.webp"style="width:auto; height:auto">
                <div style="width:465px">Tùy chọn vi sai thể thao M Sport tối ưu hóa lực kéo cùng sự ổn định khi lái giúp chuyển làn và tăng tốc ra khỏi các khúc cua một cách dễ dàng cũng như hỗ trợ khi vào cua nhanh trong điều kiện đường thay đổi. Hệ thống này giúp đảm bảo trải nghiệm lái xe mạnh mẽ và an toàn đặc trưng của BMW.</div>
            </div>
        </div>
    </div>
    <div class="font" style="font-size:40px;background-color:white; color:#444444; padding:150px 0px 10px 40px">BMW 4 SERIES GRAN COUPÉ ĐEM LẠI SỰ THOẢI MÁI VỚI CÁC TÍNH NĂNG THÔNG MINH.</div>
    <div style="justify-content:space-around">
        <div class="font" style="font-size:25px; padding:10px 0px 15px 40px;">Công nghệ kỹ thuật số và hệ thống hỗ trợ người lái của chiếc BMW 4 Series Gran Coupé sẽ cung cấp cho bạn nhiều chức năng hữu ích để bạn có thể vận hành tiện lợi và dễ dàng.</div>
        <div class="thietke" style="display: flex;padding-left: 200px;">
                <div style="text-align: center;pad">
                    <img src="../image/bmw_4_series_gran_coupe_5.webp" style="width:600px; height:auto">
                    <div style="width:700px;padding: 5px 0px 0px 120px; font-size:24px">Trợ lý ảo thông minh.</div>
                    <div style="width:700px;padding: 5px 0px 10px 120px; font-size:18px">Đèn viền lưới tản nhiệt BMW 'Iconic Glow'.</div>
                </div>
            </div>
    </div>
    </div>
    <div class="font" style="font-size:40px; padding:50px 0px 10px 40px">THÔNG SỐ KỸ THUẬT CỦA THE BMW i7.</div>
    <div class="mota" style="padding:0px 0px 30px 40px; font-size: 25px">BMW i7 xDrive60.</div>
    <div class="thietke" style="width:auto; height:450px; background-color: white;">
        <div style="float:left;">
            <img src="../image/copy_of_di21_000019482.webp" style="width:100%; height:auto;">
        </div>
        <div class="GDBang" style="float:left; background-color: white; width:739px">
            <div class="ptubang">
                <div class="nhanchu">Công suất động cơ kW (hp) tại vòng/ phút:</div>
                <div class="gt">190 (258) tại 5000-6500</div>
            </div>
            <div class="ptubang">
                <div class="nhanchu">Thời gian tăng tốc từ 0-100km/h (s):</div>
                <div class="gt">6.1</div>
            </div>
            <div class="ptubang">
                <div class="nhanchu">Lượng nhiên liệu tiêu thụ kết hợp (l/100km)</div>
                <div class="gt">6.6</div>
            </div>
            <div class="ptubang">
                <div class="nhanchu">Lượng khí thải CO2 kết hợp (g/km)</div>
                <div class="gt">151</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
