<?php
include "../../Model/dbConnection.php";

$sql = $pdo->prepare("
    SELECT * FROM lab_reports WHERE del_flg=0;
");

$sql->execute();
$labList = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($labList);
