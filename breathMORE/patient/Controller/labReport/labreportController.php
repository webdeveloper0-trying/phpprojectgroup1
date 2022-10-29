<?php
session_start();
include "../../Model/dbConnection.php";
$userId =  $_SESSION["userId"];
$sql = $pdo->prepare("SELECT * FROM
patient_history  WHERE patient_id= :userId");
$sql->bindValue(":userId", $userId);
$sql->execute();
$patientinfo = $sql->fetchAll(PDO::FETCH_ASSOC);

$patientid = $patientinfo[0]["patient_id"];
$sql = $pdo->prepare("SELECT * FROM
lab_reports WHERE patient_id = :id");
$sql->bindValue(":id", $patientid);
$sql->execute();
$labList = $sql->fetchAll(PDO::FETCH_ASSOC);
