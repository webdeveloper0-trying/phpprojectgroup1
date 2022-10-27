<?php

include "../../Model/dbConnection.php";



$sql = $pdo->prepare("
         SELECT * FROM patient_history  WHERE del_flg=0;
");

$sql = $pdo->prepare(" 
    SELECT * FROM patient_history INNER JOIN doctor_lists ON patient_history.doctor_id= doctor_lists.doctor_id
    ");

$sql->execute();


$patientLists = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($patientLists);
