<?php 
session_start();
unset($_SESSION["userId"]);
header("Location: ../../View/uRegisterLogin/login.php");
?>