<?php

include "../../Model/dbConnection.php";

// for pagination row

$rowLimit = 2;

$page = (isset($_GET["page"])) ? $_GET["page"] : 1;
$startPage = ($page - 1) * $rowLimit;


$sql = $pdo->prepare("
   
SELECT * FROM  blood_stock_lists WHERE del_flg=0 LIMIT $startPage,$rowLimit; 
   
");

$sql->execute();
$bloodLists = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($bloodLists);

$sql = $pdo->prepare("
SELECT blood_type,SUM(instock_now) AS totalblood FROM blood_stock_lists WHERE del_flg=0 GROUP BY blood_type;
;
");

$sql->execute();
$instockLists = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($instockLists);

$sql = $pdo->prepare("
        SELECT SUM(instock_now) AS totalinstock FROM blood_stock_lists WHERE del_flg=0;
");
$sql->execute();
$totalBloods = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($totalBloods);


//paginatin

$sql = $pdo->prepare("
SELECT COUNT(id) AS totalBloodID FROM blood_stock_lists WHERE del_flg=0;
");
$sql->execute();
$totalID = $sql->fetchAll(PDO::FETCH_ASSOC)[0]['totalBloodID'];

$totalPages = ceil($totalID / $rowLimit);
