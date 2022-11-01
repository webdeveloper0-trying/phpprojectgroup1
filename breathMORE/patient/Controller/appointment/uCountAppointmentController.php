
<?php

include "../../Model/dbConnection.php";

$sql = $pdo->prepare("
SELECT COUNT(id) FROM online_appointments_lists WHERE del_flg = 0 AND created_date = :today;
");
$sql->bindValue(":today", date("Y/m/d"));
$sql->execute();

$todayACount = $sql->fetchAll(PDO::FETCH_ASSOC);

// print_r ($appointmentCount);

$sql = $pdo->prepare("
SELECT COUNT(id) FROM online_appointments_lists WHERE del_flg = 0;
");

$sql->execute();

$totalACount = $sql->fetchAll(PDO::FETCH_ASSOC);






