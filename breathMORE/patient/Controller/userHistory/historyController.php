<?php

session_start();
include "../Model/dbConnect.php";
$name = $_SESSION["username"];
$sql = $pdo->prepare("SELECT patient_id FROM
patient_history  WHERE user_name= :name");
$sql->bindValue(":name", $name);
$sql->execute();
$patientinfo = $sql->fetchAll(PDO::FETCH_ASSOC);

$patientid = $patientinfo[0]["patient_id"];
$sql = $pdo->prepare("SELECT * FROM
 online_appointments_lists WHERE patient_id = :id");
$sql->bindValue(":id", $patientid);
$sql->execute();
$patientHistory = $sql->fetchAll(PDO::FETCH_ASSOC);
