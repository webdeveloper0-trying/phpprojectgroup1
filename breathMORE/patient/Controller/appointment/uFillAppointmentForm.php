<?php

include "../../Model/dbConnection.php";

session_start();


$_SESSION["userId"] = 2;

$userId = $_SESSION["userId"];

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Prepare for Execute
$sql = $pdo->prepare("
SELECT register_id,user_name,user_email,ph_num,
date_of_birth,gender 
FROM total_registered_accounts
WHERE register_id = :userId;
");

$sql->bindValue(':userId', $userId);


// Real Execute
$sql->execute();


$userInfos = $sql->fetchAll(PDO::FETCH_ASSOC);

