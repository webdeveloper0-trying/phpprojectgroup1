<?php

include "../../Model/dbConnection.php";


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Prepare for Execute
$sql = $pdo->prepare("SELECT blood_type,rhd 
FROM blood_donar_lists");

// Real Execute
$sql->execute();

// Receive Data From MySQL
$donations = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("SELECT user_name,user_email,ph_num,date_of_birth,gender 
FROM blood_donar_lists
LEFT JOIN total_registered_accounts
ON blood_donar_lists.register_id = total_registered_accounts.register_id;");

// Real Execute
$sql->execute();

// Receive Data From MySQL
$donatorInfos = $sql->fetchAll(PDO::FETCH_ASSOC);

