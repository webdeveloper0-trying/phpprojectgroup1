<?php


include "../../Model/dbConnection.php";


// Pagination
$rowLimit1 = 5;
$rowLimit2 = 5;
$rowLimit3 = 5;
$page1 = (isset($_GET["page1"])) ?  $_GET["page1"] : 1;
$page2 = (isset($_GET["page2"])) ?  $_GET["page2"] : 1;
$page3 = (isset($_GET["page3"])) ?  $_GET["page3"] : 1;

$startPage1 = ($page1 - 1) * $rowLimit1;
$startPage2 = ($page2 - 1) * $rowLimit2;
$startPage3 = ($page3 - 1) * $rowLimit3;


// Profile Inofo
$userId = $_SESSION["userId"];

$sql = $pdo->prepare("SELECT * FROM total_registered_accounts WHERE  register_id=:userId");
$sql->bindValue(":userId", $userId);
$sql->execute();

$userInfo = $sql->fetchAll(PDO::FETCH_ASSOC);


// Appointment History
$sql = $pdo->prepare("SELECT * FROM
online_appointments_lists  WHERE patient_id= :userId");
$sql->bindValue(":userId", $userId);
$sql->execute();
$patientinfo = $sql->fetchAll(PDO::FETCH_ASSOC);

if (count($patientinfo) !== 0) {
        $patientid = $patientinfo[0]["patient_id"];

        // Appointment History
        $sql = $pdo->prepare("SELECT * FROM
        online_appointments_lists LEFT JOIN  doctor_lists ON doctor_lists.doctor_id = online_appointments_lists.doctor_id
          WHERE online_appointments_lists.patient_id = :id AND online_appointments_lists.del_flg=0 AND doctor_lists.del_flg=0 LIMIT $startPage1, $rowLimit1");
        $sql->bindValue(":id", $patientid);
        $sql->execute();
        $patientHistory = $sql->fetchAll(PDO::FETCH_ASSOC);


        // Doctor Notes

        $sql = $pdo->prepare("SELECT * FROM
               patient_history LEFT JOIN  doctor_lists ON doctor_lists.doctor_id = patient_history.doctor_id
                 WHERE patient_history.del_flg=0 AND doctor_lists.del_flg=0 AND patient_history.patient_id = :id LIMIT $startPage1, $rowLimit1");
        $sql->bindValue(":id", $patientid);
        $sql->execute();
        $docNote = $sql->fetchAll(PDO::FETCH_ASSOC);


        // Lab Report

        $sql = $pdo->prepare("SELECT * FROM
lab_reports WHERE patient_id = :id AND del_flg=0 LIMIT $startPage2, $rowLimit2");
        $sql->bindValue(":id", $patientid);
        $sql->execute();
        $labList = $sql->fetchAll(PDO::FETCH_ASSOC);



        // Pagination 

        $sql = $pdo->prepare("
SELECT COUNT(id) As total FROM online_appointments_lists  WHERE del_flg=0;
");
        $sql->execute();
        $totalRecord1 = $sql->fetchAll(PDO::FETCH_ASSOC)[0]['total'];

        $totalPages1 = ceil($totalRecord1 / $rowLimit1);



        $sql = $pdo->prepare("
SELECT COUNT(id) As total FROM lab_reports WHERE del_flg=0;
");
        $sql->execute();
        $totalRecord2 = $sql->fetchAll(PDO::FETCH_ASSOC)[0]['total'];

        $totalPages2 = ceil($totalRecord2 / $rowLimit2);


        $sql = $pdo->prepare("
SELECT COUNT(id) As total FROM patient_history WHERE del_flg=0;
");
        $sql->execute();
        $totalRecord3 = $sql->fetchAll(PDO::FETCH_ASSOC)[0]['total'];

        $totalPages3 = ceil($totalRecord3 / $rowLimit3);
} else { ?>

        <script>
                document.getElementById("pHistory").style.display = `none`;
        </script>

<?php } ?>