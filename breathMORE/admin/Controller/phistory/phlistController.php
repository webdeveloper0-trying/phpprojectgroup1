<?php

include "../../Model/dbConnection.php";
$rowLimit = 3;
$page = (isset($_GET["page"])) ? $_GET["page"] : 1;
$startPage = ($page - 1) * $rowLimit; //0


// $sql = $pdo->prepare("
//          SELECT * FROM patient_history  WHERE del_flg=0;
// ");

$sql = $pdo->prepare(" 
    SELECT * FROM patient_history INNER JOIN doctor_lists ON patient_history.refDocId= doctor_lists.doctor_id  LIMIT $startPage,$rowLimit; 
    ");

$sql->execute();

$patientLists = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($patientLists);


// $sql = $pdo->prepare(" 
//      SELECT * FROM patient_history INNER JOIN total_registered_accounts ON patient_history.patient_id= total_registered_accounts.register_id; 
//     ");

// $sql->execute();

// $patientInfos = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($patientInfos);


$sql = $pdo->prepare(" 
    SELECT COUNT(id) AS total FROM patient_history INNER JOIN doctor_lists ON patient_history.refDocId= doctor_lists.doctor_id; 
    ");


$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC)[0]['total'];
// echo $totalRecord;

$totalPages = ceil($totalRecord / $rowLimit);
