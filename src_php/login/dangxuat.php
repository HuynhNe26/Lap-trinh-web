<?php
session_start();
session_unset();
session_destroy();
header("Location: /project_webBMW/index.php");
exit();

