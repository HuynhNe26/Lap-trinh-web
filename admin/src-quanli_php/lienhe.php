<?php
$link = new mysqli('localhost','root','','bmw_dangki_lienhe');
if ($link->connect_error) {
    die("Kết nối thất bại: " . $link->connect_error);
}
$sql_lienhe = "SELECT * FROM lienhe";
$result_lienhe = $link->query($sql_lienhe);
?>
<div style="margin-right:330px; margin-top:20px">
    <div style="display:flex">
        <h1>Danh sách liên hệ từ khách hàng</h1>
    </div>
    <div>
        <div style="margin-top:10px; margin-left:10px; font-size:19px; display:flex">
            <sppan>Bộ lọc liên hệ</sppan>
            <form action="admin.php?pid=12" method="post" style="display:flex; margin-left:10px">
                <select name="lido__lienhe" style="font-size:15px" required>
                        <option value="">Vui lòng chọn lí do để lọc</option>  
                        <?php
                         $conn = new mysqli('localhost','root','','bmw_dangki_lienhe');
                         $sql_lido = "SELECT * FROM lido_lienhe";
                         $result_lido = $conn->query($sql_lido);
                        while($row = $result_lido->fetch_assoc()) {
                        ?>
                            <option value="<?php echo $row['malido_lienhe'] ?>"><?php echo $row['tenlido_lienhe'] ?></option>
                        <?php
                        }
                        ?>
                </select>
                <input class="lienhe__input" type="submit" style="margin-left:10px" value="Lọc"> 
            </form>
            <a class="lienhe__a" href="admin.php?pid=11" style="text-decoration:none; color:black; font-size:19px; margin-left:10px">Tất cả liên hệ</a>
        </div>
    </div>
    <div style="margin-top:20px">
        <table>
                <tr>
                    <th style="font-size:14px">STT</th>
                    <th style="font-size:14px">Danh xưng</th>
                    <th style="font-size:14px">Họ và tên</th>
                    <th style="font-size:14px">Số điện thoại</th>
                    <th style="font-size:14px">Email</th>
                    <th style="font-size:14px">Địa chỉ</th>
                    <th style="font-size:14px">Lí do liên hệ</th>
                    <th style="font-size:14px">Thời gian</th>
                    <th style="font-size:14px">Trạng thái</th>
                    <th style="font-size:14px">Chức năng</th>
                </tr>
                <?php
                $stt = 1;
                if ($result_lienhe->num_rows > 0) {
                    while($row = $result_lienhe->fetch_assoc()) {
                ?>
                <tr class="lienhe__tr">
                    <td style="font-size:13px">
                        <?php echo $stt++ ?>
                    </td>
                    <td style="font-size:13px">
                        <?php echo $row['danhxung'] ?>
                    </td>
                    <td style="font-size:13px">
                        <?php echo $row['hotenuser'] ?>
                    </td>
                    <td style="font-size:13px">
                        <?php echo $row['sdt'] ?>
                    </td>
                    <td style="font-size:13px">
                        <?php echo $row['email'] ?>
                    </td>
                    <td style="font-size:13px">
                        <?php echo $row['diachi'] ?>
                    </td>
                    <td style="font-size:13px">
                        <?php echo $row['lidolienhe'] ?>
                    </td>
                    <td style="font-size:13px">
                        <?php echo $row['ngaygiolienhe'] ?>
                    </td>
                    <td style="font-size:13px">
                        <?php echo $row['trangthai'] ?>
                    </td>
                    <td style="display:flex">
                        <form action="admin.php?pid=13" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $row['madonlienhe']; ?>">
                            <button type="submit" name="delete">
                                Xác nhận
                            </button>
                        </form>
                        <form action="admin.php?pid=14" method="POST" style="display:inline; margin-left:10px">
                            <input type="hidden" name="id" value="<?php echo $row['madonlienhe']; ?>">
                            <button type="submit" name="delete">
                                Xác nhận hủy
                            </button>
                        </form>
                    </td>
                <?php
                    }
                }
                else {
                ?>
                <tr>
                    <td colspan="9">Không có người dùng nào.</td>
                </tr>
                <?php
                }
                ?> 
            </tr>
        </table>
    </div>
</div>
<style>
    .lienhe__tr:hover {
        background-color: #f1f1f1;
    }
</style>

