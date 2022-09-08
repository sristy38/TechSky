<?php
session_start();
unset($_SESSION['ADMIN_LOGIN']);
unset($_SESSION['ADMIN_USERNAME']);
header('location:../admin_log_panel/indexlogreg2.php');
die();
?>