<?php
session_start();
$host = 'localhost'; // Thay đổi nếu cần
$db = 'db_giohang'; // Thay thế bằng tên cơ sở dữ liệu của bạn
$user = 'root'; // Thay thế bằng tên người dùng cơ sở dữ liệu của bạn
$pass = ''; // Thay thế bằng mật khẩu cơ sở dữ liệu của bạn

// Tạo kết nối
$conn = new mysqli($host, $user, $pass, $db);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Xử lý thêm sản phẩm vào giỏ hàng
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['masp'])) {
    $masp = $_POST['masp'];
    $quantity = $_POST['quantity'];

    // Kiểm tra nếu giỏ hàng đã tồn tại trong session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng hay chưa
    if (array_key_exists($masp, $_SESSION['cart'])) {
        $_SESSION['cart'][$masp] += $quantity; // Tăng số lượng
    } else {
        $_SESSION['cart'][$masp] = $quantity; // Thêm sản phẩm mới
    }
}

// Xử lý xóa sản phẩm
if (isset($_GET['remove'])) {
    $remove_masp = $_GET['remove'];
    unset($_SESSION['cart'][$remove_masp]);
}

// Lấy thông tin sản phẩm từ cơ sở dữ liệu
$product_ids = isset($_SESSION['cart']) ? array_keys($_SESSION['cart']) : [];
if (count($product_ids) > 0) {
    $product_ids_string = implode(',', $product_ids);
    $sql = "SELECT masp, tensp, mota, dongia, hinhanh FROM sanpham WHERE masp IN ($product_ids_string)";
    $result = $conn->query($sql);

    // Tính tổng thành tiền
    $total_price = 0;
    $product_details = []; // Mảng lưu thông tin sản phẩm
    while ($row = $result->fetch_assoc()) {
        $quantity = $_SESSION['cart'][$row['masp']];
        $row['quantity'] = $quantity; // Thêm số lượng vào thông tin sản phẩm
        $product_details[] = $row; // Lưu thông tin sản phẩm vào mảng
        $total_price += $row['dongia'] * $quantity; // Tính tổng giá trị
    }
} else {
    $product_details = []; // Giỏ hàng trống
    $total_price = 0; // Tổng thành tiền
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng Của Bạn</title>
    <style>
        body, h1, h2, p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #0056b3;
        }

        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .product {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .product img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .remove-button {
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            margin-top: 10px;
        }

        .remove-button:hover {
            background-color: darkred;
        }

        .total {
            font-size: 20px;
            margin-top: 20px;
            text-align: right;
        }

        .checkout-button {
            display: block;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            text-align: center;
            margin-top: 20px;
            width: 100%;
            font-size: 25px;
            font-family: 'Times New Roman', Times, serif;
        }

        .checkout-button:hover {
            background-color: #218838;
            font-weight: 800;
        }

        .continue-shopping {
            display: block;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 0px;
            cursor: pointer;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            width: 100%;
            font-size: 25px;
            font-family: 'Times New Roman', Times, serif;
        }

        .continue-shopping:hover {
            background-color: #0069d9;
            font-weight: 800;
        }

        .quantity-controls {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0;
        }

        .quantity-controls button {
            background-color: #ddd;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .quantity-controls input {
            width: 40px;
            text-align: center;
            margin: 0 10px;
        }
    </style>
</head>
<body>
<div class="container">
        
        <?php if (isset($_GET['message']) && $_GET['message'] === 'success'): ?>
            <div class="notification" id="notification">Đặt hàng thành công! Cảm ơn bạn đã mua sắm.</div>
        <?php endif; ?>
    <div class="container">
        <h1>Giỏ Hàng Của Bạn</h1>
        <div class="product-list">
            <?php if (count($product_details) > 0): ?>
                <?php foreach ($product_details as $product): ?>
                    <div class="product">
                        <img style="padding-bottom: 20px;" src="<?php echo $product['hinhanh']; ?>" alt="<?php echo $product['tensp']; ?>">
                        <h2 style="padding-bottom: 20px;"><?php echo $product['tensp']; ?></h2>
                        <p style="padding-bottom: 20px;">Nhiên liệu: <?php echo $product['mota']; ?></p>
                        <p style="padding-bottom: 20px;">Giá: <span class="price" data-price="<?php echo $product['dongia']; ?>"><?php echo number_format($product['dongia']); ?></span> VND</p>
                        <div class="quantity-controls" style="padding-bottom: 20px;">
                            <button class="decrease-quantity" data-id="<?php echo $product['masp']; ?>">-</button>
                            <input type="number" class="quantity-input" value="<?php echo $product['quantity']; ?>" data-id="<?php echo $product['masp']; ?>" min="1">
                            <button class="increase-quantity" data-id="<?php echo $product['masp']; ?>">+</button>
                        </div>
                        <p class="product-total" style="padding-bottom: 20px; font-weight:bold">Thành tiền: <span id="total-<?php echo $product['masp']; ?>"><?php echo number_format($product['dongia'] * $product['quantity']); ?></span> VND</p>
                        <form style="padding-bottom: 20px;" method="get" action="">
                            <input type="hidden" name="remove" value="<?php echo $product['masp']; ?>">
                            <button type="submit" class="remove-button">Xóa</button>
                        </form>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p >Giỏ hàng của bạn hiện đang trống.</p> 
                <a style="padding: 10px 40px; background-color:#007bff;text-decoration: none; text-align: center; float: left; font-weight: bold; margin-top:30px" href="./giohang.php">Tiếp tục mua sắm</a>
            <?php endif; ?>
        </div>

        <?php if (count($product_details) > 0): ?>
            <div style="font-weight: bold;" class="total">
                Tổng thành tiền: <span id="total-price"><?php echo number_format($total_price); ?></span> VND
            </div>
            <form action="place_order.php" method="post">
                <button type="submit" class="checkout-button">Đặt hàng</button>
            </form>
            <a href="giohang.php" class="continue-shopping">Tiếp tục mua sắm</a> 
        <?php endif; ?>
    </div>

    <script>
        function updateTotalPrice(productId, quantity) {
            const price = parseInt(document.querySelector(`.price[data-price]`).getAttribute('data-price'));
            const total = price * quantity;
            document.getElementById(`total-${productId}`).innerText = total.toLocaleString('vi-VN');
            return total;
        }

        function updateOverallTotalPrice() {
            let totalPrice = 0;
            document.querySelectorAll('.product').forEach(product => {
                const quantity = parseInt(product.querySelector('.quantity-input').value);
                const productId = product.querySelector('.quantity-input').getAttribute('data-id');
                totalPrice += updateTotalPrice(productId, quantity);
            });
            document.getElementById('total-price').innerText = totalPrice.toLocaleString('vi-VN');
        }

        document.querySelectorAll('.increase-quantity').forEach(button => {
            button.addEventListener('click', () => {
                const productId = button.getAttribute('data-id');
                const quantityInput = document.querySelector(`.quantity-input[data-id="${productId}"]`);
                quantityInput.value = parseInt(quantityInput.value) + 1;
                updateOverallTotalPrice();
            });
        });

        document.querySelectorAll('.decrease-quantity').forEach(button => {
            button.addEventListener('click', () => {
                const productId = button.getAttribute('data-id');
                const quantityInput = document.querySelector(`.quantity-input[data-id="${productId}"]`);
                if (parseInt(quantityInput.value) > 1) {
                    quantityInput.value = parseInt(quantityInput.value) - 1;
                    updateOverallTotalPrice();
                }
            });
        });

        document.querySelectorAll('.quantity-input').forEach(input => {
            input.addEventListener('change', () => {
                const productId = input.getAttribute('data-id');
                const quantity = parseInt(input.value);
                updateTotalPrice(productId, quantity);
                updateOverallTotalPrice();
            });
        });
    </script>
</body>
</html>
