<?php
ob_start();
$host = 'localhost';
$db = 'bmw_web';
$user = 'root';
$pass = '';


$conn = new mysqli($host, $user, $pass, $db);
$link_customer = new mysqli('localhost', 'root', '', 'bmw_khachhang');
$sql_customer = "SELECT * FROM member_user";

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}


$product_ids = isset($_SESSION['cart']) ? array_keys($_SESSION['cart']) : [];
if (count($product_ids) > 0) {
    $product_ids_string = implode(',', $product_ids);
    $sql = "SELECT masp, tensp, mota, dongia, hinhanh FROM sanpham WHERE masp IN ($product_ids_string)";
    $result = $conn->query($sql);

   
    $total_price = 0;
    $product_details = [];
    while ($row = $result->fetch_assoc()) {
        $quantity = $_SESSION['cart'][$row['masp']];
        $row['quantity'] = $quantity;
        $product_details[] = $row;
        $total_price += $row['dongia'] * $quantity;
    }
} else {
    header('Location: index.php?pid=8');
    exit;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ten_khach_hang'])) {
    $ten_khach_hang = $_POST['ten_khach_hang'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $dia_chi = $_POST['dia_chi'];
    unset($_SESSION['cart']);

    
    header('Location: addgiohang.php?message=success');
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .product {
            width: 250px;
            background-color: #f9f9f9;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
        }

        .product img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .product h2 {
            font-size: 18px;
            color: #333;
        }

        .product p {
            font-size: 16px;
            color: #666;
        }

        .total {
            font-size: 20px;
            text-align: center;
            margin: 20px 0;
            color: #0b7dda;
            font-weight: bold;
            margin-bottom: 50px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 50%;
            margin: 0 auto;
        }

        form label {
            font-size: 16px;
            margin: 10px 0 5px;
        }

        form input, form textarea {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .checkout-button, .continue-shopping {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 5px auto;
            width: 100%;
        }

        .checkout-button:hover, .continue-shopping:hover {
            background-color: #45a049;
        }

        .actions {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .continue-shopping {
            background-color: #2196F3;
        }

        .continue-shopping:hover {
            background-color: #0b7dda;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 style="text-align: center; color:red">Thông Tin Đơn Hàng</h1>
    <div class="product-list">
        <?php foreach ($product_details as $product): ?>
            <div class="product">
                <img src="image/<?php echo $product['hinhanh']; ?>" alt="<?php echo $product['tensp']; ?>">
                <h2><?php echo $product['tensp']; ?></h2>
                <p>Số lượng: <?php echo $product['quantity']; ?></p>
                <p>Thành tiền: <?php echo number_format($product['dongia'] * $product['quantity']); ?> VND</p>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="total">Tổng thành tiền: <?php echo number_format($total_price); ?> VND</div>

    <h1 style="text-align: center; color:red">Thông Tin Khách Hàng</h1>
    <form action="luuthongtin.php" method="post">
        <label for="ten_khach_hang">Tên khách hàng:</label>
        <input type="text" id="ten_khach_hang" name="ten_khach_hang" value="<?php echo $row['hovaten'] ?>" required>

        <label for="sdt">Số điện thoại:</label>
        <input type="text" id="sdt" name="sdt" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="dia_chi">Địa chỉ:</label>
        <textarea id="dia_chi" name="dia_chi" required></textarea>

        <button type="submit" class="checkout-button">Tiến Hành Thanh Toán</button>
    </form>

    <div class="actions">
        <a href="giohang.php" class="continue-shopping">Tiếp Tục Mua Sắm</a>
    </div>
</div>
</body>
</html>
