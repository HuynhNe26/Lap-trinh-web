<?php
session_start();
session_destroy();
// Xóa cookie bằng cách thiết lập thời gian sống của nó là một thời điểm trong quá khứ
setcookie("username", "", time() - 3600, "/");
header("Location: login.php");
exit();
?>
