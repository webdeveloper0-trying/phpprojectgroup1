<?php 

include "../../Model/dbConnection.php";

$rowLimit = 5;
$page = (isset($_GET["page"])) ?  $_GET["page"] : 1;

$startPage = ($page-1)*$rowLimit;

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Prepare for Execute
$sql = $pdo->prepare("SELECT date,time,categories,diagnosis,address,user_name,user_email,ph_num,age,gender
FROM online_appointments_lists
LEFT JOIN total_registered_accounts
ON online_appointments_lists.patient_id = total_registered_accounts.register_id LIMIT $startPage, $rowLimit
;");

// Real Execute
$sql->execute();

// Receive Data From MySQL
$appointments1 = $sql->fetchAll(PDO::FETCH_ASSOC);

// Prepare for Execute
$sql = $pdo->prepare("SELECT doctor_name
FROM doctor_lists
LEFT JOIN online_appointments_lists
ON doctor_lists.doctor_id =online_appointments_lists.doctor_id LIMIT $startPage, $rowLimit
;");

// Real Execute
$sql->execute();

// Receive Data From MySQL
$appointments2 = $sql->fetchAll(PDO::FETCH_ASSOC);



$sql = $pdo->prepare("
        SELECT COUNT(id) As total FROM online_appointments_lists  
");
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC)[0]['total'];

$totalPages = ceil($totalRecord/$rowLimit); 


