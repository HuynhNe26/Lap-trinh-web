<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <style>
        .dangnhap {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 400px;
            max-width: 90%;
            text-align: center;
            margin: auto;
        }
        .dangnhap h2 { 
            color: #333; 
            margin-bottom: 20px; 
        }
        .dangnhap-form { 
            margin-bottom: 15px; 
            text-align: left; 
        }
        .dangnhap-form-group label { 
            display: block; 
            font-weight: bold; 
            color: #555; 
            margin-bottom: 5px; 
            margin-top: 10px; 
        }
        .dangnhap-form-group input { 
            width: 100%; 
            padding: 10px; 
            border: 1px solid #ddd; 
            border-radius: 4px; 
        }
        .dangnhap-form-group button { 
            width: 100%; 
            padding: 10px; 
            background-color: #007bff; 
            color: white; 
            font-weight: bold; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            margin-top: 10px; 
        }
        .dangnhap-form-group button:hover { 
            background-color: #0056b3; 
        }
    </style>
</head>
<body>

<div class="dangnhap">
    <h2>Đăng Nhập</h2>
    <form class="dangnhap-form" method="POST" action="">
        <div class="dangnhap-form-group">
            <label for="username">Tên Đăng Nhập:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="dangnhap-form-group">
            <label for="password">Mật Khẩu:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="dangnhap-form-group">
            <button type="submit" name="login">Đăng Nhập</button>
            <button>
                <a style="text-decoration:none; color:white" href="index.php?pid=5">Đăng kí</a>
            </button>
        </div>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kết nối đến cơ sở dữ liệu
    $link = new mysqli("localhost", "root", "", "bmw_khachhang");

    // Kiểm tra kết nối
    if ($link->connect_error) {
        die("Kết nối thất bại: " . $link->connect_error);
    }

    // Kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM member_user WHERE tendangnhap = ?";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Xác thực mật khẩu
        if (password_verify($password, $user['matkhau'])) {
            $_SESSION['username'] = $user['hovaten']; // Lưu tên vào session
            $_SESSION['login_success'] = "Đăng nhập thành công"; // Lưu thông báo
            header("Location:index.php"); // Chuyển hướng đến trang index
            exit();
            // Chuyển hướng hoặc xử lý khi đăng nhập thành công
        } else {
            echo "<p style='color: red;'>Mật khẩu không chính xác!</p>";
        }
    } else {
        echo "<p style='color: red;'>Tên đăng nhập không tồn tại!</p>";
    }

    $stmt->close();
    $link->close();
}
?>

</body>
</html>
