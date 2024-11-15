<?php



if (!isset($_SESSION['user_id'])) {
    echo "Bạn cần đăng nhập để thanh toán!";
    exit();
}


$conn = new mysqli("localhost", "root", "", "bmw_chung");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}


$user_info = [
    'username' => $_SESSION['username'] ?? 'N/A',
    'email' => $_SESSION['email'] ?? 'N/A',
    'address' => $_SESSION['address'] ?? 'N/A',
    'phone' => $_SESSION['phone'] ?? 'N/A'
];


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_info'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];


}


$product_ids = array_keys($_SESSION['cart']);
$product_ids_string = implode(',', $product_ids);
$sql = "SELECT masp, tensp, mota, dongia, hinhanh FROM sanpham WHERE masp IN ($product_ids_string)";
$result = $conn->query($sql);

$product_details = [];
$total_price = 0;
while ($row = $result->fetch_assoc()) {
    $quantity = $_SESSION['cart'][$row['masp']];
    $row['quantity'] = $quantity;
    $product_details[] = $row;
    $total_price += $row['dongia'] * $quantity;
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
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            max-width: 1200px;
            margin: 20px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h1, h2, h3 {
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
            text-align: left;
            border-radius: 8px;
        }

        th, td {
            padding: 12px;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        td img {
            width: 100px;
            height: auto;
            border-radius: 8px;
        }

        .form-container {
            background-color: #f9f9f9;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            padding: 14px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .form-group button {
            padding: 12px 30px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
            transition: background-color 0.3s;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .form-group a {
            color: #007bff;
            text-decoration: none;
            font-size: 16px;
            margin-top: 10px;
            display: block;
            text-align: center;
        }

        .form-group a:hover {
            text-decoration: underline;
        }

        .alert {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            margin-bottom: 20px;
            display: none;
            border-radius: 6px;
            font-size: 16px;
            text-align: center;
        }

        .alert.error {
            background-color: #e74c3c;
        }

        .btn-submit {
            display: inline-block;
            padding: 12px 25px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #218838;
        }

        .btn-cancel {
            display: inline-block;
            padding: 12px 25px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s;
        }

        .btn-cancel:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="color: #0056b3;">Thông tin thanh toán</h1>
        <h2 style="color: #c82333;">Giỏ hàng của bạn</h2>
        <table>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tổng cộng</th>
            </tr>
            <?php foreach ($product_details as $product): ?>
            <tr>
                <td><?php echo $product['tensp']; ?></td>
                <td><img src="<?php echo $product['hinhanh']; ?>" alt="<?php echo $product['tensp']; ?>"></td>
                <td><?php echo $product['quantity']; ?></td>
                <td><?php echo number_format($product['dongia'], 0, ',', '.'); ?> VND</td>
                <td><?php echo number_format($product['dongia'] * $product['quantity'], 0, ',', '.'); ?> VND</td>
            </tr>
            <?php endforeach; ?>
        </table>

        <h3 style="float: right; color:blue">Tổng thành tiền: <?php echo number_format($total_price, 0, ',', '.'); ?> VND</h3>

        <h2 style="margin-top: 100px; color: #c82333;"">Thông tin khách hàng</h2>
        <form class="form-container" method="POST">
            <div class="form-group">
                <label for="username">Tên:</label>
                <input type="text" id="username" name="username" value="<?php echo $user_info['username']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $user_info['email']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <input type="text" id="address" name="address" value="<?php echo $user_info['address']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="text" id="phone" name="phone" value="<?php echo $user_info['phone']; ?>" readonly>
            </div>
        </form>

        <form action="index.php?pid=14" method="POST">
            <div class="form-group">
                <button type="submit" name="place_order">Tiến hành thanh toán</button>
            </div>
        </form>
        <form action="index.php?pid=11" method="POST">
            <div class="form-group">
                <button type="submit" name="place_order"> Tiếp tục mua sắm </button>
            </div>
        </form>
    </div>

</body>
</html>
