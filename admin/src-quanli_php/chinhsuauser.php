<div class="main-content">
    <h1>Chỉnh sửa thông tin người dùng</h1>
    <form action="admin.php?pid=6" method="post" class="form-edit-user">
        <!-- Hidden input for user ID -->
        <input type="hidden" name="user_id" value="1">
        
        <!-- User Name -->
        <label for="name">Tên người dùng:</label>
        <input type="text" id="name" name="name" value="Nguyễn Văn A" required>
        
        <!-- User Email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="nguyenvana@example.com" required>
        
        <!-- User Phone -->
        <label for="phone">Số điện thoại:</label>
        <input type="text" id="phone" name="phone" value="0912345678" required>
        
        <!-- User Role -->
        <label for="role">Vai trò:</label>
        <select id="role" name="role" required>
            <option value="customer" selected>Khách hàng</option>
            <option value="admin">Quản trị viên</option>
            <option value="staff">Nhân viên</option>
        </select>

        <!-- Submit Button -->
        <button type="submit" class="btn-submit">Cập nhật</button>
        
        <!-- Cancel Button -->
        <a href="admin.php?pid=5" class="btn-cancel">Hủy</a>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    
    // Kết nối cơ sở dữ liệu
    include '../../sql/db_khachhang.sql';

    // Câu lệnh SQL để cập nhật thông tin người dùng
    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone', role='$role' WHERE id='$user_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Cập nhật thông tin thành công!";
        header('Location: user_management.php');
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
