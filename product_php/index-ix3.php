<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  box-sizing: border-box;
  width: 100%;
  max-width: 100vw;
  overflow-x: hiddenhidden;
}

img {
  max-width: 100%;
  height: auto;
  display: block;
}
#header {
  background-image: url(./image/nền\ bmwix3.webp);
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
  margin-top: 300px;
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
  height: auto; /* Giữ tỉ lệ của ảnh */
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
  margin-top: -400px;
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
    <title>BMW IX3| BMW Việt Nam</title>
  </head>
  <body>
    <div id="header">
      <div id="gioithieu">
        <h2>THE IX3</h2>
        <h3>BMW IX3</h3>
      </div>
      <a id="tuvan" href="./lien-he.php">Tư vấn chi tiết</a>
      <table>
        <tr>
          <td>Giá từ</td>
          <td>Nhiên liệu</td>
        </tr>
        <tr>
          <td>3.799.000.000 VNĐ</td>
          <td>Điện</td>
        </tr>
      </table>
      <div class="decoration">
        <a id="thietke" href="#phanthietke">Thiết kế</a>
        <a id="tskt" href="#TSKTT">Thông số kĩ thuật</a>
        <a
          id="chitiet"
          href="https://drive.google.com/file/d/1WZWr6ZtLyBL-8k9zGYb3IUY5KnX2Jpqj/view"
          >Thông số kĩ thuât</a
        >
      </div>
      <br />
      <hr />
      <p class="gt">
        <span style="font-size: 20px; font-weight: bold"> BMW ix3:</span>
        <br />
        Vượt xa định nghĩa đơn thuần của một môi trường thân thiện, BMW iX3 mới không chỉ là mẫu xe SAV sơn điện đầu tiên sở hữu những đột phá công nghệ tiên tiến hàng đầu mà vẫn có khả năng vận hành đa địa hình , thể thao, mạnh mẽ, nhưng vẫn giữ được “thần thái” của sự sang trọng, đây cũng là sự chiến đấu bước chuyển mình mạnh mẽ cho giai đoạn phát triển mới của BMW. Với phạm vi hoạt động lên tới 461 km* và tiêu thụ điện từ 3,3 kWh/100 km*, BMW iX3 là dòng xe lý tưởng cho mọi hành trình của bạn. <br /><br /><br />
      </p>
    </div>
    <div id="Footer">
      <div class="phanthietke">
        <h1 class="thietkenoibat">HỆ TRUYỀN ĐỘNG ĐIỆN CỦA BMW iX3</h1>
        <h2 class="thietkenoibat">Mạnh mẽ, hiệu suất và sáng tạo hơn bao giờ hết: Sở hữu công nghệ BMW eDrive kết hợp pin điện áp cao mới và hệ thống treo thích ứng, Bánh SAV bong bóng sáng bằng khả năng tăng tốc ấn biểu tượng trên mọi cung path.</h2>
        <div id="ngoaithat">
          <div class="mota">
            <img src="./image/hệ thống bmwix3.webp" />
            <div class="text">
              <h1>Ứng dụng hệ thống thích hợp.</h1>
              <p>
               
              </p>Hệ thống treo Adaptive của BMW iX3 mang lại trải nghiệm lái mượt mà và ổn định, tự động điều chỉnh phù hợp với mọi điều kiện trên đường. Bạn sẽ cảm nhận được sự thoải mái và an toàn trong mọi hành động.
            </div>
          </div>
          <div class="mota">
            <img src="./image/bộ truyền điện bmwix3.webp" />
            <div class="text">
              <h1>Bộ truyền động điện</h1>
              <p>
                Bộ truyền động điện Bộ truyền động điện của BMW iX3 cung cấp năng lực mạnh và vận hành cô ái. Với công nghệ tiên tiến, xe đảm bảo khả năng tăng tốc nhanh chóng và hiệu quả năng lượng vượt trội, mang lại trải nghiệm lái xe đầy phấn và thân thiện với môi trường.
              </p>
            </div>
          </div>
          <div class="mota">
            <img src="./image/hệ thống năng lương bmwix3.webp" />
            <div class="text">
              <h1>Hệ thống tái tạo năng lượng</h1>
              <p>
                Hệ thống phanh tái sinh Hệ thống phục hồi pin hiệu suất tối ưu của BMW iX3 bằng cách chuyển đổi năng lượng từ quá trình phanh và giảm tốc độ điện năng. Điều này giúp tăng cường đường di chuyển và tiết kiệm năng lượng, mang đến trải nghiệm lái xe thân thiện với môi trường.
              </p>
            </div>
          </div>
        </div>
        <br /><br /><br /><br />
        <h2 class="thietkenoibat">Sức mạnh tuyệt đối</h2>
        
          <div class="motaa">
            <img src="./image/quãng đường bmwix3.webp" />
            <div class="text">
              <h1>QUẢNG ĐƯỜNG HOẠT ĐỘNG LÊN ĐẾN 461KM BMW iX3</h1>
              <p>
                Sở hữu công nghệ BMW eDrive kết hợp pin điện áp cao mới và hệ thống treo thích ứng, Chiếc SAV tràn đầy phấn khích bằng khả năng tăng tốc ấn biểu tượng trên mọi cung đường, BMW iX3 có thể đi được quảng đường lên tới 461 km*. Các công nghệ tiên tiến như phanh sinh sinh giúp tăng phạm vi hoạt động và giảm cường độ thụ điện xuống còn 18,9–18,5 kWh/100 km.
              </p>
            </div>
          </div>
        </div>
        <h1 class="thietkenoibat">KHẢ NĂNG VẬN HÀNH CỦA BMW IX3.</h1>
        <p style="font-size: 20px; font-weight: 200; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-left: 30px; margin-right: 25px;">Động cơ hiệu suất cao 8 xylanh cho công suất lên đến 530HP, kết hợp với hệ thống treo thích ứng M giúp chiếc BMW X6 trở thành một chiếc Sport Activity Coupé có khả năng di chuyển vượt trội trên mọi địa hình.</p>
        
        <div class="carousel">
          <button class="arrow left" onclick="prevSlide()">&#10094;</button>
          <div class="slides-wrapper">
              <div class="slides">
                  <div class="slide">
                      <img src="./phananh/canhluotgio.webp">
                      <div class="content">
                          <h2>Cánh lướt gió phía sau M Carbon.</h2>
                          <p>Cánh lướt gió phía sau M Carbon nhấn mạnh thiết kế mạnh mẽ, thể thao của xe, đồng thời giúp giảm lực cản nâng khí động học ở sau xe.</p>
                      </div>
                  </div>
                  <div class="slide">
                      <img src="./phananh/ghethethao.webp">
                      <div class="content">
                          <h2>Ghế thể thao cho người lái và hành khách phía trước.</h2>
                          <p>Năng động và thoải mái: ghế thể thao tiêu chuẩn, có chức năng chỉnh điện đa hướng cho hàng ghế trước có nhiều tùy chọn điều chỉnh điện. Ngoài ra, hàng ghế trước còn có tính năng điều chỉnh đệm bưng lưng, giúp người ngồi trên xe có tư thế ngồi thoải mái và ổn định cơ thể, đặc biệt là khi vào cua gấp.</p>
                      </div>
                  </div>
                  <div class="slide">
                      <img src="./phananh/drive.webp">
                      <div class="content">
                          <h2>BMW xDrive.</h2>
                          <p>Hệ thống dẫn động bốn bánh BMW xDrive thông minh có khả năng linh hoạt lực kéo giữa cầu trước và cầu sau với tốc độ xử lý cực nhanh. Hệ dẫn động xDrive giúp xe linh hoạt hơn, bám đường tốt hơn và an toàn hơn trên mọi điều kiện địa hình, có khả năng ngăn chặn các tình huống thừa lái và thiếu lái, hỗ trợ vào cua tốt hơn.</p>
                      </div>
                  </div>
                  <div class="slide">
                      <img src="../phananh/control.webp">
                      <div class="content">
                          <h2>Driving Experience Control.</h2>
                          <p>Chức năng Driving Experience Control giúp người lái có thể tùy chỉnh chế độ lái theo mong muốn, bao gồm 3 chế độ: Comfort - chế độ tiêu chuẩn, ECO PRO - chế độ tiết kiệm nhiên liệu và Sport - chế độ lái xe thể thao. Chức năng Adaptive Mode sẽ điều chỉnh liên tục hệ thống treo thích ứng, hệ thống lái và hộp số để phù hợp với tình hình lái xe ngay lúc đó.</p>
                      </div>
                  </div>
                  <div class="slide">
                      <img src="../phananh/hethongtreo.webp">
                      <div class="content">
                          <h2>Hệ thống treo thích ứng M.</h2>
                          <p>Hệ thống treo thích ứng M có khả năng điều chỉnh để thích ứng với điều kiện đường xá và người lái. Chủ xe cũng có thể điều chỉnh các đặc tính của hệ thống treo thông qua chức năng chuyển đổi chế độ lái (Driving Experience), chức năng này cho phép chủ xe chuyển đổi chế độ lái theo sở thích - từ sự thoải mái đến cảm giác lái thể thao với khả năng xử lý cực kỳ nhanh nhẹn.</p>
                      </div>
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
          <h2 class="BMWW">CÔNG VƯỢT TRỘI TỪ BMW iX3.</h2>
          <div id="Original">
            <div class="gioithieu">
              <img src="./image/trợ lý ảo bmwix3.webp" />
              <div class="tieude">
                <h1>Trợ lý đậu xe Đỗ xe</h1>
                <p>
                  Đỗ xe tự động Hỗ trợ đỗ xe của BMW iX3 hỗ trợ đỗ xe tự động và chính xác. Với các cảm biến và camera hiện đại, hệ thống giúp bạn đỗ xe dễ dàng trong mọi không gian chật hẹp, mang lại sự tiện lợi và an toàn tối đa.
                </p>
              </div>
            </div>
            
            <div class="gioithieu">
              <img src="./image/trợ lý cá nhân bmwix3.webp" />
              <div class="tieude">
                <h1>Trợ lý cá nhân BMW Smart Personal Assistant.</h1>
                <p>
                  Với sự hỗ trợ của ảo thông minh, người lái BMW có thể tương tác với xe bằng giọng nói, tạo ra trải nghiệm lái xe tiện ích và hiện đại hơn. Từ đó giúp người lái tập trung vào công việc điều khiển xe, đồng thời tận dụng mọi tiện ích mà xe mang lại một cách dễ dàng và an toàn.
                </p>
              </div>
            </div>
            <div class="gioithieu">
              <img src="./image/trợ lý ảo bmwix3.webp" />
              <div class="tieude">
                <h1>Trợ lý đậu xe Đỗ xe</h1>
                <p>Đỗ xe tự động Hỗ trợ đỗ xe của BMW iX3 hỗ trợ đỗ xe tự động và chính xác. Với các cảm biến và camera hiện đại, hệ thống giúp bạn đỗ xe dễ dàng trong mọi không gian chật hẹp, mang lại sự tiện lợi và an toàn tối đa.
                </p>
              </div>
            </div>
          </div>

          <h2 class="BMWW" style="font-weight: 400;">NGOẠI THẤT ẤN TƯỢNG của BMW IX3</h2>
          <div id="Original">
            <div class="gioithieu">
              <img src="./image/đầu xe bmwix3.webp" />
              <div class="tieude">
                <h1>Thiết kế đầu xe</h1>
                <p>
                  Lưới tản nhiệt nhiệt cẩn thận kín đáo đặc biệt của xe điện BMW tôi khẳng định phong độc và hiện đại. Các loại gió hình chữ L kết hợp cùng các chi tiết màu xanh tạo nên sự tương phản nổi bật nhấn mạnh đây là chiếc xe tinh điện của thương hiệu BMW. Đèn LED laser thiết kế mới góp ý tạo nên sức hút hút khó thoải mái lựa chọn diện mạo mới của BMW iX3.
                </p>
              </div>
            </div>
            <div class="gioithieu">
              <img src="./image/thân xe bmwix3.webp" />
              <div class="tieude">
                <h1>Thiết kế thân xe.</h1>
                <p>
                  Thiết kế thân xe nổi bật với mâm xe khí động học kích thước 20 inch đi kèm logo viền xanh. Hốc gió phía sau bánh trước không chỉ giúp tối ưu hóa tính khí động học của xe mà còn tôn lên vẻ đẹp độcg, thể thao của BMW iX3.
                </p>
              </div>
            </div>
            <div class="gioithieu">
              <img src="./image/đuôi xe bmwix3.webp" />
              <div class="tieude">
                <h1>Thiết kế đuôi xe.</h1>
                <p>
                  BMW iX3 mới tạo nên ấn tượng mạnh mẽ với cụm đèn hậu LED thiết kế 3D độc và hiện đại. Khe thoát khí dọc, cột báo nằm ngang giúp xuất hiện bên ngoài phần đuôi xe bổ sung thu hút. Sau đó có thể nổi bật với 2 biểu tượng màu xanh chi tiết cho ống xã, nối liền hai ống xả là thanh trang trí màu Frozen giúp tăng cường nhận diện cho BMW iX3.
                </p>
              </div>
            </div>
          </div>
        </div>
        
        <div>
          <h1 id="TSKTT" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: black;
          font-weight: 300;
          margin-left: 30px;">THÔNG SỐ KĨ THUẬT</h1>
          <h3 style="font-size: 25px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 200; margin-left: 30px;">BMW IX3</h3></div>
          <div> <img src="./image/thong số kĩ thuật bmwix3.webp"> </div>
          <div>
          <table class="bangkithuat">
            <tr>
              <td>Công suất động cơ kW (hp)</td>
              <td class="chuthich">210 (286) </td>
            </tr>
            <tr>
              <td>Mô-men xoắn cực đại (Nm):</td>
              <td class="chuthich">400
              </td>
            </tr>
            <tr>
              <td>Thời gian tăng tốc từ 0-100km/h (s)</td>
              <td class="chuthich ">6.8s</td>
            </tr>
            <tr>
              <td>Quảng cáo hoạt động (km) (WLTP):</td>
              <td class="chuthich">lên đến 461*</td>
            </tr>
            <tr>
              <td>Tối đa lượng pin sạc (giờ):</td>
              <td class="chuthich">7,5h</td>
            </tr>
          </table>
          <h1 class="BMWW" style="margin-top: 200px; font-weight: 400;">DỊCH VỤ VÀ HỖ TRỢ CHO BMW iX3</h1>
          <div class="tuvan"><img style="margin-left: 30px;" src="./image/tư vấn bmwix3.webp"></div>
          <div class="thacmac">
            <h1 style="font-size: 25px; font-weight: 400; padding-top: 40px;">BẠN CÓ MUỐN ĐƯỢC TƯ VẤN TRỰC TIẾP?</h1>
            <p>Nếu bạn có bất kỳ thắc mắc nào, cần thêm thông tin hoặc muốn biết các ưu đãi cụ thể về BMW IX3, vui lòng liên hệ với Đại lý BMW gần nhất. Chuyên viên tư vấn BMW chuyên nghiệp của chúng tôi sẽ sẵn lòng tư vấn cá nhân cho bạn qua điện thoại hoặc trực tiếp tại showroom.​
            </p>
            <a href="">Liên hệ showroom gần nhất</a>
          </div>
          <div><p style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 200; margin-top: 200px; margin-left: 20px;">(*) Tất cả hình ảnh và video có thể khác so với phiên bản thực tế. Liên hệ showroom gần nhất để được tư vấn giá xe và phiên bản theo nhu cầu của bạn.
          
         
          </div>
        </body >
      </html>
