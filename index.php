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
                    <li class="header__navbar-item">
                        <?php
                        include("src_php/timkiem.php");
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
                }
            }
            ?>
            </div>
        </header>
    </div>
        
</body>
</html>