<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký Thành Viên</title>
    <style>
        .dangki { 
            background-color: white; 
            padding: 20px; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
            width: 400px; 
            max-width: 90%; 
            text-align: center; 
            margin: auto;
        }

        .dangki h2 { 
            color: #333; 
            margin-bottom: 20px; 
        }

        .dangki-form { 
            margin-bottom: 15px; 
            text-align: left; 
        }

        .dangki-form label { 
            display: block; 
            font-weight: bold; 
            color: #555; 
            margin-bottom: 5px; 
            margin-top: 10px; 
        }

        .dangki-form input, 
        .dangki-form textarea, 
        .dangki-form select { 
            width: 100%; 
            padding: 10px; 
            border: 1px solid #ddd; 
            border-radius: 4px; 
        }

        .dangki-form button { 
            width: 100%; 
            padding: 10px; 
            background-color: #28a745; 
            color: white; 
            font-weight: bold; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            margin-top: 10px; 
        }

        .dangki-form button:hover { 
            background-color: #218838; 
        }
    </style>
</head>
<body>

<div class="dangki">
    <h2>Đăng Ký Thành Viên</h2>
    <form class="dangki-form" method="POST" action="">
        <div class="dangki-form">
            <label for="username">Tên Đăng Nhập:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="dangki-form">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="dangki-form">
            <label for="password">Mật Khẩu:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="dangki-form">
            <label for="name">Họ và tên:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="dangki-form">
            <label for="date">Ngày sinh:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div class="dangki-form">
            <label for="gioitinh">Giới tính:</label>
            <select id="gioitinh" name="gioitinh" required>
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
                <option value="Khác">Khác</option>
            </select>
        </div>
        <div class="dangki-form">
            <label for="address">Địa chỉ:</label>
            <textarea id="address" name="address" placeholder="Vui lòng nhập rõ địa chỉ chính xác để giao hàng chính xác" required></textarea>
        </div>
        <div class="dangki-form">
            <label for="phone">Số điện thoại:</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <div class="dangki-form">
            <button type="submit" name="register">Đăng Ký</button>
        </div>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $gioitinh = $_POST['gioitinh'];
    $address = $_POST['address'];
    $phone = $_POST['phone']; 
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    // Kết nối với cơ sở dữ liệu
    $link = new mysqli("localhost", "root", "", "bmw_khachhang");

    if ($link->connect_error) {
        die("Kết nối thất bại: " . $link->connect_error);
    }

   
    $checkQuery = "SELECT * FROM member_user WHERE tendangnhap = ? OR email = ?";
    $stmt = $link->prepare($checkQuery);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<p style='color: red;'>Tên đăng nhập hoặc email đã tồn tại!</p>";
    } else {
        
        $sql = "INSERT INTO member_user (tendangnhap, matkhau, hovaten, email, ngaysinh, gioitinh, diachi, sodienthoai) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $link->prepare($sql);
        $stmt->bind_param("ssssssss", $username, $password, $name, $email, $date, $gioitinh, $address, $phone);

        if ($stmt->execute()) {
            echo "<p style='color: green;'>Đăng ký thành công! Bạn sẽ được chuyển đến trang đăng nhập.</p>";
            header("Location: index.php?pid=6"); 
            exit();
        } else {
            echo "<p style='color: red;'>Lỗi: " . $stmt->error . "</p>";
        }
    }

    $stmt->close();
    $link->close();
}
?>

</body>
</html>
