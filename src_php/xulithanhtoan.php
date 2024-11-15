<?php

$conn = new mysqli("localhost", "root", "", "bmw_chung");
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

session_start(); 
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$address = $_SESSION['address'];
$phone = $_SESSION['phone'];


$product_ids = array_keys($_SESSION['cart']);
$product_ids_string = implode(',', $product_ids);
$sql = "SELECT masp, tensp, dongia FROM sanpham WHERE masp IN ($product_ids_string)";
$result = $conn->query($sql);

$product_details = [];
$total_price = 0;


while ($row = $result->fetch_assoc()) {
    $quantity = $_SESSION['cart'][$row['masp']];
    $total_price += $row['dongia'] * $quantity;
    $product_details[] = [
        'masp' => $row['masp'],
        'tensp' => $row['tensp'],
        'dongia' => $row['dongia'],
        'quantity' => $quantity
    ];
}


$total_price = floor($total_price); 


$order_info = [
    'user_id' => $user_id,
    'username' => $username,
    'email' => $email,
    'address' => $address,
    'phone' => $phone,
    'total_price' => $total_price,
    'product_details' => $product_details
];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['place_order'])) {
    
    $stmt = $conn->prepare("INSERT INTO don_hang (makhachhang, hovaten, email, diachi, sodienthoai, tongtien, ngaydat) VALUES (?, ?, ?, ?, ?, ?, NOW())");
    $stmt->bind_param("issssi", $user_id, $username, $email, $address, $phone, $total_price);
    $stmt->execute();
    $order_id = $stmt->insert_id; 
   
    foreach ($product_details as $product) {
        $stmt = $conn->prepare("INSERT INTO chitietsanpham (don_hang_id, masp, soluong, dongia) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iiid", $order_id, $product['masp'], $product['quantity'], $product['dongia']);
        $stmt->execute();
    }

   
    unset($_SESSION['cart']);

    
    echo "<script>window.location.href = 'index.php?pid=15';</script>";
    exit();
}

$conn->close();
?>

