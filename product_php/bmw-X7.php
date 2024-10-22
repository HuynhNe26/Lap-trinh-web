<!DOCTYPE html>
<html lang="en">
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
  overflow-x: hidden;
}

img {
  max-width: 100%;
  height: auto;
  display: block;
}

#headerx7 {
  background-image: url(../image/anhtiuedex7.webp);
  background-repeat: no-repeat;
  background-position: center top;
  background-size: cover; /* Hình ảnh phủ kín header mà không bị méo */
  height: 100vh; /* Chiều cao của header bằng 100% chiều cao màn hình */
  margin-top: 70px; /* Cách phần trên của màn hình 70px */
}
#headerx7 h2 {
  margin-top: 60px;
  margin-left: 30px;
  color: white;
  font-size: 50px;
  font-family: Arial, Helvetica, sans-serif;
}
#headerx7 h3 {
  margin-left: 34px;
  margin-bottom: 150px;
  color: white;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 30px;
}
#gioithieux7 {
  padding-top: 100px;
  padding-left: 40px;
  font-size: 20px;
}
#headerx7 #tuvanx7 {
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
#headerx7 #tuvanx7 {
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
#headerx7 #tuvanx7:hover {
  background-color: blue;
}
#headerx7 table {
  font-size: 18px;
  margin-top: 300px;
  color: white;
  margin-left: 82px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  padding-bottom: 80px;
}
#headerx7 td {
  padding-right: 100px;
}
.decorationx7 {
  font-size: 20px;
  font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
  margin-top: -25px;
}
#thietkex7 {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.784);
  padding-left: 50px;
  padding-right: 80px;
}
#thietkex7:hover {
  color: rgb(0, 0, 0);
  font-weight: bold;
  transition: linear;
}
#thietkex7:after {
  position: absolute;
  left: 0;
  right: 0;
  background-color: blue;
  z-index: 1;
}
#tsktx7 {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.74);
  padding-right: 80px;
}
#tsktx7:hover {
  color: black;
  font-weight: bold;
}
.gtx7 {
  margin-left: 30px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 18px;
}
#chitietx7 {
  padding: 10px 40px 10px;
  background-color: rgb(0, 94, 255);
  margin-right: 70px;
  color: white;
  text-decoration: none;
  float: right;
  margin-top: -30px;
}
#chitietx7:hover {
  background-color: blue;
}
#phutungx7 {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.74);
  padding-right: 80px;
}
#phutungx7:hover {
  color: black;
  font-weight: bold;
}
#taichinhx7 {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.74);
  padding-right: 50px;
}
#taichinhx7:hover {
  color: black;
  font-weight: bold;
}
.thietkenoibatx7 {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  color: black;
  font-weight: 300;
  margin-left: 30px;
  margin-top: 300px;
}
.textx7 h1 {
  font-size: 30px;
  font-weight: 200;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
#ngoaithatx7 {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 20px;
  box-sizing: border-box;
  padding-right: 40px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
.motax7 {
  width: 30%;
  margin-bottom: 20px;
  text-align: justify;
}
.textx7 h1 {
  font-size: 30px;
  font-weight: 200;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
.textx7 p {
  font-size: 20px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 200;
  text-align: justify;
}
.motaax7 {
  width: 45%;
  margin-bottom: 20px;
  text-align: center;
  padding-right: 30px;
}
.noithatx7 {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 30px;
  box-sizing: border-box;
}

.hinhmaux7 {
  display: flex;
  justify-content: center; /* Căn giữa nội dung theo chiều ngang */
  align-items: center; /* Căn giữa nội dung theo chiều dọc */
  flex-direction: column; /* Đặt các phần tử trong khối theo chiều dọc */
  height: 100vh; /* Chiều cao khối bao phủ toàn bộ màn hình */
  text-align: center; /* Căn giữa văn bản */
  margin-top: -150px;
}

.hinhphux7 {
  width: auto;
  text-align: center;
}

.hinhphux7 img {
  max-width: 100%; /* Hình ảnh chiếm tối đa chiều rộng nhưng không vượt quá khung chứa */
  height: auto; /* Giữ tỉ lệ hình ảnh */
  margin: 0 auto; /* Căn giữa hình ảnh */
  display: block;
}

.hinhphux7 h1,
.hinhphu p {
  max-width: 100%; /* Đặt chiều rộng văn bản bằng với hình ảnh */
  margin: 10px auto; /* Căn giữa văn bản và tạo khoảng cách */
  padding: 0 20px; /* Thêm padding để không dính sát lề */
  box-sizing: border-box; /* Đảm bảo padding được tính vào chiều rộng tổng */
}

.hinhphux7 h1 {
  font-size: 30px;
  font-weight: 200;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

.hinhphux7 p {
  font-size: 20px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 200;
  text-align: justify;
}
#congnghex7 {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 20px;
  box-sizing: border-box;
  padding-right: 40px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
.noibatx7 {
  width: 30%;
  margin-bottom: 20px;
  text-align: justify;
}
.noibatx7 p {
  font-size: 20px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 200;
  text-align: justify;
}
.khamphax7 {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  color: black;
  font-weight: 300;
  margin-left: 30px;
  margin-top: 300px;
}
.discoverx7 {
  margin-top: -300px;
}
.congnghetantienx7 {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  color: black;
  font-weight: 300;
  margin-left: 30px;
  margin-top: 300px;
}
.noibatx7 h1 {
  font-size: 30px;
  font-weight: 200;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
.congnghecaox7 {
  margin-top: -200px;
}
.tienichx7 {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  color: black;
  font-weight: 300;
  margin-left: 30px;
  margin-top: 300px;
}
.suitablex7 {
  margin-top: -200px;
}
#tsktx7 h1 {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  color: black;
  font-weight: 300;
  margin-left: 30px;
  margin-top: 100px;
  font-size: 40px;
}
#tsktx7 h5 {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  color: black;
  font-weight: 300;
  margin-left: 30px;
  font-size: 27px;
  margin-top: -10px;
}
.bangkithuatx7 {
  float: right;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 20px;
  font-weight: 300;
  margin-right: 0px;
  border-collapse: collapse; /* Để các đường viền không bị giãn */
  display: table-cell;
  margin-top: -400px;
}

.chuthichx7 {
  font-weight: bold;
  text-align: center;
}
.bangkithuatx7 td {
  padding-top: 25px;
  vertical-align: middle;
}
.bangkithuatx7 tr {
  border-bottom: 1px solid black;
  border-width: thin;
}
.docthemx7 a {
  text-decoration: none;
  padding-left: 40px;
  padding-right: 40px;
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: greenyellow;
  font-size: 25px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  margin-top: 50px;
  color: black;
}
.docthemx7 {
  margin-top: 50px;
  margin-left: 700px;
}
.docthemx7 a:hover {
  background-color: green;
  font-weight: bold;
}
#tc {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 25px;
  font-weight: 300;
  margin-left: 20px;
}
#tc h1 {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  color: black;
  font-weight: 300;
  margin-top: 100px;
}
.showroomx7 a {
  text-decoration: none;
  padding-left: 40px;
  padding-right: 40px;
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: rgb(0, 157, 255);
  font-size: 25px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;

  color: black;
  margin-left: 40px;
}
.showroomx7 {
  margin-top: 50px;
  margin-bottom: 50px;
}
.showroomx7 a:hover {
  background-color: blue;
  font-weight: bold;
}
#tieuhaonhienlieux7 {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
#tieuhaonhienlieux7 p {
  font-size: 20px;
  font-weight: 200;
}
#tieuhaonhienlieux7 h1 {
  font-weight: 200;
  font-size: 40px;
  font-weight: bold;
}
#tieuhaonhienlieux7 h5 {
  font-size: 25px;
  margin-top: -10px;
}
#tieuhaonhienlieux7 ul {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 25px;
}

    </style>
    <title>BMW X7| BMW VIỆT NAM</title>
    <style>
      html {
        scroll-behavior: smooth; 
      }
    </style>
  </head>
  <body>
    <div id="headerx7">
      <div id="gioithieux7">
        <h2>THE X7</h2>
        <h3>BMWX7</h3>
      </div>
      <a id="tuvanx7" href="./lienhe.php">Tư vấn chi tiết</a>
      <a id="tuvanx7" href="">Đăng kí lái thử</a>
      <table>
        <tr>
          <td>Giá từ</td>
          <td>Nhiên liệu</td>
        </tr>
        <tr>
          <td>5.549.000.000 VNĐ</td>
          <td>Xăng</td>
        </tr>
      </table>
      <div class="decorationx7">
        <a id="thietkex7" href="#Footerx7">Thiết kế</a>
        <a id="tsktx7" href="#tsktx7">Thông số kĩ thuật</a>
        <a id="taichinhx7" href="#tcx7">Tài chính</a>
        <a id="phutungx7" href="#tieuhaonhienlieux7">Dịch vụ phụ tùng</a>
        <a
          id="chitietx7"
          href="https://drive.google.com/file/d/1_SteL3e1zgCwz_gqqxs1Rz9Lk9zjRcO3/view"
          >Thông số kĩ thuât</a
        >
      </div>
      <br />
      <hr />
      <p class="gtx7">
        Được định vị là mẫu SAV (Sport Activity Vehicle) cao cấp nhất của BMW,
        BMW X7 mới thuyết phục tất cả bằng sự thanh lịch và khả năng vượt địa
        hình hoàn hảo. Phiên bản mới nhất của BMW X7 được BMW thay đổi toàn diện
        từ thiết kế ngoại thất, không gian nội thất và bổ sung thêm nhiều công
        nghệ hỗ trợ lái ấn tượng.
      </p>
    </div>
    <div id="Footerx7">
      <div class="phanthietkex7">
        <h1 class="thietkenoibatx7">ĐIỂM NỔI BẬT TRONG THIẾT KẾ NGOẠI THẤT CỦA BMW X7.</h1>
        
        <div id="ngoaithatx7">
          <div class="motax7">
            <img src="../image/dauxex7.webp" />
            <div class="textx7">
              <h1>Thiết kế đầu xe.</h1>
              <p>
                Thay đổi lớn nhất của X7 nằm ở phần đầu xe với lưới tản nhiệt phát sáng “BMW Iconic Glow” toát lên cá tính mạnh mẽ. Các thanh lưới tản nhiệt với thiết kế thanh kép tinh xảo kết hợp với các điểm nhấn mạ chrome độc quyền tạo nên điểm nhấn đặc biệt cho phần đầu xe.
              </p>
            </div>
          </div>
          <div class="motax7">
            <img src="../image/thanxex7.webp" />
            <div class="textx7">
              <h1>Thiết kế thân xe.</h1>
              <p>
                Xe sở hữu chiều dài cơ sở 3,105 mm với số đo dài, rộng, cao lần lượt là 5,181 x 2,000 x 1,835 mm. Tổng quan thân xe vẫn giữ được nét cơ bắp và sang trọng. Điểm nhấn ở phần thân là thiết kế cửa sổ rộng hơn giúp không gian nội thất bên trong thoáng đãng và lấy được thêm nhiều ánh sáng.
              </p>
            </div>
          </div>
          <div class="motax7">
            <img src="../image/duoixex7.webp" />
            <div class="textx7">
              <h1>Thiết kế đuôi xe.</h1>
              <p>
                Thiết kế đuôi xe của BMW X7 toát lên vẻ mạnh mẽ và đẳng cấp với các đường nét tinh tế và hiện đại. Đuôi xe nổi bật với đèn hậu LED chữ L đặc trưng được cách tân với đồ hoạ 3D kết hợp cùng thanh Chrome kéo dài khiến đuôi xe rộng và cơ bắp hơn hẳn.
              </p>
            </div>
          </div>
        </div>
        <h2 style="font-size: 30px;" class="thietkenoibatx7">ĐIỂM NỔI BẬT TRONG THIẾT KẾ NỘI THẤT CỦA BMW X7.</h2>
        <div class="noithatx7">
          <div class="motaax7">
            <img src="../image/noithatx7.webp" />
            <div class="textx7">
              <h1>Nội thất hiện đại và tân tiến</h1>
              <p>
                Công nghệ tiên tiến cùng với các trang thiết bị được kết hợp một cách thanh lịch và trang bị hài hoà trong khoang lái. Màn hình BMW Curved Display gồm màn hình trung tâm 14,9 inch cùng bảng đồng hồ 12,3 inch tích hợp trên 1 màn hình cong ôm trọn lấy khoang lái tạo nên cảm giác tinh gọn và cao cấp cho khu vực bảng điều khiển.
              </p>
            </div>
          </div>
          <div class="motaax7">
            <img src="../image/hangghesaux7.webp" />
            <div class="textx7">
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
          <div class="hinhmaux7">
            <div class="hinhphux7">
              <img src="../image/phalex7.webp">
              <div class="textphux7">
                <h1>Chi tiết nội thất điểm pha lê ‘CraftedClarity’.</h1>
                <p>Nội thất của BMW X7 gây ấn tượng với việc sử dụng các vật liệu cao cấp đặc biệt. Các điểm nhấn sang trọng như bảng điều khiển iDrive ốp pha lê nhấn mạnh sự sang trọng và đẳng cấp cho New X7.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="discoverx7">
          <h1 class="khamphax7">KHÁM PHÁ ĐIỂM NỔI BẬT TRONG CÁC CÔNG NGHỆ ĐỔI MỚI CỦA BMW X7.</h1>
          
          <div id="congnghex7">
            <div class="noibatx7">
              <img src="../image/cuasptroix7.webp" />
              <div class="textx7">
                
                <p>
                  CỬA SỔ TRỜI PANORAMA SKY LOUNGE.
                </p>
              </div>
            </div>
            <div class="noibatx7">
              <img src="../image/travelx7.webp" />
              <div class="textx7">
                
                <p>
                  HỆ THỐNG TRAVEL VÀ COMFORT.
                </p>
              </div>
            </div>
            <div class="noibatx7">
              <img src="../image/cuasptroix7.webp" />
              <div class="textx7">
               
                <p>
                  CỬA SỔ TRỜI PANORAMA SKY LOUNGE.
              </div>
            </div>
          </div>

          <div class="congnghecaox7">
            <h1 class="congnghetantienx7">CÔNG NGHỆ TÂN TIẾN CỦA BMW X7.</h1>
            
            <div id="congnghex7">
              <div class="noibatx7">
                <img src="../image/smartphonex7.webp" />
                <div class="textx7">
                  <h1>Tính năng kết nối điện thoại thông minh không dây</h1>
                  <p>
                    Với tính năng kết nối điện thoại thông minh không dây thông qua Apple CarPlay và Android Auto, chủ nhân của X7 có thể truy cập và sử dụng các ứng dụng quen thuộc của mình ngay trong xe.
                  </p>
                </div>
              </div>
              <div class="noibatx7">
                <img src="../image/accessx7.webp" />
                <div class="textx7">
                  <h1>Comfort Access.</h1>
                  <p>
                    Hệ thống Truy cập Tiện nghi (Comfort Access) cho phép mở tất cả các cửa xe mà không cần sử dụng chìa khóa, đồng thời trang bị thêm chìa khóa kỹ thuật số BMW (BMW Digital Key).
                  </p>
                </div>
              </div>
              <div class="noibatx7">
                <img src="../image/hedieuhanhx7.webp" />
                <div class="textx7">
                  <h1>Hệ điều hành BMW Operating System 8.0.</h1>
                  <p>
                    Bộ điều khiển BMW iDrive và hệ điều hành BMW Operating System 8.0 mới giúp việc điều khiển BMW X7 trở nên trực quan và thoải mái hơn. Điều khiển trợ lý cá nhân thông minh bằng giọng nói dễ dàng hơn giúp bạn tận hưởng niềm vui lái xe một cách tuyệt đối.
                </div>
              </div>
            </div>

            <div class="suitablex7">
              <h1 class="tienichx7">SỰ THOẢI MÁI TỐI ĐA TỪ BMW X7.</h1>
              
              <div id="congnghex7">
                <div class="noibatx7">
                  <img src="../image/7chox7.webp" />
                  <div class="textx7">
                    <h1>7 chỗ ngồi thoải mái cho mọi chuyến đi.</h1>
                    <p>
                      BMW X7 cung cấp đến 7 chỗ ngồi thoải mái, mang lại không gian rộng rãi và tiện nghi cho mọi chuyến đi.
                    </p>
                  </div>
                </div>
                <div class="noibatx7">
                  <img src="../image/doxex7.webp" />
                  <div class="textx7">
                    <h1>Hỗ trợ đỗ xe Parking Assistant.</h1>
                    <p>
                      Trợ lý đỗ xe Parking Assistant của BMW X7 hỗ trợ đỗ xe tự động và chính xác. Với các cảm biến và camera hiện đại, hệ thống giúp bạn đỗ xe dễ dàng trong mọi không gian chật hẹp, mang lại sự tiện lợi và an toàn tối đa.
                    </p>
                  </div>
                </div>
                <div class="noibatx7">
                  <img src="../image/headupx7.webp" />
                  <div class="textx7">
                    <h1>BMW Head-Up Display.</h1>
                    <p>
                      BMW Head-Up Display là một công nghệ tiên tiến được tích hợp trên các dòng xe BMW, bao gồm cả BMW X7. Chức năng này cho phép hiển thị các thông tin quan trọng trực tiếp trên kính chắn gió, ngay trong tầm nhìn của người lái. Nhờ đó, người lái có thể dễ dàng theo dõi các thông số như tốc độ, hướng dẫn dẫn đường, thông tin giải trí và cảnh báo an toàn mà không cần rời mắt khỏi đường.
                </div>
                
                
              </div>
              <div class="noithatx7">
                <div class="motaax7">
                  <img src="../image/noithatx7.webp" />
                  <div class="textx7">
                    <h1>Cửa sổ trời Panorama Sky Lounge.</h1>
                    <p>
                      Cửa sổ trời Panorama Sky Lounge mang ánh sáng tự nhiên tràn ngập vào không gian nội thất trong suốt cả ngày. Vào ban đêm, hệ thống tạo bữa tiệc thị giác độc đáo với hiệu ứng ánh sáng sống động, mang lại trải nghiệm sang trọng và tinh tế cho mọi hành trình.
                    </p>
                  </div>
                </div>
                <div class="motaax7">
                  <img src="../image/hangghesaux7.webp" />
                  <div class="textx7">
                    <h1>Hệ thống âm thanh Bowers & Wilkins Diamond.</h1>
                    <p>
                      Hệ thống âm thanh Bowers & Wilkins Diamond với âm thanh vòm 3D cho công suất 1.475 W, mang lại chất âm tuyệt vời cho hành trình của bạn thêm sinh động.
                    </p>
                  </div>
                </div>
              </div> 
            <div id="tsktx7"><h1>THÔNG SỐ KĨ THUẬT CỦA THE NEW BMW X7.</h1>
            <h5>BMW X7 xDrive40i.</h5>
            <img src="../image/thốngkithuatx7.webp" >
          </div> 
          <div>
            <table style="margin-left: 730px;" class="bangkithuatx7">
              <tr>
                <td>Công suất động cơ kW (hp) tại vòng/ phút </td>
                <td class="chuthichx7">280 (381)/5,200-6,250 </td>
              </tr>
              <tr>
                <td>Vân tốc tối đa (km/h) :</td>
                <td class="chuthichx7">250
                </td>
              </tr>
              <tr>
                <td>Thời gian tăng tốc từ 0-100km/h (s)</td>
                <td class="chuthichx7 ">5.7–5.5</td>
              </tr>
              <tr>
                <td>Lượng nhiên liệu tiêu thụ kết hợp (l/100km) (theo tiêu chuẩn WLTP)</td>
                <td class="chuthichx7">13.33</td>
              </tr>
              <tr>
                <td>Lượng phát thải CO2 kết hợp (g/km) (WLTP):</td>
                <td class="chuthichx7">206</td>
              </tr>
            </table>
          </div>
          <div class="docthemx7"><a href="https://drive.google.com/file/d/1_SteL3e1zgCwz_gqqxs1Rz9Lk9zjRcO3/view">Learn  more</a> </div>
          <div id="tc"><h1>CHÍNH SÁCH TÀI CHÍNH CHO BMW X7.</h1>
            <p>BNW thiết kế các chính sách tài chính để điều chỉnh riêng để phù hợp với nhu cầu và mong muốn của bạn</p>
            <img src="../image/taichinhx7.webp">
          </div> 
          <div id="tieuhaonhienlieux7">
            <h1>MỨC TIÊU HAO NHIÊU LIỆU VÀ MỨC PHÁT THẢI CO2</h1>
            <h5>BMW X7 xDrive40i:</h5>
            <ul>
              <li>Tiêu thụ nhiên liệu kết hợp (l/100 km): 11.04 - 12.07</li>
              <li>Khí thải CO2 kết hợp (g/km): 255.04 - 278.82</li>
            </ul>
            <p>Các số liệu chính thức về tiêu thụ nhiên liệu, khí thải CO2, tiêu thụ điện và phạm vi hoạt động điện được xác định theo quy trình đo lường quy định và tuân thủ Quy định (EU) 715/2007 đã được sửa đổi. Các số liệu WLTP tính đến thiết bị tùy chọn trong trường hợp các phạm vi. Đối với các xe mới được phê duyệt kể từ ngày 01.01.2021, các thông số kỹ thuật chính thức chỉ tồn tại theo WLTP. Thông tin thêm về các phương pháp đo lường NEDC và WLTP có thể được tìm thấy tại <a href="https://www.bmw.de/de/mehr-bmw/bmw-efficientdynamics/pkw-envkv.html" target="_blank"> www.bmw.de/wltp</a> .</p>
            <p>(*) Tất cả hình ảnh và video có thể khác so với phiên bản thực tế. Liên hệ showroom gần nhất để được tư vấn giá xe và phiên bản theo nhu cầu của bạn.</p>
          </div>
          <div class="showroomx7"><a>Liên hệ showroom gần nhất</a></div>   
        </div>
    </div>
  </body>
</html>
