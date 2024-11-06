composer require phpmailer/phpmailer

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên Mật Khẩu</title>
    <style>
        .quenmatkhau { 
            background-color: white; 
            padding: 20px; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
            width: 400px; 
            max-width: 90%; 
            text-align: center; 
            margin: auto; 
        }

        .quenmatkhau h2 { 
            color: #333; 
            margin-bottom: 20px; 
        }

        .quenmatkhau-form { 
            margin-bottom: 15px; 
            text-align: left; 
        }

        .quenmatkhau-form label { 
            display: block; 
            font-weight: bold; 
            color: #555; 
            margin-bottom: 5px; 
            margin-top: 10px; 
        }

        .quenmatkhau-form input { 
            width: 100%; 
            padding: 10px; 
            border: 1px solid #ddd; 
            border-radius: 4px; 
        }

        .quenmatkhau-form button { 
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

        .quenmatkhau-form button:hover { 
            background-color: #218838; 
        }
    </style>
</head>
<body>

<div class="quenmatkhau">
    <h2>Quên Mật Khẩu</h2>
    <form method="POST" action="">
        <div class="quenmatkhau-form">
            <label for="email">Nhập Email của bạn:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="quenmatkhau-form">
            <button type="submit" name="reset">Gửi Yêu Cầu</button>
        </div>
    </form>
</div>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reset'])) {
    $email = $_POST['email'];

    // Kết nối đến cơ sở dữ liệu
    $link = new mysqli("localhost", "root", "", "bmw_khachhang");

    // Kiểm tra kết nối
    if ($link->connect_error) {
        die("Kết nối thất bại: " . $link->connect_error);
    }

    // Kiểm tra xem email có tồn tại trong cơ sở dữ liệu không
    $checkQuery = "SELECT * FROM member_user WHERE email = ?";
    $stmt = $link->prepare($checkQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email tồn tại, gửi email khôi phục mật khẩu
        // Sử dụng PHPMailer để gửi email
        require 'path/to/PHPMailer/src/Exception.php';
        require 'path/to/PHPMailer/src/PHPMailer.php';
        require 'path/to/PHPMailer/src/SMTP.php';

        $mail = new PHPMailer(true);
        try {
            // Cấu hình máy chủ email
            $mail->isSMTP();
            $mail->Host = 'smtp.example.com'; // Địa chỉ máy chủ SMTP
            $mail->SMTPAuth = true;
            $mail->Username = 'your_email@example.com'; // Tài khoản email
            $mail->Password = 'your_password'; // Mật khẩu email
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Người gửi và người nhận
            $mail->setFrom('your_email@example.com', 'Tên của bạn');
            $mail->addAddress($email);

            // Nội dung email
            $mail->isHTML(true);
            $mail->Subject = 'Khôi phục mật khẩu';
            $mail->Body = 'Nhấp vào đây để khôi phục mật khẩu: <a href="link_to_reset_password">Khôi phục mật khẩu</a>';

            $mail->send();
            echo "<p style='color: green;'>Một email khôi phục mật khẩu đã được gửi đến bạn!</p>";
        } catch (Exception $e) {
            echo "Lỗi khi gửi email: {$mail->ErrorInfo}";
        }
    } else {
        echo "<p style='color: red;'>Email không tồn tại!</p>";
    }

    $stmt->close();
    $link->close();
}
?>

</body>
</html>
