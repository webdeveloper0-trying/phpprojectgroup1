<?php
session_start();
include "../../Model/dbConnection.php";

if (isset($_POST["aCount"]) && isset($_POST["docId"])) {
   
    $aCount = $_POST["aCount"];
    $docId = $_POST["docId"];
    $addCount = $_SESSION["countAppointment"] - $_POST["aCount"];

    $sql = $pdo->prepare("
    UPDATE doctor_dutytime_lists SET 
    appointment_count=:addCount,
    updated_date=:updateDate
    WHERE doc_id=:docId
");
   
    $sql->bindValue(":addCount", $addCount);
    $sql->bindValue(":updateDate", date("Y/m/d"));
    $sql->bindValue(":docId", $docId);
    $sql->execute();

    // header("Location: ../../View/doctor/list.php");
    header("Location: ../../View/doctor/list.php");
} else {
    echo "ERR";
}
