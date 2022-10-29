<?php
include "../../Model/dbConnection.php";

$rowLimit = 4;
$page = (isset($_GET["page"])) ? $_GET["page"] : 1;
$startPage = ($page - 1) * $rowLimit; //0
$sql = $pdo->prepare("
    SELECT * FROM disease_and_medicine_lists  WHERE del_flg=0 LIMIT $startPage,$rowLimit; 
   
");

$sql->execute();
$dAndMList = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($dAndMList);
$sql = $pdo->prepare("
    SELECT COUNT(id) AS total FROM disease_and_medicine_lists  WHERE del_flg=0;
   
");


$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC)[0]['total'];
// echo $totalRecord;

$totalPages = ceil($totalRecord / $rowLimit);
