<?php


include "../../Model/dbConnection.php";


// Pagination
$rowLimit1 = 5;
$rowLimit2 = 5;
$page1 = (isset($_GET["page1"])) ?  $_GET["page1"] : 1;
$page2 = (isset($_GET["page2"])) ?  $_GET["page2"] : 1;

$startPage1 = ($page1 - 1) * $rowLimit1;
$startPage2 = ($page2 - 1) * $rowLimit2;

session_start();
// Profile Inofo
$userId = $_SESSION["userId"];
$sql1 = $pdo->prepare("SELECT * FROM total_registered_accounts WHERE  register_id=:userId");
$sql1->bindValue(":userId", $userId);
$sql1->execute();

$userInfo = $sql1->fetchAll(PDO::FETCH_ASSOC);


// Patient History
$sql2 = $pdo->prepare("SELECT * FROM
patient_history  WHERE patient_id= :userId");
$sql2->bindValue(":userId", $userId);
$sql2->execute();
$patientinfo = $sql2->fetchAll(PDO::FETCH_ASSOC);

if (count($patientinfo) !== 0) {
        $patientid = $patientinfo[0]["patient_id"];
        $sql3 = $pdo->prepare("SELECT * FROM
         online_appointments_lists WHERE patient_id = :id AND del_flg=0 LIMIT $startPage1, $rowLimit1");
        $sql3->bindValue(":id", $patientid);
        $sql3->execute();
        $patientHistory = $sql3->fetchAll(PDO::FETCH_ASSOC);

        // Lab Report

        $sql4 = $pdo->prepare("SELECT * FROM
lab_reports WHERE patient_id = :id AND del_flg=0 LIMIT $startPage2, $rowLimit2");
        $sql4->bindValue(":id", $patientid);
        $sql4->execute();
        $labList = $sql4->fetchAll(PDO::FETCH_ASSOC);

        // Pagination 

        $sql5 = $pdo->prepare("
SELECT COUNT(id) As total FROM patient_history  WHERE del_flg=0;
");
        $sql5->execute();
        $totalRecord1 = $sql5->fetchAll(PDO::FETCH_ASSOC)[0]['total'];

        $totalPages1 = ceil($totalRecord1 / $rowLimit1);



        $sql6 = $pdo->prepare("
SELECT COUNT(id) As total FROM lab_reports WHERE del_flg=0;
");
        $sql6->execute();
        $totalRecord2 = $sql6->fetchAll(PDO::FETCH_ASSOC)[0]['total'];

        $totalPages2 = ceil($totalRecord2 / $rowLimit2);
}
