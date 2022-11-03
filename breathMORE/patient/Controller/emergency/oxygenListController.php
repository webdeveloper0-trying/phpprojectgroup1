<?php

include "../../Model/dbConnection.php";


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Prepare for Execute
$sql = $pdo->prepare("SELECT name,ph_num,address,type_of_service
 FROM oxygen_lists WHERE del_flg = 0");

// Real Execute
$sql->execute();

// Receive Data From MySQL
$oxygenLists = $sql->fetchAll(PDO::FETCH_ASSOC);


