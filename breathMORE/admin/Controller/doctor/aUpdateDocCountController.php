<?php
session_start();
include "../../Model/dbConnection.php";



if (isset($_POST["aCount"])) {
   
    $aCount = $_POST["aCount"];
   
    $addCount = 5 - $_POST["aCount"];

    $sql = $pdo->prepare("
    UPDATE doctor_dutytime_lists SET 
    appointment_count=:addCount,
    updated_date=:updateDate
    WHERE appointment_count >= 5;
");
   
    $sql->bindValue(":addCount", $addCount);
    $sql->bindValue(":updateDate", date("Y/m/d"));
   
    $sql->execute();

   
    header("Location: ../../View/doctor/list.php");
} else {
    echo "ERR";
}
