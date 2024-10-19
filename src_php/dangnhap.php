<form action="" method="post" style="width:100%">
    <table style="width:500px; border:2px solid var(--black-color);margin-top:40px; margin-left:500px ">
        <tr>
            <td colspan="2" style="text-align:center; font-size:16px; font-weight: 600">ĐĂNG NHẬP</td>
        </tr>
        <tr>
            <td>Tên đăng nhập:</td>
            <td>
                <input style="width:350px; height:25px" type="text" name="tendangki" required>
            </td>
        </tr>
        <tr>
            <td class="dangki_td">Mật khẩu:</td>
            <td>
                <input style="width:350px; height:25px" type="password" name="matkhaumoi" required>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center">
                    <input style="min-width:120px; height:30px" type="submit" value="Đăng nhập" required>
                    <a href="index.php?pid=5" style="color:var(--black-color); font-size:14px; margin-left:30px; font-weight:600">
                        Đăng kí
                    </a>    
            </td>
        </tr>
    </table>
</form>

<?php 
$link = new mysqli('localhost', 'root', '','bmw_khachhang');
$sql_dangki = ""
?>
