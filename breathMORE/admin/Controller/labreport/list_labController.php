<?php
include "../../Model/dbConnection.php";

$rowLimit = 4;
$page = (isset($_GET["page"])) ? $_GET["page"] : 1;
$startPage = ($page - 1) * $rowLimit; //0 


$sql = $pdo->prepare("
SELECT * FROM lab_reports
INNER JOIN  total_registered_accounts
ON  lab_reports.patient_id=total_registered_accounts.register_id WHERE  lab_reports.del_flg=0 AND   total_registered_accounts.del_flg=0 LIMIT $startPage,$rowLimit; 
");

$sql->execute();
$labList = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($labList);


$sql = $pdo->prepare("
SELECT COUNT(id) AS total  FROM lab_reports
INNER JOIN  total_registered_accounts
ON  lab_reports.patient_id=total_registered_accounts.register_id WHERE  lab_reports.del_flg=0 AND   total_registered_accounts.del_flg=0; 
");

$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC)[0]['total'];
// echo $totalRecord;

$totalPages = ceil($totalRecord / $rowLimit);
