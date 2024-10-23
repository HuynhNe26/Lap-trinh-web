<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BMWXM | BMW VIỆT NAM</title>
    <style>
      html{
        scroll-behavior: smooth; 
      }
      body {
  margin: 0;
  padding: 0;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  box-sizing: border-box;
  width: 100%;
  max-width: 100vw;
  overflow-x: hidden;
  font-size: 20px;
}

img {
  max-width: 100%;
  height: auto;
  display: block;
}

#headerxm {
  background-image: url(./image-BMWXM/anhtiiedexm.webp);
  background-repeat: no-repeat;
  background-position: center top;
  background-size: cover;
  height: 100vh;
  margin-top: 70px;
}
#headerxm h2 {
  margin-top: 50px;
  margin-left: 30px;
  color: white;
  font-size: 50px;
  font-family: Arial, Helvetica, sans-serif;
}
#headerxm h3 {
  margin-left: 34px;
  margin-bottom: 150px;
  color: white;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 30px;
}
#headerxm #tuvanxm {
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
#headerxm #tuvanxm {
  font-size: 20px;
  padding: 10px 70px 10px;
  background-color: rgb(0, 140, 255);
  color: white;
  margin-left: 52px;
  text-decoration: none;
  width: 100px;
  font-family: Arial, Helvetica, sans-serif;
}
#headerxm #tuvanxm:hover {
  background-color: blue;
  font-weight: bold;
}
#headerxm table {
  font-size: 18px;
  margin-top: 300px;
  color: white;
  margin-left: 82px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  padding-bottom: 80px;
}
#headerxm td {
  padding-right: 100px;
}
#gioithieuxm {
  padding-top: 100px;
  padding-left: 40px;
  font-size: 20px;
}
.decorationxm {
  font-size: 20px;
  font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
  margin-top: -25px;
}
#thietkexm {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.784);
  padding-left: 50px;
  padding-right: 80px;
}
#thietkexm:hover {
  color: rgb(0, 0, 0);
  font-weight: bold;
  transition: linear;
}
#thietkexm:after {
  position: absolute;
  left: 0;
  right: 0;
  background-color: blue;
  z-index: 1;
}
#tsktxm1 {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.74);
  padding-right: 80px;
}
#tsktxm1:hover {
  color: black;
  font-weight: bold;
}
.gtxm {
  margin-left: 30px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 18px;
}
#chitietxm {
  padding: 10px 40px 10px;
  background-color: rgb(0, 94, 255);
  margin-right: 70px;
  color: white;
  text-decoration: none;
  float: right;
  margin-top: -30px;
}
#chitietxm:hover {
  background-color: blue;
}
#phutungxm {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.74);
  padding-right: 80px;
}
#phutungxm:hover {
  color: black;
  font-weight: bold;
}
#taichinhxm {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.74);
  padding-right: 50px;
}
#taichinhxm:hover {
  color: black;
  font-weight: bold;
}
.anhphu {
  margin-top: 50px;
  display: grid;
  place-items: center;
}
.khaiquat {
  margin-top: 30px;
  font-size: 20px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 200;
  margin-left: 20px;
}

.thuthachxm {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  color: black;
  font-weight: 500;
  margin-left: 30px;
  margin-top: 100px;
  font-size: 40px;
}
.textxm h1 {
  font-size: 30px;
  font-weight: 200;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
#trainghiemxm {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 20px;
  box-sizing: border-box;
  padding-right: 40px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
.motaxm {
  width: 30%;
  margin-bottom: 20px;
  text-align: justify;
}
.textxm h1 {
  font-size: 30px;
  font-weight: 200;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
.textxm p {
  font-size: 20px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 200;
  text-align: justify;
}
.motaaxm {
  width: 45%;
  margin-bottom: 20px;
  text-align: center;
  padding-right: 30px;
}
.noithatxm {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 30px;
  box-sizing: border-box;
}
.phancuoi {
  margin-left: 400px;
}
.phancuoi h1 {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 25px;
  font-weight: 200;
}
.antuong h1 {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  color: black;
  font-weight: 500;
  margin-left: 0px;
  margin-top: 100px;
}
.antuong p {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  color: black;
  font-weight: 200;
  margin-left: 0px;
  font-size: 20px;
}

#antuongnoibatxm {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 20px;
  box-sizing: border-box;
  padding-right: 40px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  margin-top: 50px;
}
.motaxm {
  width: 30%;
  margin-bottom: 20px;
  text-align: justify;
}
.textxm p {
  font-size: 20px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 200;
  text-align: justify;
}
.bangkithuatxm {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 20px;
  font-weight: 300;
  margin-right: 0px;
  border-collapse: collapse;
  display: table-cell;
  margin-top: -100px;
}

.chuthichxm {
  font-weight: bold;
  text-align: center;
}
.bangkithuatxm td {
  padding-top: 25px;
  vertical-align: middle;
  color: black;
}
.bangkithuatxm tr {
  border-bottom: 1px solid black;
  border-width: thin;
  color: black;
}
.tuvanxm {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 300;
  font-size: 20px;
}
.tuvanchitiet {
  padding-left: 40px;
  padding-right: 40px;
  padding-top: 10px;
  padding-bottom: 10px;
  float: left;
  margin-left: 50px;
  background-color: rgb(0, 153, 255);
  color: black;
  font-weight: 700;
  text-decoration: none;
  margin-bottom: 100px;
  margin-top: 30px;
}
.tuvanchitiet:hover {
  background-color: blue;
  font-weight: bold;
}

    </style>
    
  </head>
  <body>
    <div id="headerxm">
        <div id="gioithieuxm">
          <h2>THE XM</h2>
          <h3>BMW XM THẾ HỆ ĐẦU TIÊN</h3>
        </div>
        <a id="tuvanxm" href="../src_php/lienhe.php">Tư vấn chi tiết</a>
        <a id="tuvanxm" href="./src_php/dangkilt.php">Đăng kí lái thử</a>
        <table>
          <tr>
            <td>Giá từ</td>
            <td>Nhiên liệu</td>
          </tr>
          <tr>
            <td>10.999.000.000 VNĐ</td>
            <td>Xăng • Plug-in Hybrid</td>
          </tr>
        </table>
        <div class="decorationxm">
            <a id="thietkexm" href="#Footerxm">Thiết kế</a>
            <a id="tsktxm1" href="#tsktxm">Thông số kĩ thuật</a>
            <a id="taichinhxm" href="Footerxm">Tài chính</a>
            <a id="phutungxm" href="Footerxm">Dịch vụ phụ tùng</a>
            <a
              id="chitietxm"
              href="https://drive.google.com/file/d/1fwIk0HqL22SFhNVqE3ye0xF4wiJNxXPq/view"
              >Thông số kĩ thuât</a
            >
         </div>
        <br />
        <hr />
        <div class="anhphu"> <img src="./image-BMWXM/anhphuxm.jpg"></div>
        <div class="khaiquat">
            <h1 style="margin-bottom: 50px; font-weight: 200;">BMW XM THẾ HỆ ĐẦU TIÊN.</h1>
            <p>BMW XM mới kết hợp vẻ ngoài ấn tượng với hiệu suất cao của BMW M và công nghệ plug-in hybrid mạnh mẽ của thế hệ mới nhất.</p>
        </div>
        <div id="Footerxm">
            <div class="phanthietkexm">
            <h1 class="thuthachxm">TRẢI NGHIỆM CẢM GIÁC LÁI MẠNH MẼ CÙNG BMW XM.</h1>
            <div id="trainghiemxm">
                <div class="motaxm">
                  <img src="./image-BMWXM/dongcov8xm.webp" />
                  <div class="textxm">
                    <h1>Động cơ V8 M TwinPower Turbo danh tiếng.</h1>
                    <p>
                        Động cơ V8 M TwinPower Turbo danh tiếng dành riêng cho dòng xe BMW M kết hợp cùng mô tơ điện tích hợp vào hộp số M Steptronic 8 sản sinh công suất cực đại 653 hp cùng mômen xoắn cực đại 800 Nm mang đến sức mạnh vượt trội và sự phấn khích khi cầm lái mẫu xe BMW XM thế hệ đầu tiên.
                    </p>
                  </div>
                </div>
                <div class="motaxm">
                  <img src="./image-BMWXM/hethongtreoxm.webp" />
                  <div class="textxm">
                    <h1>Hệ thống treo thích ứng M Professional.</h1>
                    <p>
                        Hệ thống treo thích ứng M Professional gây ấn tượng với khả năng xử lý thể thao mà không ảnh hưởng đến sự thoải mái. Hệ thống lái chủ động tích hợp giúp ổn định xe ở tốc độ cao hơn và đồng thời giảm bán kính quay vòng. Bộ ổn định chủ động làm giảm chuyển động cơ thể từ bên này sang bên kia, cải thiện động lực lái xe và sự thoải mái.
                    </p>
                  </div>
                </div>
                <div class="motaxm">
                  <img src="./image-BMWXM/bovisaixm.webp" />
                  <div class="textxm">
                    <h1>Bộ vi sai M Sport.</h1>
                    <p>
                        Bộ vi sai M Sport gia tăng hiệu suất tốt nhất có thể cho mẫu BMW XM thế hệ đầu tiên. Nó phân bổ lực truyền động giữa các bánh sau một cách linh hoạt, nhờ đó cải thiện độ bám đường và độ ổn định khi lái trong nhiều tình huống khác nhau – dù là khi tăng tốc ngoài các khúc cua, ở tốc độ vào cua cao hoặc với các điều kiện đường khác nhau.
                    </p>
                  </div>
                </div>
            <h1 style="margin-left: 20px;" class="thuthachxm">KHÔNG GIAN NỘI THẤT SANG TRỌNG TRÊN MẪU XE BMW XM.</h1>
            <div class="noithatxm">
                <div class="motaaxm">
                    <img src="./image-BMWXM/khoanglaixm.webp" />
                    <div class="textxm">
                      <h1>Khoang lái hiện đại, độc đáo.</h1>
                      <p>
                        Phong cách độc đáo của thiết kế ngoại thất trên mẫu BMW XM thế hệ đầu tiên tiếp tục được thể hiện trong không gian nội thất của xe. Buồng lái và ghế trước được thiết kế hướng hoàn toàn đến trải nghiệm lái. Các chi tiết trên bảng điều khiển, đồng hồ, ghế ngồi và cả các chất liệu ốp của bề mặt nội thất điều tạo nên được cảm giác mạnh mẽ của dòng xe BMW M.
                      </p>
                    </div>
                </div>
                <div class="motaaxm">
                    <img src="./image-BMWXM/noithatdaxm.webp" />
                    <div class="textxm">
                      <h1>Nội thất da sang trọng.</h1>
                      <p>
                        BMW XM thế hệ đầu tiên sở hữu nội thất da sử dụng các phương pháp xử lý và sàng lọc độc quyền tạo nên những điểm nhấn trang nhã, cổ điển và đầy mê hoặc.
                      </p>
                    </div>
                </div>
                <div class="motaaxm">
                    <img src="./image-BMWXM/amthanhxm.webp" />
                    <div class="textxm">
                      <h1>Hệ thống âm thanh vòm Bowers & Wilkins Diamond.</h1>
                      <p>
                        The first-generation BMW XM features the Bowers & Wilkins Diamond Surround Sound System with a 1,475-watt amplifier, providing a vibrant musical experience for the interior space
                      </p>
                    </div>
                </div>
                <div class="motaaxm">
                    <img src="./image-BMWXM/cummanhinhxm.webp" />
                    <div class="textxm">
                      <h1>Cụm màn hình cong tràn viền BMW Curved Display.</h1>
                      <p>
                        Cụm màn hình cong tràn viền BMW Curved Display kết hợp từ màn hình đa thông tin 12.3" và Màn hình điều khiển trung tâm 14.9" cảm ứng được tối ưu hóa về mặt công thái học và mang đến sự tích hợp đầy phong cách và hiện đại cho người sử dụng.
                      </p>
                    </div>
                </div>
                <div class="phancuoi">
                    <img class="anhphancuoi" src="./image-BMWXM/khoanghanhlixm.webp">
                    <h1>Khoang hành hành lý.</h1>
                </div>
                <div class="antuong">
                  <h1>BMW XM – ẤN TƯỢNG ĐẦU TIÊN.</h1>
                  <p>Ngôn ngữ thiết kế tự tin và nội thất ấn tượng – BMW XM mới kết hợp sự sang trọng với hiệu suất cao và điện khí hóa.</p>
                </div>
                
                <div id="antuongnoibatxm">
                  <div class="motaxm">
                    <img src="./image-BMWXM/ngoaihinh.webp" />
                    <div class="textxm">
                        <p>
                          Ngoại hình dáng xe coupe đặc trưng: dải nhấn màu Vàng Night Gold gợi nhớ đến BMW M1.
                      </p>
                    </div>
                  </div>
                  <div class="motaxm">
                    <img src="./image-BMWXM/napcapoxm.webp" />
                    <div class="textxm">
                      <p>
                        Thiết kế bề mặt ấn tượng với nắp ca-pô kéo dài, cấu trúc mạnh mẽ.
                      </p>
                    </div>
                  </div>
                  <div class="motaxm">
                    <img src="./image-BMWXM/luoitanxm.webp" />
                    <div class="textxm">
                      <p>
                        Nắp ca-pô nối liền với lưới tản nhiệt hình quả thận đặc trưng và kéo dài các đường nét tinh xảo.
                      </p>
                    </div>
                  </div>
                  <div class="motaxm">
                    <img src="./image-BMWXM/dauxexm.webp" />
                    <div class="textxm">
                      <h1>Thiết kế mới phần đầu xe.</h1>
                      <p>
                        Mẫu xe BMW XM thế hệ đầu tiên sở hữu thiết kế thể thao và không thể nhầm lẫn với lưới tản nhiệt hình quả thận đặc trưng được tạo hình bát giác phá cách kết hợp cùng logo BMW XM và hiệu ứng phát sáng “Iconic Glow” là điểm nhấn đặc biệt của những chiếc xe thể thao dòng BMW M nổi tiếng. Cụm đèn chiếu sáng Adaptive LED trên BMW XM được chia thành hai khu vực riêng biệt – đèn định vị và đèn báo rẽ được tích hợp vào các bóng siêu mỏng, trong khi đèn chiếu gần và đèn pha được bồ trí tách biệt ở ngay phía dưới, tạo điểm nhấn đặc trưng khi di chuyển.
                      </p>
                    </div>
                  </div>
                  <div class="motaxm">
                    <img src="./image-BMWXM/thanxexm.webp" />
                    <div class="textxm">
                      <h1>Thiết kế thân xe.</h1>
                      <p>
                        Thân xe của mẫu BMW XM đầu tiên mang phong cách thiết kế mới với một dải viền trang trí màu vàng Night Gold hoặc đen bóng chạy dọc thân xe, lấy cảm hứng từ mẫu xe BMW M1. Khí chất thể thao của BMW XM càng được thể hiện bởi thiết kế cửa sổ được vuốt thon dần về phía cột D kết hợp cùng kính chắn gió có độ dốc lớn và đường mái dài vuốt xuống mượt mà, nhấn mạnh vào hình dáng với kích thước tổng thể lên đến 5.110 x 2.005 x 1.755 mm vừa tạo nên tổng thể xe hài hoà, vừa đảm bảo tính linh hoạt và trải nghiệm vận hành thể thao.
                      </p>
                    </div>
                  </div>
                  <div class="motaxm">
                    <img src="./image-BMWXM/duoixexm.webp" />
                    <div class="textxm">
                      <h1>Thiết kế mới đuôi xe.</h1>
                      <p>
                        Đuôi xe của mẫu BMW XM đầu tiên nổi bật với cụm đèn hậu hoạ tiết L được cách điệu, thiết kế dạng 3D nổi bắt mắt tạo thành ba dải đèn chéo ở hai mang phong cách logo BMW M GmbH hiện lên nổi bật khi sáng đèn. Đặc biệt, BMW XM được trang bị kính cửa sổ phía sau ốp tràn viền với logo thương hiệu BMW được in trực tiếp lên mặt kính kết hợp với mâm hợp kim nhẹ 22 inch, ốp vòm bánh xe thể thao màu đen bóng độc đáo cùng các đường gấp khúc tạo cho tổng thể đuôi xe thêm to lớn và bệ vệ.
                      </p>
                    </div>
                  </div>
                  <div style="margin-top: 100px;" class="motaxm">
                    <img src="./image-BMWXM/tranxexm.webp" />
                    <div class="textxm">
                      <h1>Trần xe bọc da Alcantara cùng hệ thống chiếu sáng Ambient Light đầy ấn tượng.</h1>
                      <p>
                        Trần xe bọc da Alcantara cùng hệ thống chiếu sáng Ambient Light gây ấn tượng với cấu trúc lăng kính ba chiều mang đến cho hành khách không gian vô cùng sang trọng và duy nhất trên mẫu xe BMW XM thế hệ đầu tiên.
                      </p>
                    </div>
                  </div>
                  <div style="margin-top: 100px;" class="motaxm">
                    <img src="./image-BMWXM/gheMxm.webp" />
                    <div class="textxm">
                      <h1>Không gian ghế sau M Lounge tạo cảm giác rộng rãi thoải mái.</h1>
                      <p>
                        Ở khoang hành khách, trên BMW XM thế hệ đầu tiên tạo cảm giác rộng rãi và thoải mái luôn được đáp ứng với thiết kế M Lounge độc quyền với các họa tiết đường khâu viền kim cương ba chiều ở tựa đầu và các ốp cửa mang lại sự thoải mái và sang trọng.
                      </p>
                    </div>
                  </div>
                  <div style="margin-top: 100px;" class="motaxm">
                    <img src="./image-BMWXM/khoanghanhlixm.webp" />
                    <div class="textxm">
                      <h1>Khoang hành lý.</h1>
                      <p>
                        Khoang hành hành lý rộng rãi của mẫu xe BMW XM thế hệ đầu tiên có dung tích lên đến 1820 L, trang bị bộ sạc tiêu chuẩn Flexible Charger mang đến sự tiện dụng cho chủ sở hữu.
                      </p>
                    </div>
                  </div>
                <div class="antuong">
                  <h1>TIỆN NGHI TRANG BỊ BỔ SUNG CHO BMW XM.</h1>
                  <p>Với Phụ kiện BMW chính hãng, bạn có thể điều chỉnh chiếc BMW của mình theo mong muốn cá nhân: các sản phẩm hoàn toàn phù hợp với BMW XM về chất lượng, thiết kế và hiệu suất.</p>
                </div>
                <div style="margin-top: 50px;" class="noithatxm">
                  <div class="motaaxm">
                      <img src="./image-BMWXM/3.0proxm.webp" />
                      <div class="textxm">
                        <h1>BMW Advanced Car Eye 3.0 Pro.</h1>
                        <p style="margin-bottom: 30px;">
                          BMW Advanced Car Eye 3.0 Pro bao gồm các camera QHD và Full HD chất lượng cao, giám sát những gì xảy ra ở phía trước và phía sau xe ngay cả khi xe đang đỗ. Nếu hệ thống phát hiện rung động và chuyển động bất thường bên ngoài xe, nó sẽ tự động lưu lại sự kiện để ghi lại các tai nạn có thể xảy ra hoặc các vụ (cố gắng) xâm nhập.
                        </p>
                      </div>
                  </div>
                  <div class="motaaxm">
                      <img src="./image-BMWXM/giadoxm.webp" />
                      <div class="textxm">
                        <h1>Giá đỡ máy tính bảng BMW Pro.</h1>
                        <p>
                          Giá đỡ an toàn cho máy tính bảng với ốp bảo vệ BMW (bao bảo vệ). Giá đỡ có thể điều chỉnh đến nhiều vị trí và góc độ khác nhau, được gắn vào thiết bị "Travel & Comfort".
                        </p>
                      </div>
                  </div>
                  <div class="motaxm">
                    <img src="./image-BMWXM/hybridxm.webp" />
                    <div class="textxm">
                      <h1>M Hybrid.</h1>
                      <p>
                        Chuyển đổi giữa chế độ lái hoàn toàn bằng điện và chế độ hybrid chỉ với một nút bấm, nhờ sự tương tác giữa động cơ điện và động cơ V8 mạnh mẽ. Đồng thời, các chế độ lái thông minh tối ưu hóa trải nghiệm lái xe.
                      </p>
                    </div>
                  </div>
                  <div class="motaxm">
                    <img src="./image-BMWXM/quangduongxm.webp" />
                    <div class="textxm">
                      <h1>Quãng đường lên đến 82–88 km với BMW XM mới.</h1>
                      <p>
                        Hệ thống BMW eDrive hiệu quả với công suất 145 kW (197 mã lực) cho phép phạm vi lái xe hoàn toàn bằng điện từ 82–88 km theo tiêu chuẩn WLTP. Điều này có nghĩa là bạn có thể di chuyển gần như im lặng và không có khí thải cục bộ.
                      </p>
                    </div>
                  </div>
                  <div class="motaxm">
                    <img src="./image-BMWXM/wallboxm.webp" />
                    <div class="textxm">
                      <h1>BMW Wallbox.</h1>
                      <p>
                        Mỗi chiếc BMW XM đều đi kèm với gói sạc tại nhà miễn phí, bao gồm BMW wallbox và dịch vụ lắp đặt.
                      </p>
                    </div>
                  </div>
                </div>
            </div>
          <div id="tsktxm"><h1>THÔNG SỐ KĨ THUẬT CỦA THE NEW BMW X7.</h1>
            <img src="./image-BMWXM/tsktxm.webp">
          </div>
          <div style="float: left;">
            <table style="margin-left: 730px;" class="bangkithuatxm">
              <tr>
                <td>Công suất động cơ kW (hp) tại vòng/ phút </td>
                <td class="chuthichxm">480 (653) </td>
              </tr>
              <tr>
                <td>Tăng tốc từ 0–100 km/h trong giây</td>
                <td class="chuthichxm">4.3
                </td>
              </tr>
              <tr>
                <td>Mức tiêu thụ nhiên liệu, theo tiêu chuẩn WLTP trong l/100 km:</td>
                <td class="chuthichxm">1.6–1.5</td>
              </tr>
              <tr>
                <td>Lượng khí thải CO2, kết hợp, theo tiêu chuẩn WLTP trong g/km:</td>
                <td class="chuthichxm">36–33</td>
              </tr>
            </table>
          <div>
            <h1 style="font-weight: bold;">Dịch vụ và Tư vấn cho THE NEW BMW XM.</h1>
            <img src="./image-BMWXM/tuvanxm.webp">
            <h1 style="font-weight: 300;font-size: 25px;">PROACTIVE CARE CHO THE FIRST-EVER BMW XM.</h1>
            <p style="font-weight: 300;font-size: 20px;">Proactive Care tự động nhận biết bất kỳ hoạt động bảo dưỡng hoặc sửa chữa nào sắp tới cho xe của bạn và chủ động liên hệ với bạn.</p>
            <u style="font-weight: 300;font-size: 20px; text-decoration: none;">
              <li>Trợ giúp trực tiếp từ các chuyên gia BMW</li>
              <li>Giải quyết vấn đề thông qua bảo trì từ xa</li>
              <li>Tránh các sự cố tiềm ẩn</li>
              <li>Các dịch vụ bổ sung cá nhân khác</li>
              <li>Miễn phí như một phần của hợp đồng ConnectedDrive đang hoạt động</li>
            </u>
          </div>
          <div class="tuvanxm">
            <h1>BẠN CÓ NHU CẦU TƯ VẤN CÁ NHÂN?</h1>
            <p>Nếu bạn có bất kỳ thắc mắc nào, yêu cầu cung cấp thêm thông tin hoặc muốn tìm hiểu thêm về các ưu đãi cụ thể cho mẫu xe BMW XM, vui lòng liên hệ với đại lý BMW gần bạn. Đội ngũ nhân viên BMW của chúng tôi luôn sẵn lòng tư vấn cho bạn qua điện thoại hoặc tư vấn trực tiếp tại showroom.</p>
            <img src="./image-BMWXM/tuvan1xm.webp">
            <a class="tuvanchitiet" href="../src_php/lienhe.php">Tư vấn chi tiết</a>
          </div>
          <div style="float: left;"><p style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 300;">(*) Tất cả hình ảnh và video có thể khác so với phiên bản thực tế. Liên hệ showroom gần nhất để được tư vấn giá xe và phiên bản theo nhu cầu của bạn.</p></div> 
          </div>
        </div>
  </body>
</html>

