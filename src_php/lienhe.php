<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Liên hệ với chúng tôi để biết thêm thông tin.">
    <title>Liên hệ với chúng tôi</title>
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="stylesheet" href="../css/fontawesome-free-6.6.0/css/all.min.css">
    <script src="js/main.js" defer></script>
    <style>
        body {
            background-image: url(image/Trangchu2.webp);
            margin-left: auto;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        .form {
            display: flex;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 20px auto;
            gap: 20px;
        }

        .formlienhe {
            position: relative;
            left: -90px;
            flex: 1;
            min-width: 300px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #007bff;
        }
    
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        .dulieu-vao {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

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
            background-color: #0056b3;
        }

        .gg-map {
        position:relative;
        right: -100px;
        flex: 1;
        background-color:darkblue; /* Loại bỏ màu nền thừa */
        padding: 5px; /* Loại bỏ padding */
        margin: 0; /* Loại bỏ khoảng trống thừa */
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

        iframe {
        margin-right: 100px;
        width: 100%;
        height: 100%; /* Điều chỉnh chiều cao cho phù hợp */
        border: none;
        margin: 10; /* Đảm bảo không có khoảng trống xung quanh iframe */
        display: block; /* Đảm bảo iframe hiển thị dưới dạng khối */
}
        /* Đảm bảo tính đáp ứng trên màn hình nhỏ */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .map-container {
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>

<div class="form">
    <div class="formlienhe">
        <h1>LIÊN HỆ VỚI CHÚNG TÔI</h1>
        <form method="post" action="index.php?pid=3">
            <fieldset>
                <legend>Thông tin cá nhân</legend>
                
                <label>Danh xưng:</label>
                <select class="dulieu-vao" name="gioitinh" required>
                    <option value="">Vui lòng chọn</option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Khác">Khác</option>
                </select>

                <label for="name">Họ tên:</label>
                <input type="text" id="name" name="name" class="dulieu-vao" required>

                <label for="number">SĐT:</label>
                <input type="number" id="SDT" name="SĐT" class="dulieu-vao" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" class="dulieu-vao" required>

                <label for="comment">Ghi chú:</label>
                <textarea id="comment" name="comment" class="dulieu-vao" rows="5"></textarea>

                <input type="submit" class="nut-xacnhan" value="Gửi liên hệ">
            </fieldset>
        </form>
    </div>

    <!-- Google Maps iframe -->
    <div class="gg-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.14732485717!2d106.65184127451747!3d10.800026358759023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175292976c117ad%3A0x5b3f38b21051f84!2zSOG7jWMgVmnhu4duIEjDoG5nIEtow7RuZyBWaeG7h3QgTmFtIENTMg!5e0!3m2!1svi!2s!4v1729594701641!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

</body>
</html>
