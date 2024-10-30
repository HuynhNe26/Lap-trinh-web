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
                            <a href="admin.php?pid=8&&id=<?php echo $row['masp']; ?>" style="border:1px solid blue; background-color:white; color:blue; padding:5px 10px; cursor:pointer; text-decoration:none;">
                                Chỉnh sửa
                            </a>
                            <form action="admin.php?pid=9" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');">
                                <input type="hidden" name="id" value="<?php echo $row['masp']; ?>">
                                <button type="submit" name="delete" style="border:1px solid red; background-color:white; color:red; padding:5px 10px; cursor:pointer;">
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
