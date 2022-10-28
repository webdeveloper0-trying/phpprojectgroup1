<?php

include "../../Model/dbConnection.php";

$sql = $pdo->prepare("
    SELECT * FROM contact_us  WHERE del_flag=0;
   
");

$sql->execute();
$conList = $sql->fetchAll(PDO::FETCH_ASSOC);
