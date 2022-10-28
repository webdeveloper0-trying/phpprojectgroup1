<?php

include "../../Model/dbConnection.php";


$sql = $pdo->prepare("
         SELECT * FROM oxygen_lists  WHERE del_flg=0;
");

$sql->execute();

$oxygenList = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($oxygenList);
