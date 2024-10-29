<link rel="icon" href="../image/Logo.png">
<link rel="stylesheet" href="../admin.js">
<title>Đăng nhập quản trị viên BMW</title>
<style>
/* General styling for form */
form {
    width: 100%;
    position: relative;
}

/* Style the table */
table {
    position: absolute;
    width: 400px;
    border: 2px solid black;
    margin-top: 80px;
    margin-left: 500px;
    height: 200px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
}

/* Table headings */
table td {
    padding: 10px;
}

/* ĐĂNG NHẬP heading */
table .dangnhap__td {
    font-size: 17px;
    font-weight: 600;
}

/* Input fields */
.input__text .input__matkhau {
    width: 390px;
    height: 40px;
    margin-top: 10px;
    padding-left: 10px;
    border: 1px solid black;
    border-radius: 4px;
    font-size: 16px;
}

.input__text .input__matkhau :invalid {
    width: 390px;
    height: 40px;
    margin-top: 10px;
    padding-left: 10px;
    box-shadow: 1px 1px aqua;
    border-radius: 4px;
    font-size: 16px;
}

/* Submit button */
.input__login {
    min-width: 300px;
    height: 40px;
    margin-top: 10px;
    color: black;
    border: 1px solid black;
    background-color: white;;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

/* Submit button hover effect */
.input__login:hover {
    background-color: black;
    color:white;
}

.input__login:active {
    background-color: black;
    color:white;
}

/* "Forget password?" link */
a {
    text-decoration: none;
    color: var(--black-color);
    font-size: 14px;
}

a:hover {
    text-decoration: underline;
}

/* Remember me checkbox and label */
input[type="checkbox"] {
    margin-right: 5px;
}

/* Extra styling */
.dangnhap__td {
    margin-top: 10px;
}
</style>

<div class="login-admin">
    <form id="login_form" action="login.php" method="post" style="width:100%" enctype="multipart/form-data">
        <table style="width:400px; border:2px solid var(--black-color);margin-top:40px; margin-left:500px; height:200px ">
            <tr>
                <td colspan="2" style="text-align:center; font-size:21px; font-weight: 600">ĐĂNG NHẬP QUẢN TRỊ VIÊN <br> HỆ THỐNG BMW</td>
            </tr>
            <tr>
                <td class="dangnhap__td" colspan="2">
                    <div>Tên đăng nhập</div>
                </td>
            </tr>
            <tr>
                <td class="input__text" colspan="2">
                    <input style="width:390px; height:40px" type="text" id="tendangnhap-admin" name="tendangnhap-admin" placeholder="adbcdef..." required>
                </td>
            </tr>
            <tr>
                <td class="dangnhap__td">
                    <div style="margin-top:10px">Mật khẩu</div>
                </td>
                <td class="dangnhap__td">
                    <div style="margin-top:10px; margin-left:170px">Quên mật khẩu?</div>
                </td>
            </tr>
            <tr>
                <td class="input__matkhau" colspan="2">
                    <input style="width:390px; height:40px" type="password" id="matkhau-admin" name="matkhau-admin" placeholder="Nhập mật khẩu..." required>
                </td>
            </tr>
            <br>
            <tr>
                <td colspan="2" style="text-align:center">
                    <div>
                        <input class="input__login" style="min-width:300px; height:40px" type="submit" value="Đăng nhập" required>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>



