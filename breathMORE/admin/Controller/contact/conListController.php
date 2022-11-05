<?php

include "../../Model/dbConnection.php";

$sql = $pdo->prepare("
    SELECT * FROM contact_us  WHERE del_flag=0;
   
");

$sql->execute();
$conList = $sql->fetchAll(PDO::FETCH_ASSOC);


$sql = $pdo->prepare("
    SELECT * FROM contact_us  WHERE del_flag=0 ORDER BY id DESC LIMIT 1;
   
");

$sql->execute();
$uConList = $sql->fetchAll(PDO::FETCH_ASSOC);

