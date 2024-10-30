<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $conn = mysqli_connect("localhost", "root", "", "bmw_web");
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }
    $query = "DELETE FROM sanpham WHERE masp = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        session_start();
        $_SESSION['message'] = "Sản phẩm đã được xóa thành công.";
    } else {
        echo "Lỗi: " . $stmt->error;
    }
    $stmt->close();
    mysqli_close($conn);
    header("Location: admin.php?pid=3");
    exit();
}
?>
