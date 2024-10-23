<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="base.css">
    <link rel="icon" href="image/Logo.png">
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/fontawesome-free-6.6.0/css/all.min.css">
    <link rel="stylesheet" href="">
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
</div>
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
                case 5: include('src_php/dangki.php');
                break;
                case 6: include('src_php/dangnhap.php');
                break;
                case 7: include('src_php/timkiem.php');
                break;
                case 8:  include('src_php/sanpham_loai.php');
                break;
                }
            }
            ?>
            </div>
        </header>
        <section class="section" style="height:500px">

        </section>
        <footer class="footer">
            <div class="footer__content">
                <table style="width:100%">
                    <tr>
                        <td class="footer__td" style="margin-left:50px">LIÊN HỆ VỚI CHÚNG TÔI</td>
                        <td class="footer__td" style="margin-left:50px">TÌM HIỂU THÊM VỀ BMW</td>
                    </tr>
                    <tr>
                        <td class="footer__td" style="margin-left:50px">Liên hệ tư vấn BMW</td>
                        <td class="footer__td" style="margin-left:50px">BMW Asia</td>
                    </tr>
                    <tr>
                        <td class="footer__td" style="margin-left:50px">Showroom BMW</td>
                        <td class="footer__td" style="margin-left:50px">BMW PresClub Asia</td>
                    </tr>
                    <tr>
                        <td class="footer__td" style="margin-left:50px">Tìm hiểu về BMW App</td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td>
                            <div>
                                <a href="#"><i class="fab fa-facebook-f">
                                    <?php echo '<img src="image/Facebook-color.png" style="width:30px;height:30px">' ?>
                                </i></a>
                                <a href="#"><i class="fab fa-instagram">
                                    <?php echo '<img src="image/Instagram-color.png" style="width:30px;height:30px">' ?>
                                </i></a>
                                <a href="#"><i class="fab fa-youtube">
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
