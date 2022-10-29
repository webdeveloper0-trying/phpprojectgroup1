<?php

include "../../Model/dbConnection.php";



$sql = $pdo->prepare("
   
SELECT * FROM  daily_msg WHERE del_flg=0 ORDER BY id DESC LIMIT 1; 
   
");

$sql->execute();
$dailyMsg = $sql->fetchAll(PDO::FETCH_ASSOC);

