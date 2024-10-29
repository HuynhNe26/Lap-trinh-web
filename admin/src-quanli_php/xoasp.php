<?php
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
        echo "Sản phẩm đã được xóa thành công.";
    } else {
        echo "Lỗi: " . $stmt->error;
    }
    $stmt->close();
    mysqli_close($conn);
    header("Location: index.php");
    exit();
}
?>
