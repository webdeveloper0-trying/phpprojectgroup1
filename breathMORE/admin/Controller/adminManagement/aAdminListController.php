<?php 

include "../../Model/dbConnection.php";


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Prepare for Execute
$sql = $pdo->prepare("SELECT * FROM admin_management WHERE del_flg = 0");

// Real Execute
$sql->execute();

// Receive Data From MySQL
$admins = $sql->fetchAll(PDO::FETCH_ASSOC);

