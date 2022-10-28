<?php
session_start();

include "../../Model/dbConnection.php";

$userId =  $_SESSION["userId"];
$sql = $pdo->prepare("SELECT * FROM total_registered_accounts WHERE  register_id=:userId");
$sql->bindValue(":userId", $userId);
$sql->execute();

$patientinfo = $sql->fetchAll(PDO::FETCH_ASSOC);

