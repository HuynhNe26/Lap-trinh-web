<?php



if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); 
    exit();
}

$link_khachhang = new mysqli("localhost", "root", "", "bmw_khachhang");
if ($link_khachhang->connect_error) {
    die("Kết nối thất bại: " . $link_khachhang->connect_error);
}

$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$address = $_SESSION['address'];
$phone = $_SESSION['phone'];


$link_sanpham = new mysqli("localhost", "root", "", "bmw_sanpham");
if ($link_sanpham->connect_error) {
    die("Kết nối thất bại: " . $link_sanpham->connect_error);
}

$product_ids = array_keys($_SESSION['cart']);
$product_ids_string = implode(',', $product_ids);
$sql = "SELECT masp, tensp, dongia FROM sanpham WHERE masp IN ($product_ids_string)";
$result = $link_sanpham->query($sql);

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



$link_giohang = new mysqli("localhost", "root", "", "bmw_giohang");
if ($link_giohang->connect_error) {
    die("Kết nối thất bại: " . $link_giohang->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['place_order'])) {
    
    $stmt = $link_giohang->prepare("INSERT INTO don_hang (makhachhang, hovaten, email, diachi, sodienthoai, tongtien, ngaydat) VALUES (?, ?, ?, ?, ?, ?, NOW())");
    $stmt->bind_param("issssi", $user_id, $username, $email, $address, $phone, $total_price);
    $stmt->execute();
    $order_id = $stmt->insert_id; 

    
    foreach ($product_details as $product) {
        $stmt = $link_giohang->prepare("INSERT INTO chitietsanpham (don_hang_id, masp, soluong, dongia) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iiid", $order_id, $product['masp'], $product['quantity'], $product['dongia']);
        $stmt->execute();
    }

    
    unset($_SESSION['cart']);

   
    echo "<script>window.location.href = 'index.php?pid=15';</script>";
    exit();
}

$link_giohang->close();
$link_khachhang->close();
$link_sanpham->close();
?>
