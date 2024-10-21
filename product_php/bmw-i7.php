<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="base.css">
    <link rel="icon" href="image/Logo.png">
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/fontawesome-free-6.6.0/css/all.min.css">
    <link rel="stylesheet" href="">
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f5f5f5;
    }
    .container {
        display: flex;
        max-width: 1200px;
        margin: auto;
        background: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }
    .image-section {
        flex: 1;
    padding: 20px;
    display: flex; /* Sử dụng flexbox */
    justify-content: center; /* Căn giữa theo chiều ngang */
    align-items: center; /* Căn giữa theo chiều dọc */
    }
    .image-section img {
        max-width: 100%;
        border-radius: 8px;
    }
    .info-section {
        flex: 1;
        padding: 20px;
    }
    .info-section h1 {
        font-size: 24px;
        margin: 0;
    }
    .info-section .price {
        font-size: 24px;
        color:darkred;
        margin: 10px 0;
    }
    .info-section p {
        color: #555;
    }
    .button {
        display: inline-block;
        margin: 10px 0;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }
    .button:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>

<div class="container">
<div class="image-section">
    <img src="../image/BMW-i7.webp" alt="BMW-i7">
</div>
<div class="info-section">
    <h1 style="color:#0056b3">BMW - i7</h1>
    <div class="price" style="font-weight: 600">Giá từ: ...&nbsp;VNĐ</div>
    <p style="font-weight:500; color:navy">[BMW - i7] Công nghệ hiện đại, tiết kiệm chi phí vượt trội!</p>
    <p>BMW - i7 không chỉ đẹp ấn tượng mà còn đầy tiện nghi, hiện đại, giúp bạn trải nghiệm sự thoải mái và an toàn.</p>
    <p style="font-weight: bold;">MÀU SẮC: Trắng</p>
    <p style="font-weight: bold;">ĐỘNG CƠ: Xăng</p>
    <p style="font-weight: bold;">ƯU ĐÃI: 20% </p>
    <a href="#" class="button">Đặt ngay</a>
    <a href="#" class="button">Đăng ký lái thử</a>
    <p>HOTLINE TƯ VẤN: <strong>010101010</strong></p>
</div>
</div>

</body>
</html>
