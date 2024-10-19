<form action="" method="post" style="width:100%">
    <table style="width:500px; border:2px solid var(--black-color);margin-top:40px; margin-left:500px ">
        <tr>
            <td colspan="2" style="text-align:center; font-size:16px; font-weight: 600;">ĐĂNG KÍ THÀNH VIÊN</td>
        </tr>
        <tr>
            <td>Tên đăng kí*:</td>
            <td>
                <input style="width:350px; height:25px" type="text" name="tendangki" required>
            </td>
        </tr>
        <tr>
            <td class="dangki_td">Mật khẩu mới*:</td>
            <td>
                <input style="width:350px; height:25px" type="password" name="matkhaumoi" required>
            </td>
        </tr>
        <tr>
            <td class="dangki_td">Xác nhận mật khẩu*:</td>
            <td>
                <input style="width:350px; height:25px" type="password" name="xacnhanmatkhaumoi" required>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center">
                    <input style="min-width:120px; height:30px" type="submit" value="Đăng kí" required>
                    <a href="index.php?pid=6" style="color:var(--black-color); font-size:14px; margin-left:30px; font-weight:600">
                        Đăng nhập
                    </a>
            </td>
        </tr>
    </table>
</form>

<?php 
$link = new mysqli('localhost', 'root', '','bmw_khachhang');
$sql_dangki = ""
?>
