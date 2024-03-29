<?php
session_start();
unset($_SESSION['admin_name']);
unset($_SESSION['password']);
header("Location:admin_login.php");
?>
