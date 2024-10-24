<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>BMW Z4 | BMW Việt Nam</title>
  </head>
  <style>
    body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  box-sizing: border-box;
  width: 100%;
  max-width: 100vw;
  overflow-x: hidden;
}

<<<<<<< HEAD
img {
  max-width: 100%;
  height: auto;
  display: block;
}
#header {
  background-image: url(./image/nen\ bmwz4.webp);
  background-repeat: no-repeat;
  background-size: auto;
  background-position: center top 70px;
}
#header h2 {
  margin-top: 60px;
  margin-left: 30px;
  color: white;

  font-family: Arial, Helvetica, sans-serif;
}
#header h3 {
  margin-left: 34px;
  margin-bottom: 150px;
  color: white;
  font-family: Arial, Helvetica, sans-serif;
}
#gioithieu {
  padding-top: 100px;
  padding-left: 40px;
  font-size: 20px;
}
#header #tuvan {
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
#header #tuvan:hover {
  background-color: blue;
}
#header table {
  font-size: 18px;
  margin-top: 400px;
  color: black;
  margin-left: 82px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  padding-bottom: 50px;
}
#header td {
  padding-right: 100px;
}
.decoration {
  font-size: 20px;
  font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}
#thietke {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.784);
  padding-left: 50px;
  padding-right: 80px;
}
#thietke:hover {
  color: rgb(0, 0, 0);
  font-weight: bold;
  transition: linear;
}
#thietke:after {
  position: absolute;
  left: 0;
  right: 0;
  background-color: blue;
  z-index: 1;
}
#tskt {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.74);
}
#tskt:hover {
  color: black;
  font-weight: bold;
}
#chitiet {
  padding: 10px 40px 10px;
  background-color: rgb(0, 94, 255);
  margin-right: 70px;
  color: white;
  text-decoration: none;
  float: right;
}
#chitiet:hover {
  background-color: blue;
}
.gt {
  margin-left: 30px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 18px;
}
.thietkenoibat {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  color: black;
  font-weight: 300;
  margin-left: 30px;
}
.text h1 {
  font-size: 30px;
  font-weight: 200;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
.text p {
  font-size: 20px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 200;
  text-align: justify;
}
#ngoaithat {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 20px;
  box-sizing: border-box;
  padding-right: 40px;
}
.mota {
  width: 30%;
  margin-bottom: 20px;
  text-align: center;
}
.motaa {
  width: 45%;
  margin-bottom: 20px;
  text-align: center;
  padding-right: 30px;
}
.noithat {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 30px;
  box-sizing: border-box;
}
/* Container tổng của carousel */
.carousel {
  position: relative;
  width: 100%;
  max-width: 800px; /* Đặt giới hạn chiều rộng */
  margin: auto; /* Căn giữa carousel */
  overflow: hidden; /* Ẩn các phần slide nằm ngoài khu vực hiển thị */
  border: 2px solid #ddd; /* Khung xung quanh carousel (tuỳ chọn) */
}

/* Container của các slides */
.slides-wrapper {
  overflow: hidden; /* Đảm bảo chỉ hiện 1 slide tại một thời điểm */
}

/* Đặt các slide nằm ngang với flex */
.slides {
  display: flex;
  transition: transform 0.5s ease-in-out; /* Chuyển động mượt mà khi chuyển slide */
}

/* Từng slide chiếm toàn bộ chiều rộng carousel */
.slide {
  min-width: 100%; /* Mỗi slide chiếm 100% chiều rộng của carousel */
  box-sizing: border-box;
}

/* Căn chỉnh và tạo style cho nội dung trong từng slide */
.slide img {
  width: 100%; /* Đảm bảo ảnh chiếm toàn bộ chiều rộng của slide */
  height: 100%; /* Giữ tỉ lệ của ảnh */
}

.content {
  background-color: rgba(0, 0, 0, 0.6); /* Nền mờ cho phần nội dung */
  color: white;
  padding: 20px;
  position: absolute;
  bottom: 0;
  width: 100%;
  box-sizing: border-box;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

.content h2 {
  margin: 0;
  font-size: 24px;
  font-weight: bold;
}

.content p {
  margin: 10px 0 0;
  font-size: 16px;
}

/* Nút mũi tên trái phải */
.arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%); /* Căn giữa nút mũi tên theo chiều dọc */
  background-color: rgba(0, 0, 0, 0.5); /* Nền mờ cho nút */
  color: white;
  border: none;
  font-size: 24px;
  padding: 10px;
  cursor: pointer;
  z-index: 10; /* Đảm bảo nút nằm trên các slide */
}

/* Nút mũi tên trái */
.arrow.left {
  left: 0; /* Đặt nút ở bên trái */
}

/* Nút mũi tên phải */
.arrow.right {
  right: 0; /* Đặt nút ở bên phải */
}

/* Hiệu ứng khi di chuột vào nút mũi tên */
.arrow:hover {
  background-color: rgba(0, 0, 0, 0.8); /* Tăng độ mờ khi di chuột vào */
}

/* Đảm bảo carousel hoạt động tốt trên các màn hình nhỏ */
@media (max-width: 768px) {
  .content h2 {
    font-size: 20px; /* Giảm kích thước chữ trên màn hình nhỏ */
  }

  .content p {
    font-size: 14px; /* Giảm kích thước chữ cho đoạn văn */
  }

  .arrow {
    font-size: 18px; /* Giảm kích thước nút mũi tên */
    padding: 8px; /* Giảm padding của nút */
  }
}
.BMWW {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  color: black;
  font-weight: 300;
  margin-left: 30px;
  margin-top: 80px;
}
.tieude h1 {
  font-size: 30px;
  font-weight: 200;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
.tieude p {
  font-size: 20px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 200;
  text-align: justify;
}
.gioithieu {
  width: 30%;
  margin-bottom: 20px;
  text-align: center;
}
#Original {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 20px;
  box-sizing: border-box;
  padding-right: 40px;
}
.bangkithuat {
  float: right;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 20px;
  font-weight: 300;
  margin-right: 20px;
  border-collapse: collapse; /* Để các đường viền không bị giãn */
  display: table-cell;
  margin-top: -300px;
}

.chuthich {
  font-weight: bold;
  text-align: right;
}
.bangkithuat td {
  padding-top: 25px;

  vertical-align: middle;
}
.bangkithuat tr {
  border-bottom: 1px solid black;
  border-width: thin;
}
.tuvan {
  float: left;
  margin-right: 30px;
}
.thacmac {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 20px;
  font-weight: 200;
  margin-top: 20px;
}
.thacmac a {
  padding: 10px 40px;
  background-color: rgb(0, 110, 255);
  color: white;
  font-size: auto;
  text-decoration: none;
}
.thacmac a:hover {
  background-color: blue;
  font-weight: bold;
}
.lienhee {
  text-decoration: none;
}

  </style>
  <body>
    <div id="header">
      <div id="gioithieu">
        <h2>THE Z4</h2>
        <h3>BMWZ4</h3>
      </div>
      <a id="tuvan" href="./lien-he.php">Tư vấn chi tiết</a>
      <table>
        <tr>
          <td>Giá từ</td>
          <td>Nhiên liệu</td>
        </tr>
        <tr>
          <td>3.799.000.000 VNĐ</td>
          <td>Xăng</td>
        </tr>
      </table>
      <div class="decoration">
        <a id="thietke" href="#phanthietke">Thiết kế</a>
        <a id="tskt" href="#TSKTT">Thông số kĩ thuật</a>
        <a
          id="chitiet"
          href="https://drive.google.com/file/d/1mblOaOBm7yOsjtis8cuHEuqYyQ5MgYXX/view"
          >Thông số kĩ thuât</a
        >
      </div>
      <br />
      <hr />
      <p class="gt">
        <span style="font-size: 20px; font-weight: bold"> BMW Z4</span>
        <br />
        Đắm mình trong sức hút khó khuyên từ mẫu xe mui trần đến từ thương hiệu BMW. Ngôi sao đường phố BMW Z4 sở hữu vẻ đẹp nội thất - ngoại thất nổi bật và đầy cuốn. BMW Z4 - giúp bạn tận hưởng cảm giác lái ở đẳng cấp hoàn toàn khác.
        <br />
        <br /><br /><br />
      </p>
    </div>
    <div id="Footer">
      <div class="phanthietke">
        <h1 class="thietkenoibat">THIẾT KẾ NỔI BẬT CỦA BMW Z4</h1>
        <h2 class="thietkenoibat">Nội thất.</h2>
        <div id="ngoaithat">
          <div class="mota">
            <img src="./image/ghế bmwz4.webp" />
            <div class="text">
              <h1>Ngoại có thể thao tác cho hàng ghế trước.</h1>
              <p>
                Có thể thao tác với tiêu đề hợp lý, đệm ngồi sâu, các phân hạng bên trong và phần tiêu đề thu hẹp giúp mang lại sự ổn định cho người ngồi ngay cả khi vào cửa nhanh.
              </p>
            </div>
          </div>
          <div class="mota">
            <img src="./image/đèn trang trí bmwz4.webp" />
            <div class="text">
              <h1>Đèn trang trí nội thất theo phong cách tân cổ điển.</h1>
              <p>
                Đèn biên giới giúp tạo ra bầu không khí thư giãn và ấm cúng trong nội thất. Hệ thống viền đèn flash bao gồm 06 màu với tính năng điều chỉnh cường độ sáng giúp mang lại hiệu ứng ánh sáng phù hợp với từng tâm trạng và cảm xúc của chủ nhân.
              </p>
            </div>
          </div>
          <div class="mota">
            <img src="./image/loa bmwz4.webp" />
            <div class="text">
              <h1>
                Hệ thống âm thanh Harman Kardon.</h1>
              <p>
                Hệ thống âm thanh vòm Harman Kardon nổi bật với bộ chiến đại kỹ thuật số công suất 408 watt, 7 kênh và 12 loa. Hệ thống âm thanh tuyệt vời, trẻo cho tất cả các vị trí ngồi. Bộ ứng dụng kỹ thuật số cho phép điều chỉnh âm thanh đặc biệt, tạo nên âm thanh sống động và rực rỡ.
              </p>
            </div>
          </div>
        </div>
        <br /><br /><br /><br />
        
        <h2 class="thietkenoibat">Ngoại thất.</h2>
        <div class="noithat">
          <div class="motaa">
            <img src="./image/đầu xe.webp" />
            <div class="text">
              <h1>Cẩn thận lưới tản nhiệt</h1>
              <p>
                Thiết kế mạng lưới lò sưởi bảo vệ BMW đặc trưng tạo ra các kiến ​​trúc năng động cho mẫu xe. BMW Z4 M Sport được trang bị viền hào nhiệt nhôm hào giúp cho phần đầu xe càng thêm biểu tượng.
              </p>
            </div>
          </div>
          <div class="motaa">
            <img src="./image/thân xe bmwz4.webp" />
            <div class="text">
              <h1>Hốc gió.</h1>
              <p>
                Hốc gió (Air Breather) của BMW Z4 nằm ngay sau vòm bánh trước, giúp tăng tính khí động học, khuếch tán biểu tượng cầu vồng trong vòm bánh xe và điều chỉnh chiều gió xuôi theo thân xeg nhờ đó giảm sức mạnh và tăng hiệu suất của xe. Đây cũng là một chi tiết trang trí ngoại hình của xe bổ sung phần thể thao và mạnh mẽ.
              </p>
            </div>
          </div>
          <div class="motaa">
            <img src="./image/đuôi xe bmwz4.webp" />
            <div class="text">
              <h1>Ống xả mạ crôm bóng.</h1>
              <p>
                Ống xả màu chrome bóng loáng ở bên phải và bên trái phần đuôi xe. Thiết kế tăng thêm phong cách thao tác cho xe.
              </p>
            </div>
          </div>
          <div class="motaa">
            <img src="./image/mui xe bmwzz4.webp" />
            <div class="text">
              <h1>Mũi mềm.</h1>
              <p>
                rang bị nhiều màu đen kết hợp hài hòa với các đường nét trên xe. Đề điều khiển xe, chỉ cần nhấn nút, mui có thể mở và đóng bằng điện trong khoảng mười giây, ngay cả khi đang lái xe với tốc độ lên tới 50 km/h. Vượt trên cả khả năng cách âm tuyệt vời, BMW Z4 là một trong những mùi hương xứng đáng sở hữu của thương hiệu BMW.
              </p>
            </div>
          </div>
          <div class="motaa">
            <img src="./image/shadow bmwz4.webp" />
            <div class="text">
              <h1>Gói trang bị M Shadow Line có độ bóng cao.</h1>
              <p>
                Gói trang thiết bị M có độ bóng cao Shadow Line là gói trang trí bao gồm các chi tiết màu đen trên xe như viền cửa sổ, tay nắm cửa giúp mang lại vẻ ngoài mạnh mẽ và thể thao hơn. Gói trang bị không chỉ làm nổi bật phong cách năng động mà còn tăng cường cảm giác giác sang trọng và cá tính cho BMW Z4.

              </p>
            </div>
          </div>
        </div>
        
        <h1 class="thietkenoibat">KHẢ NĂNG VẬN HÀNH CỦA BMW Z4</h1>
        
        
        <div class="carousel">
          <button class="arrow left" onclick="prevSlide()">&#10094;</button>
          <div class="slides-wrapper">
              <div class="slides">
                  <div class="slide">
                      <img src="./image/bmwz4(1).webp">
                      
                  </div>
                  <div class="slide">
                      
                        <img src="./image/bmwz4(2).webp">
                  </div> 

                  <div class="slide">
                      <img src="./image/bmwz4(3).webp">
                     
                  </div>
                  <div class="slide">
                      <img src="./image/bmwz4(4).webp">
                      
                  </div>
                  <div class="slide">
                      <img src="./image/bmwz4(1).webp">
                      
                  </div>
              </div>
          </div>
          <button class="arrow right" onclick="nextSlide()">&#10095;</button>
      </div>
      <script>
        let currentSlide = 0;
  const slides = document.querySelectorAll('.slide');
  const totalSlides = slides.length;
  
  function showSlide(index) {
      if (index >= totalSlides) currentSlide = 0;
      else if (index < 0) currentSlide = totalSlides - 1;
      else currentSlide = index;
  
      const offset = -currentSlide * 100;
      document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
  }
  
  function nextSlide() {
      showSlide(currentSlide + 1);
  }
  
  function prevSlide() {
      showSlide(currentSlide - 1);
  }
      </script>
         
         
         <h2 class="BMWW">KHẢ NĂNG VẬN HÀNH CỦA BMW Z4.</h2>
          
         <div id="Original">
            <div class="gioithieu">
              <img src="./image/cao phanh bmwz4.webp" />
              <div class="tieude">
                <h1>Cao phanh hệ thống M Sport.</h1>
                <p>
                  BMW Z4 sở hữu kẹp M Sport màu xanh đẹp mắt. phanh có bốn piston vừa khít với phanh đĩa, cho cảm giác phanh nhanh nhạy, chính xác và đảm bảo an toàn trong mọi chuyến đi
                </p>
              </div>
            </div>
            
            <div class="gioithieu">
              <img src="./image/hộp số bmwz4.webp" />
              <div class="tieude">
                <h1>Hộp số auto 8 cấp steptronic.</h1>
                <p>
                  Hộp số Steptronic Sport 8 cấp cho phép thay đổi số thể thao cả tự động và thủ công thông tin cần chọn số hoặc lẫy chuyển số trên vô lăng - để chuyển chuyển mượt mà hoặc phù hợp với phong cách lái xe thể thao.
                </p>
              </div>
            </div>
           
            <div class="gioithieu">
              <img src="./image/động cơ bmwz4.webp" />
              <div class="tieude">
                <h1>Động cơ TwinPower Turbo</h1>
                <p>Sức kéo mạnh mẽ, vận hành trơn tru và âm thanh cuốn hút là những biểu tượng nổi bật đặc biệt của động cơ loy 4 xy-lanh thẳng hàng TwinPower Turbo. Với 2 hệ thống van biến thiên Valvetronic, VANOS và bộ phun nhiên liệu có độ chính xác cao HPI kết hợp cùng bộ tăng áp cuộn kép giúp động cơ vận hành hiệu suất và thể thao.
                  </p>
              </div>
            </div>
          </div>

          <h2 class="BMWW" style="font-weight: 400;">HỆ THỐNG HỖ TRỢ LÁI XE CỦA BMW Z4.</h2>
          <div id="Original">
            <div class="gioithieu">
              <img src="./image/hổ trợ lui bmwz4.webp" />
              <div class="tieude">
                <h1>Hỗ trợ Reversing Assistant xe lùi.</h1>
                <p>
                  Tính năng hỗ trợ lùi xe có khả năng ghi nhớ quãng đường 50m đã đi qua khi chuyển với tốc độ từ 35 km/h giúp người lái có thể lùi xe dễ dàng. Hệ thống sẽ hỗ trợ gần như tất cả công việc còn lại, người lái chỉ cần tập trung quan sát vấn đề xung quanh để xử lý vấn đề kịp thời khi cần thiết.
                </p>
              </div>
            </div>
            
            <div class="gioithieu">
              <img src="./image/chắn gió bmwz4.webp" />
              <div class="tieude">
                <h1>Màn hình hiển thị thông tin trên kính chắn gió của BMW.</h1>
                <p>
                  BMW Head-Up Display là một công nghệ tiên tiến được tích hợp trên các dòng xe BMW, bao gồm cả BMW Z4. Tính năng này cho phép hiển thị các thông tin quan trọng trực tiếp trên kính gió, ngay trong tầm nhìn của người lái. Nhờ đó, người lái có thể dễ dàng theo dõi các thông số như tốc độ, hướng dẫn đường đi, giải trí thông tin và cảnh báo an toàn mà không cần phải rời mắt khỏi đường.
                </p>
              </div>
            </div>
            
            <div class="gioithieu">
              <img src="./image/trợ lý cá nhân bmwz4.webp" />
              <div class="tieude">
                <h1>Trợ lý cá nhân thông minh BMW Intelligence Personal Assistant.</h1>
                <p>
                  Với Trợ lý cá nhân thông minh của BMW, người lái xe có thể tương tác với xe bằng giọng nói, tạo ra trải nghiệm lái xe tiện ích và hiện đại hơn. Từ đó giúp người lái tập trung vào công việc điều khiển xe, đồng thời tận dụng mọi tiện ích mà xe mang lại một cách dễ dàng và an toàn.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <h1 id="TSKTT" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: black;
          font-weight: 300;
          margin-left: 30px;">THÔNG SỐ KĨ THUẬT</h1>
          <h3 style="font-size: 25px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 200; margin-left: 30px;">BMW Z4</h3></div>
           <div> </div>
            
            
          <div>
          <table class="bangkithuat">
            <tr>
              <td>Công suất động cơ kW (hp) tại vòng/ phút </td>
              <td class="chuthich">145(197)/4.500_6.500</td>
            </tr>
            <tr>
              <td>Vân tốc tối đa (km/h) :</td>
              <td class="chuthich">250
              </td>
            </tr>
            <tr>
              <td>Thời gian tăng tốc từ 0-100km/h (s)</td>
              <td class="chuthich ">6.8</td>
            </tr>
            <tr>
              <td>Lượng nhiên liệu tiêu thụ kết hợp (l/100km) (theo tiêu chuẩn WLTP)</td>
              <td class="chuthich">8.2</td>
            </tr>
            <tr>
              <td>Lượng phát thải CO2 kết hợp (g/km) (WLTP):</td>
              <td class="chuthich">138</td>
            </tr>
          </table>
          <h1 class="BMWW" style="margin-top: 200px; font-weight: 400;">DỊCH VỤ VÀ HỖ TRỢ CHO BMW Z4</h1>
          <div class="tuvan"><img style="margin-left: 30px;" src="./image/lien lạc bmwz4.webp"></div>
          <div class="thacmac">
            <h1 style="font-size: 25px; font-weight: 400; padding-top: 40px;">BẠN CÓ MUỐN ĐƯỢC TƯ VẤN TRỰC TIẾP?</h1>
            <p>Nếu bạn có bất kỳ thắc mắc nào, cần thêm thông tin hoặc muốn biết các ưu đãi cụ thể về BMW Z4, vui lòng liên hệ với Đại lý BMW gần nhất. Chuyên viên tư vấn BMW chuyên nghiệp của chúng tôi sẽ sẵn lòng tư vấn cá nhân cho bạn qua điện thoại hoặc trực tiếp tại showroom.​
            </p>
            <a href="">Liên hệ showroom gần nhất</a>
          </div>
          <div><p style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 200; margin-top: 200px; margin-left: 20px;">(*) Tất cả hình ảnh và video có thể khác so với phiên bản thực tế. Liên hệ showroom gần nhất để được tư vấn giá xe và phiên bản theo nhu cầu của bạn.
          
         
          </div>
        </body >
      </html>

