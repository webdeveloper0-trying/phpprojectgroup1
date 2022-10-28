<?php
include "../../Model/dbConnection.php";

$sql = $pdo->prepare("
    SELECT * FROM pharmacy_lists WHERE del_flg=0;
");

$sql->execute();
$shopLists = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($shopLists);
