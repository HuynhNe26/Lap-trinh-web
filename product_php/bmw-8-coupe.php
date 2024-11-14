<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW 8</title>
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
<div style="background-color:white">
    <div style="background-color:white">
        <div class="image-container">
            <img src="../image/BMW-8/bmw_8_series_gran_coupe.webp" alt="BMW 7">
            <div class="GTspi7">
                <div style="font-size:45px; padding-bottom:10px;">THE 8</div>
                <div style="font-size:25px; padding-bottom:40px;">BMW 8 SERIES GRAN COUPÉ</div>
                <div>
                    <a style="font-weight:bold; font-size:15px; " href="#" class="button">TƯ VẤN CHI TIẾT</a>
                </div>
                <div>
                    <div style="float:left; padding-top:75%; font-size:22px;">Giá từ
                        <div style="font-size:15px"> 4.499.000.000 VNĐ </div>
                    </div>
                    <div style="float:left; padding-top:75%; padding-left: 50px; font-size:22px;">Nhiên liệu
                        <div style="font-size:15px"> Xăng </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu" style="color:#999999">
        <div> <a href="#tkkg8">Thiết kế</a> </div>
    </div>
    <div class="mota">
        <div>BMW 8 Series Gran Coupé là sự kết hợp hoàn hảo giữa tính năng động và sang trọng tạo ra đẳng cấp riêng cho chủ nhân:</div>
        <ul style="list-style-type: disc; padding-left: 20px;">
            <li>Vẻ đẹp hiện đại và phong cách thiết kế Gran Coupé đặc biệt với 5 cửa độc đáo.</li>
            <li>Mang lại cảm giác lái thể thao và khả năng xử lý chính xác vượt trội trên mọi cung đường.</li>
            <li>Nội thất sang trọng, độc đáo và không gian rộng rãi mang lại trải nghiệm tuyệt vời.</li>
        </ul>
    </div>
    <div style="display: flex;">
        <div class=mota>
            <img src="../image/BMW-8/bmw_8_1.webp" style="width:auto; height:auto; padding:30px 0px 20px 0px;">
        </div>
        <div class=mota class="font" style="font-size:25px; padding:50px 0px 0px 20px">GÓI TRANG BỊ TIÊU CHUẨN M SPORT
            <div style="font-size:16.5px; padding: 0px 60px 10px 0px">Phiên BMW 840i của BMW 8 Series Gran Coupé mới đi kèm gói M Sport tiêu chuẩn. Tăng cường tính thể thao với các đặc điểm nổi bật như:</div>
            <ul style="list-style-type: disc; padding: 0px 80px 10px 20px;font-size:16.5px">
                <li>Thêm gói trang bị M Aerodynamics package.</li>
                <li>Mâm xe hợp kim nhẹ M 20 inch & phanh M Sport.</li>
                <li>Màu sơn độc quyền & điểm nhấn thiết kế đặc trưng của M Sport.</li>
                <li>Bậc cửa M, bệ để chân cho người lái M và bàn đạp đặc trưng M.</li>
                <li>Vô lăng bọc da M đa chức năng.</li>
                <li>Ghế lái thể thao bọc da 'Merino' cho ghế lái và ghế lái phụ.</li>
           </ul>
        </div>
    </div>
    <div id="tkkg8" class="font" style="font-size:38px; padding:40px 0px 10px 40px">KHÁM PHÁ NGOẠI THẤT ĐỘC ĐÁO CỦA BMW 8 SERIES GRAN COUPÉ TRONG VIDEO DƯỚI ĐÂY.</div>
    <img src="../image/BMW-8/hqdefault.jpg" style="width:1440px; height:1080px; padding:40px 0px 20px 40px;">
    <div class="font" style="font-size:40px; padding:150px 0px 10px 40px">ĐIỂM NỔI BẬT TỪ NGOẠI THẤT CỦA BMW 8 SERIES GRAN COUPÉ.</div>
    <div class="font" style="font-size:16px; padding:10px 0px 15px 40px;">Sự nổi bật trong thiết kế của BMW 8 Series Gran Coupé là một tuyên ngôn về phong cách thể thao và sự tự tin không thể nhầm lẫn.</div>
    <div style="justify-content:space-around">
        <div class="thietke" style="display: flex;">
            <div>
                <img src="../image/BMW-8/bmw_8_2.webp" style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Mâm hợp kim BMW Individual.</div>
                <div style="width:460px;">Mâm hợp kim BMW Individual kích thước 20 inch, kiểu 730 I, kết hợp với lốp Runflat, mang đến vẻ ngoài đẳng cấp và phong cách cho BMW 8 Series Gran Coupé. Thiết kế tinh xảo và chất liệu cao cấp của mâm hợp kim không chỉ nâng cao tính thẩm mỹ mà còn cải thiện hiệu suất lái. Lốp Runflat giúp xe có thể tiếp tục di chuyển một khoảng cách nhất định ngay cả khi bị thủng, đảm bảo an toàn và tiện lợi trên mọi hành trình.</div>
            </div>
            <div>
                <img src="../image//BMW-8/bmw_8_3.webp"style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Cụm đèn trước công nghệ BMW Laserlight.</div>
                <div style="width:460px;">Cụm đèn trước với công nghệ BMW Laserlight của BMW 8 Series Gran Coupé mang đến khả năng chiếu sáng vượt trội và hiệu quả. Hệ thống đèn tự động điều chỉnh chế độ chiếu gần – xa giúp tối ưu hóa tầm nhìn và an toàn khi lái xe vào ban đêm. Công nghệ tiên tiến này không chỉ tăng cường độ sáng mà còn giảm thiểu chói mắt cho xe đối diện, đảm bảo trải nghiệm lái xe tối ưu và hiện đại.</div>
            </div>
            <div>
                <img src="../image/BMW-8/bmw_8_4.webp"style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Cụm đèn trước M Shadowline.</div>
                <div style="width:460px;">Cụm đèn trước M Shadowline của BMW 8 Series Gran Coupé mang đến vẻ ngoài thể thao đầy uy lực. Thiết kế màu đen bóng độc đáo kết hợp với công nghệ chiếu sáng tiên tiến, không chỉ tăng cường tính thẩm mỹ mà còn cải thiện khả năng chiếu sáng và an toàn. Đây là sự kết hợp hoàn hảo giữa phong cách và công nghệ, thể hiện rõ nét đặc trưng của dòng xe M Sport thể thao.</div>
            </div>
        </div>
    </div>
    <div class="font" style="font-size:38px; padding:40px 0px 10px 40px">KHÁM PHÁ TOÀN CẢNH NỘI THẤT RỘNG RÃI VÀ THOẢI MÁI CỦA BMW 8 SERIES GRAN COUPÉ</div>
    <img src="../image/BMW-8/hqdefault (2).jpg" style="width:1440px; height:1080px; padding:40px 0px 20px 40px;">
    <div class="font" style="font-size:40px;background-color:white; color:#444444; padding:150px 0px 10px 40px">ĐIỂM NỔI BẬT CỦA NỘI THẤT BMW 8 SERIES GRAN COUPÉ.</div>
    <div class="font" style="font-size:16px; padding:10px 0px 15px 40px;">Nhờ vào hàng loạt trang bị cao cấp và các tính năng độc quyền, nội thất của BMW 8 Series Gran Coupé mới gây ấn tượng với sự thanh lịch và phong cách thể thao sang trọng:</div>
    <div style="justify-content:space-around">
        <div class="thietke" style="display: flex;">
            <div>
                <img src="../image/BMW-8/bmw_8_5.webp" style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Ghế thể thao đa năng cho ghế lái và ghế hành khách phía trước.</div>
                <div style="width:705px">Ghế đa năng cho ghế người lái và ghế hành khách phía trước chỉnh điện và mang lại cho chủ nhân cảm giác thoải mái và dễ chịu nhất trong suốt hành trình.</div>
            </div>
            <div>
                <img src="../image/BMW-8/bmw_8_6.webp"style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Hệ thống âm thanh vòm Harman Kardon</div>
                <div style="width:705px">Hệ thống âm thanh vòm harman kardon 16 loa; công suất 460 Watt; âm - li 9 kênh.</div>
            </div>
        </div>
        <div class="thietke" style="width:100%; height:100%;padding-left:400px">
                <img src="../image/BMW-8/bmw_8_7.webp" style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Chi tiết nội thất điểm pha lê 'CraftedClarity'.</div>
                <div style="width:705px">Các chi tiết nội thất điểm pha lê 'CraftedClarity' bao gồm các chi tiết pha lê được làm thủ công, tăng cường về mặt thẩm mỹ và tính sang trọng trong nội thất như hộp số, bảng điều khiển và nút Start/Stop.</div>
        </div>
    </div>
    <div class="font" style="font-size:38px; padding:40px 0px 10px 40px">TRẢI NGHIỆM CẢM GIÁC CẦM LÁI ĐẦY PHẤN KHÍCH TỪ MẪU XE THỂ THAO BMW 8 SERIES GRAN COUPÉ TRONG VIDEO SAU:</div>
    <img src="../image/BMW-8/hqdefault (3).jpg" style="width:1440px; height:1080px; padding:40px 0px 20px 40px;">
    <div class="font" style="font-size:40px; padding:150px 0px 10px 40px">ĐỘNG CƠ VÀ KHUNG GẦM CỦA BMW 8 SERIES GRAN COUPÉ.</div>
    <div class="font" style="font-size:16px; padding:10px 0px 15px 40px;">BMW 8 Series Gran Coupé mang lại tốc độ phấn khích trên mọi cung đường nhờ vào công nghệ động cơ và khung gầm được tinh chỉnh hoàn hảo đảm bảo cho trải nghiệm lái của chủ nhân.</div>
    <div style="justify-content:space-around">
        <div class="thietke" style="display: flex;">
            <div>
                <img src="../image/BMW-8/bmw_8_8.webp" style="width:auto; height:auto">
                <div style="width:460px;">Vi sai thể thao M của BMW 8 Series Gran Coupé giúp cải thiện lực kéo và độ bám đường, giúp bạn quản lý tốt hơn các khúc cua gấp, chuyển làn nhanh chóng và tăng tốc mạnh mẽ. Với vi sai thể thao M, mỗi chuyến đi đều trở nên mượt mà và đầy phấn khích, đây chính là một chi tiết đặc trưng của dòng xe hiệu suất cao từ BMW.</div>
            </div>
            <div>
                <img src="../image//BMW-8/bmw_8_9.webp"style="width:auto; height:auto">
                <div style="width:460px;">Hệ thống treo thích ứng - Adaptive M suspension cho phép điều chỉnh hệ thống treo phù hợp với mọi tình huống lái xe, đảm bảo trải nghiệm lái phấn khích nhưng không đánh đổi sự thoải mái.</div>
            </div>
            <div>
                <img src="../image/BMW-8/bmw_8_10.webp"style="width:auto; height:auto">
                <div style="width:460px;">BMW 8 Series Gran Coupé được trang bị động cơ với công nghệ tiên tiến được BMW phát triển - BMW TwinPower Turbo 6 xy-lanh giúp cho chiếc xe hoạt động mạnh mẽ và hiệu quả hơn, tiết kiệm nhiên liệu và giảm khí thải ra môi trường.</div>
            </div>
        </div>
    </div>
    <div class="font" style="font-size:40px; padding:150px 0px 10px 40px">CÔNG NGHỆ TIÊN TIẾN ĐẾN TỪ BMW 8 SERIES GRAN COUPÉ.</div>
    <div class="font" style="font-size:16px; padding:10px 0px 15px 40px;">BMW 8 Series Gran Coupé được trang bị các công nghệ đổi mới, các dịch vụ kỹ thuật số thông minh và các tính năng độc quyền của dòng xe hạng sang BMW.</div>
    <div style="justify-content:space-around">
        <div class="thietke" style="display: flex;">
            <div>
                <img src="../image/BMW-8/bmw_8_11.webp" style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Trợ lý cá nhân thông minh.</div>
                <div style="width:460px;">
                    <ul style="list-style-type: disc;">
                        <li>Trợ lý cá nhân thông minh luôn sẵn sàng hỗ trợ trên xe.</li>
                        <li>Giao tiếp với chiếc xe của bạn một cách dễ dàng.</li>
                        <li>Điều khiển các chức năng của xe bằng giọng nói.</li>
                        <li>Dễ dàng tra cứu thông tin của xe.</li>
                    </ul>
                </div>
            </div>
            <div style="padding-left:30px">
                <img src="../image//BMW-8/bmw_8_12.webp"style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px; width:460px">Hệ thống thông tin giải trí BMW Live Cockpit Professional</div>
                <div style="width:460px;">BMW Live Cockpit Professional nổi bật với màn hình bao gồm hai màn hình, màn hình đa thông tin 12,3 inch và màn hình điều khiển trung tâm 12,3 inch. Ngoài ra, BMW 8 Series còn được trang bị hệ điều hành BMW OS 7 tiên tiến, hỗ trợ hiển thị thông qua màn hình hiển thị kính lái HUD.</div>
            </div>
            <div>
                <img src="../image/BMW-8/bmw_8_13.webp"style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Hệ thống Comfort access</div>
                <div style="width:460px;">Với hệ thống Comfort Access, BMW 8 Series mang lại sự tiện lợi tối đa cho người sử dụng. Chỉ cần tiến lại gần hoặc rời xa, xe sẽ tự động khóa hoặc mở khóa, giúp việc ra vào trở nên dễ dàng hơn bao giờ hết. Ngoài ra, chức năng đóng/mở cốp rảnh tay cho phép bạn dễ dàng quản lý hành lý mà không cần chạm tay, nâng cao trải nghiệm tiện nghi và hiện đại.</div>
            </div>
        </div>
    </div>
    <div class="font" style="font-size:40px; padding:150px 0px 10px 40px">PHỤ KIỆN CHÍNH HÃNG BMW.</div>
    <div class="font" style="font-size:16px; padding:10px 0px 15px 40px;">Đem đến cho chiếc BMW 8 Series Gran Coupé của bạn cá tính thể thao riêng biệt với trang bị BMW M Performance Parts- hoặc chọn các Phụ kiện BMW Chính hãng (Original BMW Accessories) để tinh chỉnh xe phù hợp với nhu cầu cá nhân của bạn</div>
    <div style="justify-content:space-around">
        <div class="thietke" style="display: flex;">
            <div>
                <img src="../image/BMW-8/bmw_8_14.webp" style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Gạt nước BMW WaterBlade.</div>
                <div style="width:460px;">BMW WaterBlade với công nghệ gạt nước đổi mới - mang lại hiệu suất làm sạch đáng kể hơn.</div>
            </div>
            <div style="padding-left:30px">
                <img src="../image//BMW-8/bmw_8_15.webp"style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px; width:460px">Bao chìa khoá BMW cho Display Key.</div>
                <div style="width:460px;">Hộp chìa khóa BMW với da 'Nappa' đen cao cấp có kích thước hoàn hảo, đảm bảo bảo vệ chìa khóa BMW khỏi bụi bẩn và trầy xước.</div>
            </div>
            <div>
                <img src="../image/BMW-8/bmw_8_16.webp"style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Bạt chùm BMW Car Cover.</div>
                <div style="width:460px;">Bạt đi theo xe BMW chính hãng bảo vệ xe của bạn một cách tuyệt đối khỏi ánh nắng mặt trời, nước, bụi bẩn và trầy xước. An tâm khi để xe ở mọi điều kiện thời tiết.</div>
            </div>
        </div>
    </div>
    <div class="font" style="font-size:40px; padding:50px 0px 10px 40px">THÔNG SỐ KỸ THUẬT CỦA BMW 8 SERIES GRAN COUPÉ.</div>
    <div class="mota" style="padding:0px 0px 30px 40px; font-size: 25px">BMW 840i và các thông tin động cơ từ BMW 8 Series Gran Coupé.</div>
    <div class="thietke" style="width:auto; height:450px; background-color: white;">
        <div style="float:left;">
            <img src="../image/BMW-8/bmw_8_17.webp" style="width:100%; height:auto;">
        </div>
        <div class="GDBang" style="float:left; background-color: white; width:739px">
            <div class="ptubang">
                <div class="nhanchu">Công suất động cơ kW (hp) tại vòng/phút:</div>
                <div class="gt">250 (340) @ 5000-6500</div>
            </div>
            <div class="ptubang">
                <div class="nhanchu">Mô-men xoắn cực đại (Nm) tại vòng/phút</div>
                <div class="gt">500 @ 1600-4500</div>
            </div>
            <div class="ptubang">
                <div class="nhanchu">Thời gian tăng tốc từ 0-100km/h (s):</div>
                <div class="gt">5.4</div>
            </div>
            <div class="ptubang">
                <div class="nhanchu">Lượng khí thải CO2 kết hợp (g/km):</div>
                <div class="gt">11.50</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
