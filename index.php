<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BMW</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="base.css">
    <link rel="icon" href="image/Logo.png">
    <link rel="stylesheet" href="src_php/themsp.css">
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/fontawesome-free-6.6.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="index">
        <header class="header">
            <div class="header__navbar">
                <ul class="header__navbar-list" style="list-style:none;display:inline-flex;align-items:center">
                    <li class="header__navbar-item">
                        <a class="header__navbar-img" href="index.php?pid">
                        <?php
                        echo '<img class="header__navbar-img" src="image/Logo.png" alt="Logo BMW">';
                        ?>
                        </a>
                    </li>
                    <li class="header__navbar-item">
                        <?php
                        include("src_php/menungang.php");
                        ?>
                    </li>
                </ul>
</div>
        </header>
            <div>
            <?php
                if(!isset($_GET['pid'])) {
                    include('src_php/trangchu.php');
                }
            else {
                $pace=$_GET['pid'];
                switch ($pace)
                {
                case 1: include('src_php/sanpham.php');
                break;
                case 2: include('src_php/dangkilt.php');
                break;
                case 3: include('src_php/lienhe.php');
                break;
                case 4: include('src_php/datxe.php');
                break;
                case 5: include('src_php/login/dangki.php');
                break;
                case 6: include('src_php/login/dangnhap.php');
                break;
                case 7: include('src_php/timkiem.php');
                break;
                case 8: include('src_php/addgiohang.php');
                break;
                case 9: include('src_php/datxe-infor.php');
                break;
                case 10: include('src_php/xacnhan-datxe.php');
                break;
                case 11: include('src_php/check-giohang.php');
                break;
                }
            }
            ?>
            </div>
        <section class="section" style="height:750px">

        </section>
        <footer class="footer">
            <div class="footer__content">
                <table style="width:100%">
                    <tr>
                        <td class="footer__td" style="margin-left:50px">
                            LIÊN HỆ VỚI CHÚNG TÔI
                        </td>
                        <td class="footer__td" style="margin-left:50px">
                            TÌM HIỂU THÊM VỀ BMW
                        </td>
                    </tr>
                    <tr>
                            <td class="footer__td" style="margin-left:50px">
                                Liên hệ tư vấn BMW</td>
                            <td class="footer__td" style="margin-left:50px">
                            <a href="https://www.bmw.com/en/index.html" target="blank">
                                BMW Asia</td>
                            </a>
                    </tr>
                    <tr>
                            <td class="footer__td" style="margin-left:50px">
                                <a href="">
                                Showroom BMW
                                </a>
                            </td>
                            <td class="footer__td" style="margin-left:50px">
                                <a href="https://www.press.bmwgroup.com/asia" target="blanl">
                                BMW PresClub Asia
                                </a>
                            </td>
                    </tr>
                    <tr>
                        <td class="footer__td" style="margin-left:50px">
                            Tìm hiểu về BMW App
                        </td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td>
                            <div>
                                <a href="https://www.facebook.com/Official.BMWVietnam" target="_blank"><i class="fab fa-facebook-f">
                                    <?php echo '<img src="image/Facebook-color.png" style="width:30px;height:30px">' ?>
                                </i></a>
                                <a href="https://www.instagram.com/bmw_vietnam/" target="_blank"><i class="fab fa-instagram">
                                    <?php echo '<img src="image/Instagram-color.png" style="width:30px;height:30px">' ?>
                                </i></a>
                                <a href="https://www.youtube.com/BMWVietnamChannel" target="_blank"><i class="fab fa-youtube">
                                    <?php echo '<img src="image/Youtube-color.png" style="width:30px;height:30px">' ?>
                                </i></a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <table style="width:100%">
                    <tr>
                        <td style="text-align:center">
                            Từ chối trách nhiệm pháp lí
                        </td>
                        <td style="text-align:center">
                            Chính sách bảo mật
                        </td>
                        <td style="text-align:center">
                            Chính sách cookie
                        </td>
                        <td style="text-align:center">
                            Thông tin pháp lí
                        </td>
                    </tr>
                </table>
            </div>
        </footer>
    </div>
        
</body>
</html>
