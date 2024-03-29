<?php
session_start();
unset($_SESSION['Name']);
unset($_SESSION['Passward']);
header("Location:admin_login.php");
?>
