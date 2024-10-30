
<style>
        /* General styling for form */
form {
    width: 100%;
}

/* Style the table */
table {
    width: 400px;
    border: 2px solid var(--black-color);
    margin-top: 40px;
    margin-left: 500px;
    height: 200px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

/* Submit button */
.input__login {
    min-width: 300px;
    height: 40px;
    margin-top: 10px;
    background-color: var(--black-color);
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

/* Submit button hover effect */
.input__login:hover {
    background-color: #333;
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

/* Register link */
a[href*="dangki"] {
    color: var(--black-color);
    font-size: 14px;
    font-weight: 600;
    margin-left: 30px;
}

a[href*="dangki"]:hover {
    text-decoration: underline;
}

/* Extra styling */
.dangnhap__td {
    margin-top: 10px;
}


    </style>
<div>
    <form action="i" method="post" style="width:100%">
        <table style="width:400px; border:2px solid var(--black-color);margin-top:40px; margin-left:500px; height:200px ">
            <tr>
                <td colspan="2" style="text-align:center; font-size:17px; font-weight: 600">ĐĂNG KÍ</td>
            </tr>
            <tr>
                <td class="dangnhap__td" colspan="2">
                    <div>Tên đăng kí</div>
                </td>
            </tr>
            <tr>
                <td class="input__text" colspan="2">
                    <input style="width:390px; height:40px; margin-top:10px" type="email" name="tendangki" placeholder="abcde@gmail.com" required>
                </td>
            </tr>
            <tr>
                <td class="dangnhap__td">
                    <div style="margin-top:10px">Mật khẩu mới</div>
                </td>
            </tr>
            <tr>
                <td class="input__matkhau" colspan="2">
                    <input style="width:390px; height:40px;margin-top:10px" type="password" name="matkhaumoi" placeholder="Nhập mật khẩu..." required>
                </td>
            </tr>
            <tr>
                <td class="dangnhap__td">
                    <div style="margin-top:10px">Xác nhận mật khẩu mới</div>
                </td>
            </tr>
            <tr>
                <td class="input__matkhau" colspan="2">
                    <input style="width:390px; height:40px;margin-top:10px" type="password" name="xacnhanmatkhaumoi" placeholder="Nhập mật khẩu..." required>
                </td>
            </tr>
            <br>
            <tr>
                <td colspan="2" style="text-align:center">
                    <div>
                        <input class="input__login" style="min-width:300px; height:40px" type="submit" value="Đăng kí" required>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="index.php?pid=6&&page=dangnhap" style="color:var(--black-color); font-size:14px; margin-left:30px; font-weight:600">
                        Đăng nhập
                    </a>    
                </td>
            </tr>
        </table>
    </form>
</div>
