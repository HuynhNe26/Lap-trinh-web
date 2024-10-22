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
  background-image: url(../image/anhtieudex6.webp);
  background-repeat: no-repeat;
  background-size: auto;
  background-position: center top 70px;
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
  max-width: 800px; /* Đặt giới hạn chiều rộng */
  margin: auto; /* Căn giữa carousel */
  overflow: hidden; /* Ẩn các phần slide nằm ngoài khu vực hiển thị */
  border: 2px solid #ddd; /* Khung xung quanh carousel (tuỳ chọn) */
}

/* Container của các slides */
.slides-wrapperx6 {
  overflow: hidden; /* Đảm bảo chỉ hiện 1 slide tại một thời điểm */
}

/* Đặt các slide nằm ngang với flex */
.slidesx6 {
  display: flex;
  transition: transform 0.5s ease-in-out; /* Chuyển động mượt mà khi chuyển slide */
}

/* Từng slide chiếm toàn bộ chiều rộng carousel */
.slidex6 {
  min-width: 100%; /* Mỗi slide chiếm 100% chiều rộng của carousel */
  box-sizing: border-box;
}

/* Căn chỉnh và tạo style cho nội dung trong từng slide */
.slidex6 img {
  width: 100%; /* Đảm bảo ảnh chiếm toàn bộ chiều rộng của slide */
  height: auto; /* Giữ tỉ lệ của ảnh */
}

.contentx6 {
  background-color: rgba(0, 0, 0, 0.6); /* Nền mờ cho phần nội dung */
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
.arrow.leftx6 {
  left: 0; /* Đặt nút ở bên trái */
}

/* Nút mũi tên phải */
.arrow.rightx6 {
  right: 0; /* Đặt nút ở bên phải */
}

/* Hiệu ứng khi di chuột vào nút mũi tên */
.arrow:hover {
  background-color: rgba(0, 0, 0, 0.8); /* Tăng độ mờ khi di chuột vào */
}

/* Đảm bảo carousel hoạt động tốt trên các màn hình nhỏ */
@media (max-width: 768px) {
  .contentx6 h2 {
    font-size: 20px; /* Giảm kích thước chữ trên màn hình nhỏ */
  }

  .contentx6 p {
    font-size: 14px; /* Giảm kích thước chữ cho đoạn văn */
  }

  .arrow {
    font-size: 18px; /* Giảm kích thước nút mũi tên */
    padding: 8px; /* Giảm padding của nút */
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
  border-collapse: collapse; /* Để các đường viền không bị giãn */
  display: table-cell;
  margin-top: -400px;
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
  border-bottom: 1px solid black;
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
    <title>BMW X6 | BMW Việt Nam</title>
  </head>
  <body class="x6">
    
    <div id="headerx6">
      <div id="gioithieux6">
        <h2>THE X6</h2>
        <h3>BMWX6</h3>
      </div>
      <a id="tuvanx6" href="./lienhe.php">Tư vấn chi tiết</a>
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
      <div class="decorationx6">
        <a id="thietkex6" href="#Footerx6">Thiết kế</a>
        <a id="tsktx6" href="#TSKTTx6">Thông số kĩ thuật</a>
        <a
          id="chitietx6"
          href="https://drive.google.com/file/d/1OMilBqmhPb-IUchLbaxmdJe8sw955wF2/view?usp=sharing"
          >Thông số kĩ thuât</a
        >
      </div>
      <br />
      <hr />
      <p class="gtx6">
        <span style="font-size: 20px; font-weight: bold"> X6 xDrive40i:</span>
        <br />
        Lượng nhiên liệu tiêu thụ tích hợp (l/100 km): 13,33
        <br />
        Lượng nhiên liệu tiêu thụ trong đô thị (l/100 km): 16.19
        <br />
        Lượng nhiên liệu tiêu thụ ngoài đô thị (l/100 km): 11.68 Số chứng nhận:
        22KDN/000270
        <br /><br />
        <br />BMW X6 là sự kết hợp giữa ngoại hình độc đáo và tính thế thao nhờ
        động cơ mạnh mẽ và khung gầm chắc chắn. <br /><br /><br />
      </p>
    </div>
    <div id="Footerx6">
      <div class="phanthietkex6">
        <h1 class="thietkenoibatx6">THIẾT KẾ NỔI BẬT CỦA BMW X6.</h1>
        <h2 class="thietkenoibatx6">Ngoại thất.</h2>
        <div id="ngoaithatx6">
          <div class="motax6">
            <img src="../image/thamchaomungx6.webp" />
            <div class="textx6">
              <h1>Thảm chào mừng.</h1>
              <p>
                Thảm chào mừng. Chức năng thảm chào mừng (Welcome Light
                Carpet)tạo hiệu ứng thảm ảnh sáng, chiếu sáng hai bên cửa xung
                quanh lối vào khi cửa mở, tạo không khí chào đón xung quanh ngay
                tại lối vào. Thảm ánh sáng chào mừng cũng làm cho việc lên/
                xuống xe trong không gian tối thuận tiện và an toàn hơn.
              </p>
            </div>
          </div>
          <div class="motax6">
            <img src="../image/cuasotroix6.webp" />
            <div class="textx6">
              <h1>Cửa sổ trời Panorama.</h1>
              <p>
                Cửa sổ trời giúp không gian bên trong tươi mới và trong lành khi
                mở cửa, đồng thời nó cũng tạo ra một không gian ngập tràn ánh
                sáng nội thất khi đóng.Mở hoặc đóng chỉ bằng một chạm trên nút
                bấm hoặc bằng chìa khóa xe, có tính năng trượt và nâng. Có đi
                kèm với rèm che nắng và tấm ngăn gió lùa.
              </p>
            </div>
          </div>
          <div class="motax6">
            <img src="../image/banhmamx6.webp" />
            <div class="textx6">
              <h1>Bánh mâm.</h1>
              <p>
                Mâm xe hợp kim kích thước 20-inch, kiểu 740M Bicolour Orbit Grey
                sử dụng lốp runflat với kích thước lốp trước là 275/45 R20 và
                lốp sau là 305/40 R20.
              </p>
            </div>
          </div>
        </div>
        <br /><br /><br /><br />
        <h2 class="thietkenoibatx6">Nội thất.</h2>
        <div class="noithatx6">
          <div class="motaax6">
            <img src="../image/denviennoithatx6.webp" />
            <div class="textx6">
              <h1>Đèn viền nội thất.</h1>
              <p>
                Bao gồm đèn viền xung quanh ở cửa trước và cửa sau, tạo ra bầu
                không khí thoải mái và ấm cúng bên trong nội thất. Đèn chào mừng
                chiếu sáng khu vực cửa trước và cửa sau. Đèn viền nội thất có
                các màu: Trắng, Xanh dương, Cam, Vàng đồng, Tím lilac và xanh lá
                cây là các màu cơ bản
              </p>
            </div>
          </div>
          <div class="motaax6">
            <img src="../image/chitietnoithatx6.webp" />
            <div class="textx6">
              <h1>Các chi tiết nội thất ốp pha lê 'CraftedClarity'.</h1>
              <p>
                Các chi tiết nội thất ốp pha lê 'CraftedClarity'. Các chi tiết
                pha lê 'CraftedClarity' được sử dụng trong nội thất đều được làm
                thủ công giúp tăng tính trực quan và thẩm mỹ cho nội thất. Các
                chi tiết được làm từ pha lê như cần số, núm điều khiển iDrive,
                nút Start/ Stop
              </p>
            </div>
          </div>
        </div>
        <h1 class="thietkenoibatx6">KHẢ NĂNG VẬN HÀNH CỦA BMW X6.</h1>
        <p style="font-size: 20px; font-weight: 200; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-left: 30px; margin-right: 25px;">Động cơ hiệu suất cao 8 xylanh cho công suất lên đến 530HP, kết hợp với hệ thống treo thích ứng M giúp chiếc BMW X6 trở thành một chiếc Sport Activity Coupé có khả năng di chuyển vượt trội trên mọi địa hình.</p>
        
        <div class="carouselx6">
          <button class="arrow leftx6" onclick="prevSlide()">&#10094;</button>
          <div class="slides-wrapperx6">
              <div class="slidesx6">
                  <div class="slidex6">
                      <img src="../image/canhluotgiox6.webp">
                      <div class="contentx6">
                          <h2>Cánh lướt gió phía sau M Carbon.</h2>
                          <p>Cánh lướt gió phía sau M Carbon nhấn mạnh thiết kế mạnh mẽ, thể thao của xe, đồng thời giúp giảm lực cản nâng khí động học ở sau xe.</p>
                      </div>
                  </div>
                  <div class="slidex6">
                      <img src="../image/ghethethaox6.webp">
                      <div class="contentx6">
                          <h2>Ghế thể thao cho người lái và hành khách phía trước.</h2>
                          <p>Năng động và thoải mái: ghế thể thao tiêu chuẩn, có chức năng chỉnh điện đa hướng cho hàng ghế trước có nhiều tùy chọn điều chỉnh điện. Ngoài ra, hàng ghế trước còn có tính năng điều chỉnh đệm bưng lưng, giúp người ngồi trên xe có tư thế ngồi thoải mái và ổn định cơ thể, đặc biệt là khi vào cua gấp.</p>
                      </div>
                  </div>
                  <div class="slidex6">
                      <img src="../image/drivex6.webp">
                      <div class="contentx6">
                          <h2>BMW xDrive.</h2>
                          <p>Hệ thống dẫn động bốn bánh BMW xDrive thông minh có khả năng linh hoạt lực kéo giữa cầu trước và cầu sau với tốc độ xử lý cực nhanh. Hệ dẫn động xDrive giúp xe linh hoạt hơn, bám đường tốt hơn và an toàn hơn trên mọi điều kiện địa hình, có khả năng ngăn chặn các tình huống thừa lái và thiếu lái, hỗ trợ vào cua tốt hơn.</p>
                      </div>
                  </div>
                  <div class="slidex6">
                      <img src="../image/controlx6.webp">
                      <div class="contentx6">
                          <h2>Driving Experience Control.</h2>
                          <p>Chức năng Driving Experience Control giúp người lái có thể tùy chỉnh chế độ lái theo mong muốn, bao gồm 3 chế độ: Comfort - chế độ tiêu chuẩn, ECO PRO - chế độ tiết kiệm nhiên liệu và Sport - chế độ lái xe thể thao. Chức năng Adaptive Mode sẽ điều chỉnh liên tục hệ thống treo thích ứng, hệ thống lái và hộp số để phù hợp với tình hình lái xe ngay lúc đó.</p>
                      </div>
                  </div>
                  <div class="slidex6">
                      <img src="../image/hethongtreox6.webp">
                      <div class="contentx6">
                          <h2>Hệ thống treo thích ứng M.</h2>
                          <p>Hệ thống treo thích ứng M có khả năng điều chỉnh để thích ứng với điều kiện đường xá và người lái. Chủ xe cũng có thể điều chỉnh các đặc tính của hệ thống treo thông qua chức năng chuyển đổi chế độ lái (Driving Experience), chức năng này cho phép chủ xe chuyển đổi chế độ lái theo sở thích - từ sự thoải mái đến cảm giác lái thể thao với khả năng xử lý cực kỳ nhanh nhẹn.</p>
                      </div>
                  </div>
              </div>
          </div>
          <button class="arrow rightx6" onclick="nextSlide()">&#10095;</button>
      </div>
      <script>
        let currentSlide = 0;
  const slides = document.querySelectorAll('.slidex6');
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
          <h2 class="BMWWx6">Original BMW Accessories</h2>
          <div id="Originalx6">
            <div class="gioithieux6">
              <img src="../image/copnocx6.webp" />
              <div class="tieudex6">
                <h1>Thanh ngang cốp nóc BMW.</h1>
                <p>
                  Các thanh ngang cốp nóc có thể được kết
hợp với tất cả các khung hành lý và cốp nóc
BMW thêm phần hoàn hảo cho ngoại hình
toàn diện của chiếc xe. Các bộ phận này dễ
dàng lắp đặt mà không cần dụng cụ và tuân
thủ tiêu chuẩn chất lượng và an toàn cao
nhất nhờ kết cấu chắc khỏe và hệ thống
khóa chống trộm.
                </p>
              </div>
            </div>
            <div class="gioithieux6">
              <img src="../image/cuasotroix6.webp" />
              <div class="tieudex6">
                <h1>Hộp mui trần cabin BMW 520 bằng bạc titan/màu đen.</h1>
                <p>
                  Hộp mui trần cabin BMW hiện đại màu đen
với các tấm ốp bằng bạc titan bên hông có
dung tích chứa 520 lít và tương thích với mọi
hệ thống cốp nóc BMW. Do có thể mở từ cả
hai bên và mỗi bên đều có khóa ba chạc ở
giữa, tiện lợi khi chất hàng hóa và khóa
chống trộm.
                </p>
              </div>
            </div>
            <div class="gioithieux6">
              <img src="../image/banhmamx6.webp" />
              <div class="tieudex6">
                <h1>Thảm khoang hành lý.</h1>
                <p>Thảm chống trượt, chịu nước và bền bỉ với
                  mép cao ở cả 4 bên giúp bảo vệ khoang
                  hành lý khỏi bụi bẩn và ẩm ướt. Thảm màu
                  đen thêm phần hoàn hảo cho nội thất xe với
                  các Trang bị cơ bản.
                  
                </p>
              </div>
            </div>
          </div>

          <h2 class="BMWWx6" style="font-weight: 400;">XỨNG DANH "MÃNH THÚ ĐẦU ĐÀN" Ở DÒNG XE GẦM CAO</h2>
          <div id="Originalx6">
            <div class="gioithieux6">
              <img src="../image/đàu xex6.webp" />
              <div class="tieudex6">
                <h1>Đầu xe thu hút ánh nhìn.</h1>
                <p>
                  Với lướt tản nhiệt kích thước lớn có thể phát sáng kết hợp cùng gói trang bị M Sport, BMW X6 mang lại cảm giác thể thao, mạnh mẽ - xứng danh mãnh thú đầu đàn.
                </p>
              </div>
            </div>
            <div class="gioithieux6">
              <img src="../image/kieudangx6.webp" />
              <div class="tieudex6">
                <h1>Kiểu dáng thể thao như xe Coupé.</h1>
                <p>
                  Thiếu kế nóc xe kiểu dáng coupé thời thượng. BMW X6 sở hữu mâm M 20 inch thể thao kết hợp cùng hệ thống phanh hiệu năng cao M Sport giúp mỗi chuyến hành trình cùng BMW X6 là một trải nghiệm riêng biệt.
                </p>
              </div>
            </div>
            <div class="gioithieux6">
              <img src="../image/menhdanhx6.webp" />
              <div class="tieudex6">
                <h1>Mệnh danh là "Mãnh quái".</h1>
                <p>
                  Mạnh mẽ và đậm chất thể thao, BMW X6 sở hữu ngoại hình đặc trưng của dòng xe gầm cao X Series và tính thể thao của một chiếc coupé. Động cơ TwinPower Turbo hiệu suất cao và hệ thống dẫn động hai cầu thông minh BMW xDrive - bảo đảm lực bám đường tuyệt vời trên mọi địa hình.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <h1 id="TSKTTx6" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: black;
          font-weight: 300;
          margin-left: 30px;">THÔNG SỐ KĨ THUẬT</h1>
          <h3 style="font-size: 25px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 200; margin-left: 30px;">BMW X6 xDrive40i.</h3></div>
          <div> <img src="../image/thongsokithuatx6.webp"> </div>
          <div>
          <table class="bangkithuatx6">
            <tr>
              <td>Công suất động cơ kW (hp) tại vòng/ phút </td>
              <td class="chuthichx6">250kW (340HP) tại 5500-6500 </td>
            </tr>
            <tr>
              <td>Vân tốc tối đa (km/h) :</td>
              <td class="chuthichx6">250
              </td>
            </tr>
            <tr>
              <td>Thời gian tăng tốc từ 0-100km/h (s)</td>
              <td class="chuthichx6 ">5.7–5.5</td>
            </tr>
            <tr>
              <td>Lượng nhiên liệu tiêu thụ kết hợp (l/100km) (theo tiêu chuẩn WLTP)</td>
              <td class="chuthichx6">13.33</td>
            </tr>
            <tr>
              <td>Lượng phát thải CO2 kết hợp (g/km) (WLTP):</td>
              <td class="chuthichx6">206</td>
            </tr>
          </table>
          <h1 class="BMWWx6" style="margin-top: 200px; font-weight: 400;">DỊCH VỤ VÀ HỖ TRỢ CHO BMW X6.</h1>
          <div class="tuvanx6"><img style="margin-left: 30px;" src="../image/tuvanx6.webp"></div>
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
