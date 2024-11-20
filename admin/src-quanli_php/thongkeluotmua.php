<?php
$link1 = new mysqli("localhost", "root", "", "bmw_giohang");
if ($link1->connect_error) {
die("Connection failed: " . $link1->connect_error);
}
$link2 = new mysqli("localhost", "root", "", "bmw_sanpham");
if ($link2->connect_error) {
die("Connection failed: " . $link2->connect_error);
}

$from_date = $_GET['from_date'] ?? null;
$to_date = $_GET['to_date'] ?? null;

if ($from_date && $to_date) {
    $sql = "SELECT
                sp.tensp AS ten_san_pham,
                sp.mota AS mo_ta,
                sp.gia AS gia,  
                SUM(ct.dongia * ct.soluong) AS tong_doanh_thu,
                SUM(ct.soluong) AS so_lan_mua
            FROM chitietsanpham ct
            RIGHT JOIN sanpham sp ON ct.masp = sp.masp
            JOIN don_hang dh ON ct.don_hang_id = dh.don_hang_id
            WHERE dh.ngaydat BETWEEN ? AND ?
            GROUP BY sp.tensp, sp.mota, sp.gia";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("ss", $from_date, $to_date);
    $stmt->execute();
    $result = $stmt->get_result();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thống kê lượt mua</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="thongkeluotmua-container">
    <h1>Thống kê lượt mua</h1>
    <form action="purchase_statistics.php" method="get" class="thongkeluotmua-form">
        <label for="from_date">Từ ngày:</label>
        <input type="date" id="from_date" name="from_date" required>

        <label for="to_date">Đến ngày:</label>
        <input type="date" id="to_date" name="to_date" required>

        <button type="submit" class="button-thongkeluotmua">Lọc</button>
    </form>
    <table class="thongkeluotmua-table">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Mô tả</th>
                <th>Giá mỗi sản phẩm (VNĐ)</th>
                <th>Tổng doanh thu (VNĐ)</th>
                <th>Số lần mua</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['ten_san_pham']}</td>
                        <td>{$row['mo_ta']}</td>
                        <td>" . number_format($row['gia']) . "</td>
                        <td>" . number_format($row['tong_doanh_thu']) . "</td>
                        <td>{$row['so_lan_mua']}</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Không có dữ liệu trong khoảng thời gian đã chọn.</td></tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <?php
            if ($result->num_rows > 0) {
                $result->data_seek(0); 
                $tong_doanh_thu = 0;
                $tong_so_lan_mua = 0;
                while ($row = $result->fetch_assoc()) {
                    $tong_doanh_thu += $row['tong_doanh_thu'];
                    $tong_so_lan_mua += $row['so_lan_mua'];
                }
                echo "<tr>
                    <td colspan='3'><strong>Tổng cộng:</strong></td>
                    <td><strong>" . number_format($tong_doanh_thu) . "</strong> VND</td>
                    <td><strong>" . $tong_so_lan_mua . "</strong></td>
                </tr>";
            }
            ?>
        </tfoot>
    </table>
</div>
</body>
</html>

<?php
if ($stmt) {
    $stmt->close();
}
$link->close();
?>
