<?php
include "../../Model/dbConnection.php";

$sql = $pdo->prepare("
SELECT * FROM faq WHERE del_flg=0;
 ");

$sql->execute();
$faqlists = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($faqlists);
