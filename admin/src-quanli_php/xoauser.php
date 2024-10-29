<div class="main-content">
    <h1>Xóa người dùng</h1>
    <p>Bạn có chắc chắn muốn xóa người dùng dưới đây không?</p>

    <!-- User Information -->
    <div class="user-info">
        <p><strong>Tên người dùng:</strong> Nguyễn Văn A</p>
        <p><strong>Email:</strong> nguyenvana@example.com</p>
        <p><strong>Số điện thoại:</strong> 0912345678</p>
        <p><strong>Vai trò:</strong> Khách hàng</p>
    </div>

    <!-- Confirmation Buttons -->
    <form action="admin.php?pid=5" method="post">
        <!-- Hidden input for user ID -->
        <input type="hidden" name="user_id" value="1">

        <button type="submit" class="btn-confirm">Xóa người dùng</button>
        <a href="admin.php?pid=5" class="btn-cancel">Hủy</a>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy ID người dùng từ form
    $user_id = $_POST['user_id'];

    // Kết nối cơ sở dữ liệu
    include 'db_connect.php';

    // Câu lệnh SQL để xóa người dùng
    $sql = "DELETE FROM users WHERE id='$user_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Xóa người dùng thành công!";
        header('Location: user_management.php');  // Chuyển về trang quản lý người dùng sau khi xóa
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
