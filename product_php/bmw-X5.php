<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      body .x6 {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  box-sizing: border-box;
  width: 100%;
  max-width: 100vw;
  overflow-x: hidden;
}

img {
  max-width: 100%;
  height: auto;
  display: block;
}
#headerx6 {
  background-image: url(./image/bmw-x5-overview.webp);
  background-repeat: no-repeat;
  background-size: auto;
}
#headerx6 h2 {
  margin-top: 60px;
  margin-left: 30px;
  color: white;

  font-family: Arial, Helvetica, sans-serif;
}
#headerx6 h3 {
  margin-left: 34px;
  margin-bottom: 150px;
  color: white;
  font-family: Arial, Helvetica, sans-serif;
}
#gioithieux6 {
  padding-top: 100px;
  padding-left: 40px;
  font-size: 20px;
}
#headerx6 #tuvanx6 {
  font-size: 20px;
  padding: 10px 70px 10px;
  background-color: rgb(0, 140, 255);
  color: white;
  margin-left: 52px;
  text-decoration: none;
  width: 100px;
  font-family: Arial, Helvetica, sans-serif;
  transition: 2s;
}
#headerx6 #tuvanx6:hover {
  background-color: blue;
}
#headerx6 table {
  font-size: 18px;
  margin-top: 300px;
  color: white;
  margin-left: 82px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  padding-bottom: 50px;
}
#headerx6 td {
  padding-right: 100px;
}
.decorationx6 {
  font-size: 20px;
  font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}
#thietkex6 {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.784);
  padding-left: 50px;
  padding-right: 80px;
}
#thietkex6:hover {
  color: rgb(0, 0, 0);
  font-weight: bold;
  transition: linear;
}
#thietkex6:after {
  position: absolute;
  left: 0;
  right: 0;
  background-color: blue;
  z-index: 1;
}
#tsktx6 {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.74);
}
#tskt:hover {
  color: black;
  font-weight: bold;
}
#chitietx6 {
  padding: 10px 40px 10px;
  background-color: rgb(0, 94, 255);
  margin-right: 70px;
  color: white;
  text-decoration: none;
  float: right;
}
#chitietx6:hover {
  background-color: blue;
}
.gtx6 {
  margin-left: 30px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 18px;
}
.thietkenoibatx6 {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  color: black;
  font-weight: 300;
  margin-left: 30px;
}
.textx6 h1 {
  font-size: 30px;
  font-weight: 200;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
.textx6 p {
  font-size: 20px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 200;
  text-align: justify;
}
#ngoaithatx6 {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 20px;
  box-sizing: border-box;
  padding-right: 40px;
}
.motax6 {
  width: 30%;
  margin-bottom: 20px;
  text-align: center;
}
.motaax6 {
  width: 45%;
  margin-bottom: 20px;
  text-align: center;
  padding-right: 30px;
}
.noithatx6 {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 30px;
  box-sizing: border-box;
}
/* Container tổng của carousel */
.carouselx6 {
  position: relative;
  width: 100%;
  max-width: 800px; 
  margin: auto; 
  overflow: hidden;
  border: 2px solid #ddd; 
}


.slides-wrapperx6 {
  overflow: hidden; 
}


.slidesx6 {
  display: flex;
  transition: transform 0.5s ease-in-out; 
}


.slidex6 {
  min-width: 100%; 
  box-sizing: border-box;
}


.slidex6 img {
  width: 100%;
  height: auto; 
}

.contentx6 {
  background-color: rgba(0, 0, 0, 0.6); 
  color: white;
  padding: 20px;
  position: absolute;
  bottom: 0;
  width: 100%;
  box-sizing: border-box;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

.contentx6 h2 {
  margin: 0;
  font-size: 24px;
  font-weight: bold;
}

.contentx6 p {
  margin: 10px 0 0;
  font-size: 16px;
}


.arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%); 
  background-color: rgba(0, 0, 0, 0.5); 
  color: white;
  border: none;
  font-size: 24px;
  padding: 10px;
  cursor: pointer;
  z-index: 10; 
}


.arrow.leftx6 {
  left: 0; 
}


.arrow.rightx6 {
  right: 0; 
}


.arrow:hover {
  background-color: rgba(0, 0, 0, 0.8); 
}


@media (max-width: 768px) {
  .contentx6 h2 {
    font-size: 20px; 
  }

  .contentx6 p {
    font-size: 14px; 
  }

  .arrow {
    font-size: 18px; 
    padding: 8px; 
  }
}
.BMWWx6 {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  color: black;
  font-weight: 300;
  margin-left: 30px;
  margin-top: 80px;
}
.tieudex6 h1 {
  font-size: 30px;
  font-weight: 200;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
.tieudex6 p {
  font-size: 20px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 200;
  text-align: justify;
}
.gioithieux6 {
  width: 30%;
  margin-bottom: 20px;
  text-align: center;
}
#Originalx6 {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 20px;
  box-sizing: border-box;
  padding-right: 40px;
}
.bangkithuatx6 {
  float: right;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 20px;
  font-weight: 300;
  margin-right: 20px;
  border-collapse: collapse; 
  display: table-cell;
  margin-top: -600px;
}

.chuthichx6 {
  font-weight: bold;
  text-align: right;
}
.bangkithuatx6 td {
  padding-top: 25px;
  vertical-align: middle;
}
.bangkithuatx6 tr {
  border-top: 1px solid black;
  border-width: thin;
}
.tuvanx6 {
  float: left;
  margin-right: 30px;
}
.thacmacx6 {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 20px;
  font-weight: 200;
  margin-top: 20px;
}
.thacmacx6 a {
  padding: 10px 40px;
  background-color: rgb(0, 110, 255);
  color: white;
  font-size: auto;
  text-decoration: none;
}
.thacmacx6 a:hover {
  background-color: blue;
  font-weight: bold;
}


    </style>
    <style>html {
      scroll-behavior: smooth;
    }</style>
    <title>BMW X5 | BMW Việt Nam</title>
  </head>
  <body class="x6">
    
    <div id="headerx6" style="width:100%; height:100%">
      <div id="gioithieux6">
        <h2>THE NEW X5</h2>
        <h3>BMW X5</h3>
      </div>
      <a id="tuvanx6" href="./lienhe.php">Tư vấn chi tiết</a>
      <table>
        <tr>
          <td>Giá từ</td>
          <td>Nhiên liệu</td>
        </tr>
        <tr>
          <td>3.469.000.000 VNĐ</td>
          <td>Xăng</td>
        </tr>
      </table>  
    </div>
          <div class="decorationx6">
        <a id="thietkex6" href="#Footerx6">Thiết kế</a>
        <a id="tsktx6" href="#TSKTTx6">Thông số kĩ thuật</a>
        <a
          id="chitietx6"
          href="https://drive.google.com/file/d/1osdJ2zbRSHQ-T8hUaD-gmG3gDF6tmAQO/view"
          >Thông số kĩ thuât</a
        >
      </div>
      <br />
      <hr />
      <p class="gtx6">
      Với BMW X5, bạn có thể trải nghiệm nội thất mang phong cách thể thao độc đáo nhưng cũng không kém phần thoải mái. Động cơ đốt trong 6 xi-lanh BMW TwinPower Turbo mạnh mẽ với công suất 280 kW (381 hp).
        <br /><br /><br />
      </p>
    <div id="Footerx6">
      <div class="phanthietkex6">
        <h1 class="thietkenoibatx6">NÂNG CẤP CÁC TÍNH NĂNG TIỆN NGHI TRÊN BMW X5 MỚI.</h1>
        <div id="ngoaithatx6">
          <div class="motax6">
            <img src="./image/the_x5_40i_xline_01226.webp" />
            <div class="textx6">
              <h1>Hệ thống âm thanh Harman Kardon Surround Sound.</h1>
              <p>
              Cụm đèn trước thiết kế thanh mảnh, hiện đại, nổi bật với dải đèn LED định vị ban ngày thiết kế biểu tượng X. Cản trước thiết kế nổi bật với hốc gió khối hình tam giác, thu hút mọi ánh nhìn trên mọi cung đường.
              </p>
            </div>
          </div>
          <div class="motax6">
            <img src="./image/the_x5_40i_msport_01413.webp" />
            <div class="textx6">
              <h1>Cửa sổ trời toàn cảnh Panorama.</h1>
              <p>
              Cửa sổ trời toàn cảnh Panorama mở ra tầm nhìn rộng rãi và thoáng đãng, tạo sự thoải mái cho không gian nội thất giúp hành khách tận hưởng mọi chuyến đi.
              </p>
            </div>
          </div>
          <div class="motax6">
            <img src="./image/di22_000106021.webp" />
            <div class="textx6">
              <h1>Đèn viền nội thất</h1>
              <p>
                Hệ thống đèn viền nội thất xung quanh xe với đa dạng tuỳ chọn màu sắc tạo nên không gian hiện đại, phù hợp theo tâm trạng chủ nhân.
              </p>
            </div>
          </div>
        </div>
        <br /><br /><br /><br />
          <h1 class="BMWWx6">THIẾT KẾ NGOẠI THẤT ĐƯỢC NÂNG CẤP TOÀN DIỆN.</h1>
          <h2 class="BMWWx6">BMW X5 mới được nâng cấp toàn diện về kiểu dáng bên ngoài, thiết kế bên trong, trang bị tiện nghi, khả năng vận hành và các tính năng an toàn.</h2>
          <div id="Originalx6">
            <div class="gioithieux6">
              <img src="./image/di22_000106057.webp" />
              <div class="tieudex6">
                <h1>Thiết kế đầu xe.</h1>
                <p>
              Cụm đèn trước thiết kế thanh mảnh, hiện đại, nổi bật với dải đèn LED định vị ban ngày thiết kế biểu tượng X. Cản trước thiết kế nổi bật với hốc gió khối hình tam giác, thu hút mọi ánh nhìn trên mọi cung đường.
                </p>
              </div>
            </div>
            <div class="gioithieux6">
              <img src="./image/di22_000106056.webp" />
              <div class="tieudex6">
                <h1>Thiết kế đuôi xe.</h1>
                <p>
              Cụm đèn hậu thiết kế mới dáng chữ "L" đối xứng đặc trưng, phân tầng, hiệu ứng ánh sáng 3D. Cản sau với ốp bạc thiết kế mới làm nổi bật lên sự mạnh mẽ và cá tính cho BMW X5.
                </p>
              </div>
            </div>
            <div class="gioithieux6">
              <img src="./image/di22_000106045.webp" />
              <div class="tieudex6">
                <h1>Cốp sau dạng vỏ sò.</h1>
                <p>
              Tích hợp các tính năng Comfort Access System đóng mở cốp rảnh tay. Nắp cốp dưới tích hợp đóng mở bằng điện tiện lợi, tạo không gian rộng giúp các thao tác vận chuyển hành lý, hàng hoá trở nên linh hoạt và dễ dàng hơn.
                </p>
              </div>
            </div>
          </div>

          <h1 class="BMWWx6" >VẬN HÀNH MƯỢT MÀ, MẠNH MẼ SẴN SÀNG CHINH PHỤC MỌI CUNG ĐƯỜNG.</h1>
          <h2 class="BMWWx6" >Hệ thống vận hành của BMW X5 mới nổi bật với sự êm ái, mạnh mẽ, giảm lượng phát thải CO2 và tiết kiệm nhiên liệu cho chủ nhân sử dụng, yên tâm trong mọi hành trình.</h2>
          <div id="Originalx6">
            <div class="gioithieux6">
              <img src="./image/di22_000108686.webp" />
              <div class="tieudex6">
                <h1>Hệ thống hỗ trợ vận hành MILD HYBRID</h1>
                <p>
              Động cơ đốt trong được hỗ trợ từ động cơ điện với công suất lên tới 9kW và momen xoắn 200Nm giúp quá trình tăng tốc mạnh mẽ, không có độ trễ, sang số mượt mà. Hệ thống còn giúp cải thiện thời gian khởi động (giảm 20%), giảm độ ồn, độ rung giật khi khởi động. Công nghệ thu hồi năng lượng cũng là yếu tố giúp xe giảm lượng phá thải C02. Tiết kiệm nhiện liệu trong khoảng 0,3L/100km.
                </p>
              </div>
            </div>
            <div class="gioithieux6">
              <img src="./image/di22_000108689.webp" />
              <div class="tieudex6">
                <h1>Hệ thống khung gầm</h1>
                <p>
              Các vật liệu khung vỏ với khả năng chịu ứng suất cao. Tỷ lệ vật liệu nhôm bố trí chiếm tỷ trọng lớn, gia cố thép nhiều pha tại các điểm chịu lực. Đảm bảo trọng lượng xe tối ưu, cứng cáp và vận hành ổn định.
                </p>
              </div>
            </div>
            <div class="gioithieux6">
              <img src="./image/di22_000108681.webp" />
              <div class="tieudex6">
                <h1>Hệ thống BMW xDrive</h1>
                <p>
                xDrive là hệ thống dẫn động 2 cầu toàn thời gian thông minh của BMW. Hệ thống giúp BMW X5 mới tăng tính an toàn cho xe trên mọi điều kiện địa hình, đồng thời mang đến trải nghiệm lái xe tuyệt vời.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <h1 id="TSKTTx6" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: black;
          font-weight: 300;
          margin-left: 30px;">THÔNG SỐ KĨ THUẬT</h1>
          <h3 style="font-size: 25px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 200; margin-left: 30px;">BMW X5 xDrive40i</h3></div>
          <div> <img src="./image/bmw_x_series_x5_mb.webp"> </div>
          <div>
          <table class="bangkithuatx6">
            <tr>
              <td>Công suất tính bằng kW (hp):</td>
              <td class="chuthichx6">280 (381)</td>
            </tr>
            <tr>
              <td>Tăng tốc 0–100 km/h (s):</td>
              <td class="chuthichx6">5.4</td>
            </tr>
            <tr>
              <td>Mức tiêu thụ nhiên liệu kết hợp (theo WLTP) (l/100 km):</td>
              <td class="chuthichx6 ">9.2</td>
            </tr>
            <tr>
              <td>Lượng khí thải CO2 kết hợp (theo WLTP) (g / km):</td>
              <td class="chuthichx6">185.90 - 203.18</td>
            </tr>
            <tr>
              <td> 
                <a
          id="chitietx6"
          href="https://drive.google.com/file/d/1osdJ2zbRSHQ-T8hUaD-gmG3gDF6tmAQO/view"
          >Khám phá thêm về các thông số kỹ thuật của BMW X5 mới</a>
              </td>
            </tr>
          </table>
          <h1 class="BMWWx6" style="margin-top: 200px; font-weight: 400;">DỊCH VỤ VÀ HỖ TRỢ CHO BMW X6.</h1>
          <div class="tuvanx6"><img style="margin-left: 30px;" src="./image-BMWX6/tuvanx6.webp"></div>
          <div class="thacmacx6">
            <h1 style="font-size: 25px; font-weight: 400; padding-top: 40px;">BẠN CÓ MUỐN ĐƯỢC TƯ VẤN TRỰC TIẾP?</h1>
            <p>Nếu bạn có bất kỳ thắc mắc nào, cần thêm thông tin hoặc muốn biết các ưu đãi cụ thể về BMW X6, vui lòng liên hệ với Đại lý BMW gần nhất. Chuyên viên tư vấn BMW chuyên nghiệp của chúng tôi sẽ sẵn lòng tư vấn cá nhân cho bạn qua điện thoại hoặc trực tiếp tại showroom.​
            </p>
            <a href="">Liên hệ showroom gần nhất</a>
          </div>
          <div><p style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 200; margin-top: 200px; margin-left: 20px;">(*) Tất cả hình ảnh và video có thể khác so với phiên bản thực tế. Liên hệ showroom gần nhất để được tư vấn giá xe và phiên bản theo nhu cầu của bạn.
          
         
          </div>
        </body >
      </html>
