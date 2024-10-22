<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Liên hệ với chúng tôi để biết thêm thông tin.">
    <title>Liên hệ với chúng tôi</title>
    <!-- Kết nối với file CSS để định dạng giao diện -->
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="stylesheet" href="../css/fontawesome-free-6.6.0/css/all.min.css">
    <script src="js/main.js" defer></script> <!-- Thêm defer để tải JavaScript sau khi HTML đã được tải -->
    <style>
        /* Định dạng cơ bản cho toàn bộ trang */
/* Định dạng tổng thể cho body */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
}

/* Định dạng cho khung form */
.formlienhe {
    max-width: 600px;
    margin: 5px auto 0px auto;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Định dạng tiêu đề */
h1 {
    text-align: center;
    color: #007bff;
}

/* Định dạng các thẻ label */
label {
    font-weight: bold;
    display: block;
    margin-top: 10px;
}

/* Định dạng input và textarea */
.dulieu-vao {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Định dạng cho nút submit */
.nut-xacnhan {
    margin-top: 20px;
    padding: 10px 15px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.nut-xacnhan:hover {
    background-color: #0056b3; /* Màu khi hover */
}
    </style>
</head>
<body class="bodylienhe">

<div class="formlienhe">
    <h1>LIÊN HỆ VỚI CHÚNG TÔI</h1>
    <form class="form-lienhe" method="post" action="index.php?pid=3">  
        <fieldset>
            <legend>Thông tin cá nhân</legend>
            
            <label>Danh xưng:</label>
            <select class="dulieu-vao" name="gioitinh" required>
                <option value="">Vui lòng chọn</option>
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
                <option value="Khác">Khác</option>
            </select>
            <br><br>
            
            <label for="name">Họ tên:</label>
            <input type="text" id="name" name="name" class="dulieu-vao" required>
            <br><br>
            
            <label for="number">SĐT:</label>
            <input type="number" id="SDT" name="SĐT" class="dulieu-vao" required>
            <br><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" class="dulieu-vao" required>
            <br><br>
            
            <label for="comment">Ghi chú:</label>
            <textarea id="comment" name="comment" class="dulieu-vao" rows="5" cols="40"></textarea>
            <br><br>
            
            <input type="submit" class="nut-xacnhan" name="submit" value="Gửi liên hệ">
        </fieldset>
    </form>
</div>

</body>
</html>
