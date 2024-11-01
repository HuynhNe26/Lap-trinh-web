<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống BMW</title>
    <link rel="stylesheet" href="admin_css.css">
    <link rel="stylesheet" href="admin_base.css">
    <link rel="stylesheet" href="src-quanli_php/menudoc.css">
    <link rel="stylesheet" href="src-quanli_php/thongke.css">
    <link rel="stylesheet" href="src-quanli_php/themsp.css">
    <link rel="stylesheet" href="src-quanli_php/quanliuser.css">
    <link rel="stylesheet" href="src-quanli_php/quanlidonhang.css">
    <link rel="stylesheet" href="src-quanli_php/chinhsuauser.css">
    <link rel="stylesheet" href="src-quanli_php/xoauser.css">
    <link rel="stylesheet" href="src-quanli_php/thongkeluotmua.css">
    <link rel="stylesheet" href="src-quanli_php/quanlisp.css">
    <link rel="stylesheet" href="src-quanli_php/chinhsuasp.css">
    <link rel="stylesheet" href="src-quanli_php/xoasp.css">
    <link rel="icon" href="../image/Logo.png">
    <script src="admin.js"></script> <!-- Note: Changed to script tag for JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    require_once 'admin.php';
    if (!isset($_SESSION['username_admin'])) {
        header('Location: login.php');
        exit(); // Ensure script stops execution after redirect
    } else {
    ?>
        <?php include('src-quanli_php/menudoc.php'); ?>
        <div class="main-content">
            <?php
            if (!isset($_GET['pid'])) {
                include('src-quanli_php/thongke.php');
            } else {
                $page_admin = $_GET['pid'];
                switch ($page_admin) {
                    case 1: include('src-quanli_php/quanlidonhang.php'); 
                    break;
                    case 2: include('src-quanli_php/thongkeluotmua.php'); 
                    break;
                    case 3: include('src-quanli_php/quanlisp.php'); 
                    break;
                    case 4: include('src-quanli_php/themsp.php'); 
                    break;
                    case 5: include('src-quanli_php/quanliuser.php'); 
                    break;
                    case 6: include('src-quanli_php/chinhsuauser.php'); 
                    break;
                    case 7: include('src-quanli_php/xoauser.php'); 
                    break;
                    case 8: include('src-quanli_php/chinhsuasp.php'); 
                    break;
                    case 9: include('src-quanli_php/xoasp.php'); 
                    break;
                }
            }
            ?>
        </div>
        <footer style="position:fixed; z-index:100">
            <marquee direction="right">Xin chào <?php echo $_SESSION['hovaten_admin']; ?>
        </footer>

    <?php
    }
    ?>
</body>
</html>
