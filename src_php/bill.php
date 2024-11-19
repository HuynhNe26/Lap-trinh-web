<?php
$link = new mysqli("localhost", "root", "", "bmw_giohang");
if ($link->connect_error) {
    die("Kết nối thất bại: " . $link->connect_error);
}


if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id']; 

    
    $stmt = $link->prepare("SELECT * FROM don_hang WHERE makhachhang = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($order = $result->fetch_assoc()) {
            
            $stmt = $link->prepare("SELECT c.*, s.tensp FROM chitietsanpham c JOIN bmw_sanpham.sanpham s ON c.masp = s.masp WHERE c.don_hang_id = ?");
            $stmt->bind_param("i", $order['don_hang_id']);
            $stmt->execute();
            $product_result = $stmt->get_result();

            
            echo "<div class='order-container'>";
            echo "<h1 class='order-title'>Thông tin hóa đơn</h1>";
            echo "<p><strong>Mã đơn hàng:</strong> " . $order['don_hang_id'] . "</p>";
            echo "<p><strong>Ngày đặt:</strong> " . $order['ngaydat'] . "</p>";
            echo "<p><strong>Trạng thái đơn hàng:</strong> " . $order['trangthai'] . "</p>";
            echo "<p><strong>Địa chỉ giao hàng:</strong> " . $order['diachi'] . "</p>";
            echo "<p><strong>Số điện thoại:</strong> " . $order['sodienthoai'] . "</p>";
            echo "<p><strong>Email:</strong> " . $order['email'] . "</p>";
            
            echo "<h2 class='product-title'>Chi tiết sản phẩm</h2>";
            echo "<table class='order-table'>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Thành tiền</th>
                </tr>";

            $total_amount = 0;
            while ($product = $product_result->fetch_assoc()) {
                $total_amount += $product['dongia'] * $product['soluong'];
                echo "<tr>
                    <td>" . $product['tensp'] . "</td>
                    <td>" . $product['soluong'] . "</td>
                    <td>" . number_format($product['dongia'], 0, ',', '.') . " VND</td>
                    <td>" . number_format($product['dongia'] * $product['soluong'], 0, ',', '.') . " VND</td>
                </tr>";
            }

            echo "</table>";
            echo "<p><strong class='total-amount'>Tổng tiền: </strong><span class='total-amount'>" . number_format($total_amount, 0, ',', '.') . " VND</span></p>";

            $ngaydat = new DateTime($order['ngaydat']);
            $ngaygiao = $ngaydat->modify('+7 day');
            $ngaygiao_formatted = $ngaygiao->format('d-m-Y');

           
            echo "<p><strong>Ngày giao hàng dự kiến:</strong> " . $ngaygiao_formatted . " vào lúc 9h sáng</p>";
           
            echo "<button class='print-btn' onclick='window.print();'>In hóa đơn</button>";
            echo "<a href='index.php?pid=11' class='continue-shopping-btn'>Tiếp tục mua sắm</a>";

            echo "</div>";
        }
    } else {
        echo "<p>Không tìm thấy đơn hàng nào cho người dùng này.</p>";
    }
} else {
    echo "<p>Vui lòng đăng nhập để xem đơn hàng.</p>";
}

$link->close();
?>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 20px;
}

.order-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 900px;
    margin: 0 auto;
}

.order-title {
    color: #333;
    font-size: 28px; 
    color: #2a8fbd;
    text-align: center;
    font-size: 40px;
}

.product-title {
    color: red;
    font-size: 27px; 
    margin-top: 20px;
    text-align: center;
}

p {
    font-size: 16px;
    line-height: 1.6;
}

.total-amount {
    font-size: 25px;
    color: #d9534f; 
    font-weight: bold;
}

.order-table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
}

.order-table th, .order-table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

.order-table th {
    background-color: #f2f2f2;
    color: #333;
}

.order-table td {
    background-color: #f9f9f9;
}

.order-table tr:nth-child(even) td {
    background-color: #f1f1f1;
}

.order-table tr:hover {
    background-color: #e9e9e9;
}

.order-container p strong {
    color: #444;
}



.print-btn {
    display: inline-block;
    background-color: #5cb85c;
    color: white;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px;
    text-align: center;
}


.order-container {
    text-align: center;
    padding-right: 40px; 
}

.print-btn:hover {
    background-color: #4cae4c;
}

.print-btn:active {
    background-color: #398439;
}
.continue-shopping-btn {
    display: inline-block;
    background-color: #f0ad4e;
    color: white;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px;
    text-align: center;
    text-decoration: none;
    
}


.order-container {
    text-align: center; /
}

.continue-shopping-btn:hover {
    background-color: #ec971f;
}

.continue-shopping-btn:active {
    background-color: #d58512;
}
</style>
