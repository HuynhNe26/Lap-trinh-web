<?php
$conn = new mysqli("localhost", "root", "", "bmw_web");
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
$sql = "SELECT * FROM theloai, chitiettl, sanpham WHERE theloai.matl = chitiettl.matl AND chitiettl.machitiettl = sanpham.machitiettl";
$result = $conn->query($sql);
?>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            position: absolute;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
    </style>

    <h2 style="text-align: center; padding:10px">Danh Sách Sản Phẩm</h2>
    <?php if (isset($_SESSION['message'])): ?>
        <p style="color: green;"><?php echo $_SESSION['message']; ?></p>
        <?php unset($_SESSION['message']); // Xóa thông báo sau khi đã hiển thị ?>
    <?php endif; ?>
    <table>
        <tr>
            <th>STT</th>
            <th>Thể loại</th>
            <th>Chi tiết Thể loại</th>
            <th>Hình ảnh</th>
            <th>Tên Sản Phẩm</th>
            <th>Mô tả</th>
            <th>Đơn giá</th>
            <th>Chức năng</th>
        </tr>

        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['masp']; ?></td>
                    <td><?php echo $row['tentl']; ?></td>
                    <td><?php echo $row['tenchitiettl']; ?></td>
                    <td>
                        <img src="../image/<?php echo $row['hinhanh']; ?>" alt="<?php echo $row['tensp']; ?>" style="width:200px; height:120px; object-fit:cover;">
                    </td>
                    <td><?php echo $row['tensp']; ?></td>
                    <td><?php echo $row['mota']; ?></td>
                    <td><?php echo $row['dongia']; ?></td>
                    <td>
                        <div class="action-buttons">
                            <a class="action-buttons__a" href="admin.php?pid=8&&id=<?php echo $row['masp']; ?>">
                                Chỉnh sửa
                            </a>
                            <form action="admin.php?pid=9" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');">
                                <input type="hidden" name="id" value="<?php echo $row['masp']; ?>">
                                <button type="submit" name="delete">
                                    Xóa
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">Không có sản phẩm nào.</td>
            </tr>
        <?php endif; ?>
    </table>

    <?php
    $conn->close();
    ?>

    <style>
        /* Đặt nền cho toàn bộ trang */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

/* Khung chứa form */
.chinhsuasp {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 400px;
    max-width: 90%;
    text-align: center;
}

/* Tiêu đề form */
.chinhsuasp h1 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

/* Các nhãn của form */
.chinhsuasp-label {
    display: block;
    font-weight: bold;
    color: #555;
    text-align: left;
    margin-bottom: 5px;
}

/* Các ô nhập liệu và vùng nhập mô tả */
#tensp, #mota, #hinhanh {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
}

/* Vùng nhập mô tả */
.chinhsuasp-textarea {
    resize: vertical;
}

/* Hình ảnh hiện tại */
.chinhsuasp img {
    display: block;
    margin: 10px auto;
    max-width: 100%;
    height: auto;
    border: 1px solid #ddd;
    border-radius: 4px;
}

/* Nút cập nhật */
.chinhsuasp-button {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

/* Hiệu ứng hover cho nút */
.chinhsuasp-button:hover {
    background-color: #218838;
}

/* Liên kết quay lại */
.chinhsuasp-quaylai {
    display: inline-block;
    margin-top: 15px;
    color: #007bff;
    text-decoration: none;
    font-size: 14px;
    transition: color 0.3s ease;
}

/* Hiệu ứng hover cho liên kết */
.chinhsuasp-quaylai:hover {
    color: #0056b3;
}

    </style>
