<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW i7</title>
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
        <img src="../image/BMW-I7/bmw_7_series_i7__GDC.webp" alt="BMW i7">
        <div class="GTspi7">
            <div style="font-size:45px; padding-bottom:10px;">THE NEW i7</div>
            <div style="font-size:25px; padding-bottom:40px;">THE FIRST EVER FULLY ELECTRIC BMW i7</div>
            <div>
                <a style="font-weight:bold; font-size:15px; " href="#" class="button">TƯ VẤN CHI TIẾT</a>
            </div>
            <div>
                <div style="float:left; padding-top:55%; font-size:22px;">Giá từ
                    <div style="font-size:15px"> 6.799.000.000 VNĐ </div>
                </div>
                <div style="float:left; padding-top:55%; padding-left: 50px; font-size:22px;">Nhiên liệu
                    <div style="font-size:15px"> Thuần điện </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu" style="color:#999999">
        <div> <a href="#tkkg">Thiết kế</a> </div>
        <div> <a href="#cnbv">Charging</a> </div>
        <div> <a href="">Thông số kĩ thuật</a></div>
    </div>
    <div class="mota">
        <div>BMW i7 là dòng xe thuần điện sang trọng kết hợp giữa hiệu suất vượt trội của động cơ điện BMW và các công nghệ giải trí đa giác quan để tạo nên trải nghiệm lái xe của tương lai.</div>
        <ul style="list-style-type: disc; padding-left: 20px;">
            <li>Tính năng chào mừng “Great Entrance Moments”.</li>
            <li>Không gian nội thất sang trọng với chế độ My Modes cá nhân hoá.</li>
            <li>400 kW* và hơn 600 km* Quãng đường di chuyển trên 1 lần sạc.</li>
        </ul>
        <div style="padding-top:5px">
            <span>BMW i7 xDrive60:</span><br>
            <span>Mức tiêu thụ điện tính bằng kWh/100 km (kết hợp, WLTP): 19,7 - 18,9</span><br>
            <span>Quảng đường di chuyển trên 1 lần sạc (WLTP): 591 - 625 km</span>
        </div>
    </div>
    <div id="tkkg" class="font" style="font-size:40px; padding:150px 0px 10px 40px">KHÔNG GIAN NGOẠI THẤT ĐẦY ĐỦ TRÊN BMW i7.</div>
    <div style="justify-content:space-around">
        <div class="thietke" style="display: flex;">
            <div>
                <img src="../image/BMW-I7/bmw_7_series_i7_kg1.webp" style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Thiết kế phần đầu xe.</div>
                <div style="width:460px;">Phong cách thiết kế tinh tế, cải tiến mới cho phần đầu xe dựa trên các chi tiết truyền thống như lưới tản nhiệt hình 'quả thận' đặc trưng với viền phát sáng "Iconic Glow" là điểm nhấn nổi bật mới kết hợp cùng dải đèn định vị được chế tác bằng pha lê Swarovski cao cấp.</div>
            </div>
            <div>
                <img src="../image/BMW-I7/bmw_7_series_i7_kg2.webp"style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Thiết kế phần thân xe.</div>
                <div style="width:460px;">BMW i7 mới với thiết kế chiều dài phần thân lớn. Chi tiết mạ crôm làm nổi bật đường gấp khúc Hofmeister một cách vô cùng tinh xảo.</div>
            </div>
            <div>
                <img src="../image/BMW-I7/bmw_7_series_i7_kg3.webp"style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Thiết kế phần đuôi xe.</div>
                <div style="width:460px;">Đèn hậu hình chữ L và dải crôm mỏng bao quanh nhấn mạnh hiệu ứng bề rộng cho phần đuôi xe. Các chi tiết thiết kế màu xanh i Blue làm nổi bật cho phong cách hiện đại của BMW i7.</div>
            </div>
        </div>
    </div>
    <div class="font" style="font-size:40px;background-color:white; color:#444444; padding:150px 0px 10px 40px">KHÔNG GIAN NỘI THẤT HOÀN MỸ TRÊN BMW i7.</div>
    <div style="justify-content:space-around">
        <div class="thietke" style="display: flex;">
            <div>
                <img src="../image/BMW-I7/bmw_7_series_i7_nt1.webp" style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Không gian nội thất ấn tượng.</div>
                <div style="width:705px">Nội thất của BMW i7 được trang bị thanh điều khiển đa chức năng BMW Interaction Bar, kéo dài ngang qua toàn bộ buồng lái. Thiết kế này không chỉ tăng tính thẩm mỹ mà còn mang lại sự tiện lợi tối đa cho người lái. Hoàn thiện trải nghiệm đa phương tiện là cụm màn hình cong gồm màn hình đa thông tin 12.3" và màn hình giải trí trung tâm 14.9" BMW Curved Display, tạo nên sự kết hợp hoàn hảo giữa công nghệ tiên tiến và thiết kế sang trọng.</div>
            </div>
            <div>
                <img src="../image/BMW-I7/bmw_7_series_i7_nt2.webp"style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Cửa số trời toàn cảnh Panorama Sky Lounge.</div>
                <div style="width:705px">Cửa sổ trời Panorama glass roof Sky Lounge cho phép ánh sáng tự nhiên tỏa vào nội thất vào ban ngày. Vào ban đêm, Sky Lounge tạo ra một không gian ấn tượng với hiệu ứng ánh sáng độc đáo.</div>
            </div>
        </div>
    </div>
    <div class="font" style="font-size:40px;background-color:white; color:#444444; padding:150px 0px 10px 40px">THE NEW BMW i7 MỚI - ẤN TƯỢNG.</div>
    <div style="justify-content:space-around">
        <div class="font" style="font-size:25px; padding:10px 0px 15px 40px;">Thiết kế xu hướng tương lai của the new BMW i7.</div>
        <div class="thietke" style="display: flex;">
            <div style="padding:0px 0px 20px 40px">
                <div>
                    <img src="../image/BMW-I7/bmw_7_series_i7_js1.webp" style="width:600px; height:auto">
                    <div style="width:700px;padding: 5px 0px 10px 70px; font-size:18px">Hệ thống đèn chào mừng Welcome Light Carpet.</div>
                </div>
                <div>
                    <img src="../image/BMW-I7/bmw_7_series_i7_js2.webp"style="width:600px; height:auto">
                    <div style="width:700px; font-size:18px">Màn hình cong và thanh điều khiển BMW Interaction Bar với thiết kế đa diện.</div>
                </div>
                </div>
                <div style="padding:0px 80px 20px 0px">
                <div>
                    <img src="../image/BMW-I7/bmw_7_series_i7_js3.webp" style="width:600px; height:auto">
                    <div style="width:700px;padding: 5px 0px 10px 80px; font-size:18px">Cửa sổ kính trời toàn cảnh Panorama Sky Lounge.</div>
                </div>
                <div>
                    <img src="../image/BMW-I7/bmw_7_series_i7_js4.webp" style="width:600px; height:auto">
                    <div style="width:700px;padding: 5px 0px 10px 120px; font-size:18px">Đèn viền lưới tản nhiệt BMW 'Iconic Glow'.</div>
                </div>
            </div>
    </div>
    </div>
    <div class=mota style="display: flex;">
        <div id=cnbv class="font" style="font-size:40px; padding:80px 0px 10px 0px">CÔNG NGHỆ BẢO VỆ MÔI TRƯỜNG TỪ BMW i7.
            <ul style="list-style-type: disc; padding-left: 20px;font-size:16.5px">
                <li>Tích hợp hệ thống động cơ điện hiệu suất cao, giúp giảm lượng khí thải carbon dioxide. </li>
                <li>Sử dụng vật liệu tái chế và công nghệ tiên tiến để tối ưu hóa hiệu suất vận hành..</li>
                <li>Vật liệu tái chế như sợi nhựa Econyl được sử dụng trong lớp ván sàn của BMW i7 giúp bảo vệ các nguồn nguyên liệu quý hiếm..</li>
           </ul>
        </div>
        <div>
            <img src="../image/BMW-I7/bmw_7_cn.webp" style="width:auto; height:auto; padding:30px 30px 20px 40px;">
        </div>
    </div>
    <div style="display: flex;">
        <div class=mota>
            <img src="../image/BMW-I7/bmw_7_series_i7_vhdien.webp" style="width:auto; height:auto; padding:30px 30px 20px 0px;">
        </div>
        <div class=mota class="font" style="font-size:25px; padding:80px 0px 10px 20px">VẬN HÀNH HOÀN TOÀN BẰNG ĐIỆN.
            <div style="font-size:16.5px; padding: 0px 60px 10px 0px">Công nghệ động cơ: Công nghệ BMW eDrive thế hệ thứ năm: động cơ điện đồng bộ, truyền động điện, hệ thống tái tạo năng lượng.</div>
            <ul style="list-style-type: disc; padding: 0px 80px 10px 20px;font-size:16.5px">
                <li>Truyền động: Dẫn động bốn bánh bằng điện, truyền mô-men xoắn do một mô-tơ điện truyền tới bánh trước và một tới bánh sau, có sự kết hợp.</li>
                <li>Công suất cực đại: 400 kW / 544 mã lực.</li>
                <li>Mô-men xoắn cực đại: 745 Nm.</li>
                <li>Hộp số: 1 cấp.</li>
                <li>Tăng tốc (0 - 100 km/h): 4.7 giây.</li>
                <li>Tốc độ tối đa (Giới hạn điện tử): 240 km/h.</li>
           </ul>
        </div>
    </div>
    <div class="font" style="font-size:40px; padding:10px 0px 10px 70px">QUÃNG ĐƯỜNG HOẠT ĐỘNG VÀ THỜI GIAN SẠC CỦA BMW i7.</div>
    <div style="display: flex;">
        <div class=mota>
            <img src="../image/BMW-I7/bmw_7_series_i7_qd.webp" style="width:auto; height:auto; padding:0px 30px 20px 0px;">
        </div>
        <div class=mota class="font" style="font-size:25px; padding:40px 0px 10px 20px">QUẢNG ĐƯỜNG HOẠT ĐỘNG CHO 1 LẦN SẠC HƠN 600KM
            <div style="font-size:16.5px">Khám phá động lực lái hiệu quả của BMW i7:</div>
            <ul style="list-style-type: disc; padding: 0px 60px 10px 20px;font-size:16.5px">
                <li>625 km là phạm vi di chuyển tối đa sau 1 lần sạc</li>
                <li>Mức tiêu thụ điện thấp chỉ 19,7-18,9 kWh/100 km thông qua các công nghệ như tái tạo năng lượng trong quá trình phanh</li>
                <li>Hiệu quả tối đa với phương pháp xây dựng trọng lượng nhẹ và thiết kế khí động học.</li>
           </ul>
        </div>
    </div>
    <div style="background-color:white">
        <div class="font" style="font-size:40px; padding:10px 0px 0px 40px">QUÁ TRÌNH SẠC CHO BMW i7: DỄ DÀNG - MỌI LÚC - MỌI NƠI</div>
        <div class="mota" style="padding:0px 0px 50px 40px">Sạc nhanh, dễ dàng và đơn giản cho mẫu xe BMW i7:
        <ul style="list-style-type: disc; padding: 20px 0px 0px 20px;font-size:16.5px; color:#444444">
            <li>Sạc từ 10% lên 80% với công suất 195 kW* chỉ trong 34 phút* tại trụ sạc công suất cao.</li>
            <li>Các trang bị có sẵn: mọi thứ bạn cần để sạc ở nhà và trên đường.</li>
        </ul>
        <div style="justify-content:space-around">
            <div class="thietke" style="display: flex;">
                <div style="padding:0px 20px 5px 180px">
                    <img src="../image/BMW-I7/bmw_7_series_i7_sac1.webp" style="width:500px; height:auto">
                    <div style="font-size:25px; padding-top:20px">Bộ sạc treo tường Wall Box BMW.</div>
                    <div style="width:500px">Sạc BMW tại nhà với công suất lên đến 11 kW, cung cấp khả năng sạc qua đêm an toàn, thuận tiện. Các tính năng bao gồm thiết kế tiết kiệm không gian, giá treo cáp gọn gàng và thanh hiển thị trạng thái thực tế dạng LED. Dễ dàng kết nối với các ứng dụng qua Bluetooth.</div>
                </div>
                <div style="padding:0px 180px 5px 20px">
                    <img src="../image/BMW-I7/bmw_7_series_i7_sac2.webp"style="width:500px; height:auto">
                    <div style="font-size:25px; padding-top:20px">Bộ sạc nhanh linh hoạt - Flexible Fast Charger.</div>
                    <div style="width:500px">Bộ sạc nhanh linh hoạt sử dụng ổ cắm gia đình hoặc công nghiệp với công suất lên đến 2.3 kW thông qua phích cắm chuyển đổi. Có vỏ chống thấm nước và cáp dài sáu mét. Đây là trang bị tiêu chuẩn khi mua BMW, tùy thuộc vào mẫu xe và đặc thù thị trường.</div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="font" style="font-size:40px; padding:80px 0px 10px 40px">TRẢI NGHIỆM SANG TRỌNG VỚI BMW i7.</div>
    <div class="mota" style="padding:0px 0px 30px 40px">Tận hưởng cảm giác thoải mái hoàn hảo trên mẫu xe BMW i7 - nơi mọi thứ được thiết kế đúng theo nhu cầu của bạn:
        <ul style="list-style-type: disc; padding: 10px 0px 0px 20px;font-size:16.5px; color:#444444">
            <li>Các chi tiết cao cấp được thiết kế tỉ mỹ và tinh xảo.</li>
            <li>Thiết kế tiện nghi - mọi chi tiết được đặt chính xác nơi bạn cần.</li>
            <li>Các công nghệ được thiết kế cẩn thận biến mỗi chuyến đi thành một trải nghiệm khó quên.</li>
        </ul>
    </div>
    <div style="justify-content:space-around">
        <div class="thietke" style="display: flex;">
            <div style="padding:0px 20px 5px 10px">
                <img src="../image/BMW-I7/bmw_7_series_i7_tn1.webp" style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Khoang ghế hạng thương gia rộng rãi.</div>
                <div style="width:460px;">Ngả lưng và tận hưởng ghế sau hạng thương gia, mang đến cho bạn vị trí ngồi thoải mái và thư thái với chỗ để chân rộng rãi cùng chất lượng hoàn thiện ở mức cao cấp nhất.</div>
            </div>
            <div style="padding:0px 10px 5px 0px">
                <img src="../image/BMW-I7/bmw_7_series_i7_tc2.webp"style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Màn hình cảm ứng tích hợp ở cửa sau.</div>
                <div style="width:460px;">Tích hợp trang nhã ở cửa sau, hai màn hình cảm ứng 5,5 inch cho phép bạn điều khiển thuận tiện hệ thống thông tin giải trí, điều hòa không khí, cài đặt ghế ngồi cùng nhiều tính năng thú vị khác.</div>
            </div>
            <div style="padding:0px 50px 5px 10px">
                <img src="../image/BMW-I7/bmw_7_series_i7_tn3.webp"style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Hệ thống âm thành vòm BOWERS & WILKINS DIAMOND.</div>
                <div style="width:460px;">Với 35 loa nổi bật, hệ thống âm thanh vòm Bowers & Wilkins Diamond tạo ra trải nghiệm âm thanh 4D với 1.965 watt mang đến âm thanh giải trí vô cùng hấp dẫn.</div>
            </div>
        </div>
    </div>
    <div class="font" style="font-size:40px; padding:150px 0px 10px 40px">CÔNG NGHỆ NỔI BẬT CỦA BMW i7.</div>
    <div class="mota" style="padding:0px 0px 30px 40px">Sự kết hợp của công nghệ tiên tiến và đẳng cấp – Các dịch vụ từ hệ thống BMW ConnectedDrive cung cấp một loạt các chức năng hữu ích đồng hành cùng bạn mỗi ngày với mẫu xe BMW i7. Các gói tính năng linh hoạt giữ cho bạn luôn kết nối hoàn hảo với chiếc xe của mình.</div>
    <div style="justify-content:space-around">
        <div class="thietke" style="display: flex;">
            <div>
                <img src="../image/BMW-I7/bmw_7_series_i7_cnnb1.webp" style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Bộ Sạc Tại Nhà.</div>
                <div style="width:705px">Kết hợp giữa thiết kế theo ngôn ngữ BMW i mới với tiêu chuẩn cao trong chất lượng hoàn thiện và vô cùng nhỏ gọn, tiện lợi, bộ sạc AC treo tường của BMW được cung cấp để khách hàng có thể sạc xe một cách nhanh chóng với tốc độ sạc lên đến 11kW. Sau khi xe được cắm điện, quá trình sạc sẽ bắt đầu và tự động ngắt điện khi Pin được sạc đầy hoặc sạc đến mức được xác định trước.</div>
            </div>
            <div>
                <img src="../image/BMW-I7/bmw_7_series_i7_cnnb2.webp"style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Kết nối điện thoại thông minh</div>
                <div style="width:705px">Với hệ điều hành BMW OS 8.0 mới nhất, BMW i7 cho khả năng kết nối không dây thông minh với điện thoại, giúp bạn tận hưởng sự tiên nghi ưu việt nhất khi sử dụng xe.</div>
            </div>
        </div>
    </div>
    <div class="font" style="font-size:40px; padding:50px 0px 10px 40px">PHỤ TÙNG CHÍNH HÃNG CHO BMW i7.</div>
    <div class="mota" style="padding:0px 0px 30px 40px">Với Phụ kiện BMW chính hãng, bạn có thể trang bị cho chiếc BMW của mình theo ý muốn cá nhân, các sản phẩm được phối hợp hoàn hảo với BMW i7 về chất lượng, thiết kế và hiệu suất.</div>
    <div style="justify-content:space-around">
        <div class="thietke" style="display: flex;">
            <div style="padding:0px 20px 5px 10px">
                <img src="../image/BMW-I7/bmw_7_series_i7_pt1.webp" style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Móc Treo BMW cho chuyến đi thêm tiện lợi.</div>
                <div style="width:460px;">Móc treo được thiết kế theo tiêu chuẩn “Travel & Comfort” - có thể gắn mặc định trên xe hoặc tháo ra để dùng mục đích khác.</div>
            </div>
            <div style="padding:0px 10px 5px 0px">
                <img src="../image/BMW-I7/bmw_7_series_i7_mpt2.webp"style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Thảm sàn BMW cho các ghế.</div>
                <div style="width:460px;">Bảo vệ chính xác khỏi tình trạng ẩm móc và bụi bẩn trong khu vực để chân phía trước. Với thiết kế màu đen kết hợp với inox, tạo nên thiết kế nổi thất sang trọng riêng biệt.</div>
            </div>
            <div style="padding:0px 50px 5px 10px">
                <img src="../image/BMW-I7/bmw_7_series_i7_pt3.webp"style="width:auto; height:auto">
                <div style="font-size:25px; padding-top:20px">Thảm sàn BMW ở khoang hành lý.</div>
                <div style="width:460px;">Thảm chống trượt, chống nước để bảo vệ khoang hành lý khỏi bụi bẩn và độ ẩm. Với màu đen sang trọng kết hợp với chất liệu innox cứng cáp.</div>
            </div>
        </div>
    </div>
    <div class="font" style="font-size:40px; padding:50px 0px 10px 40px">THÔNG SỐ KỸ THUẬT CỦA THE BMW i7.</div>
    <div class="mota" style="padding:0px 0px 30px 40px; font-size: 25px">BMW i7 xDrive60.</div>
    <div class="thietke" style="width:auto; height:450px; background-color: white;">
        <div style="float:left;">
            <img src="../image/BMW-I7/bmw_7_series_i7_tknt.webp" style="width:100%; height:auto;">
        </div>
        <div class="GDBang" style="float:left; background-color: white; width:739px">
            <div class="ptubang">
                <div class="nhanchu">Công suất động cơ tính bằng kW (hp)</div>
                <div class="gt">400 (544)*</div>
            </div>
            <div class="ptubang">
                <div class="nhanchu">Mô-men xoắn cực đại tính bằng Nm:</div>
                <div class="gt">745*</div>
            </div>
            <div class="ptubang">
                <div class="nhanchu">Gia tốc 0–100 km/h trên s:</div>
                <div class="gt">4.7*</div>
            </div>
            <div class="ptubang">
                <div class="nhanchu">Quảng đường hoạt động km (WLTP) (km):</div>
                <div class="gt">591-625*</div>
            </div>
            <div class="ptubang">
                <div class="nhanchu">Thời gian sạc tối đa (giờ):</div>
                <div class="gt">10.5 giờ</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
