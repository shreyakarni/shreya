<?php
session_start();
unset($_SESSION['User name']);
unset($_SESSION['Passward']);
header("Location:user_login.php");
?>
