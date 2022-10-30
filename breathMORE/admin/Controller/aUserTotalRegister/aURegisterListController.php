<?php 

include "../../Model/dbConnection.php";

$rowLimit = 5;
$page = (isset($_GET["page"])) ?  $_GET["page"] : 1;

$startPage = ($page-1)*$rowLimit;


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Prepare for Execute
$sql = $pdo->prepare("SELECT * FROM total_registered_accounts WHERE del_flg = 0 LIMIT $startPage, $rowLimit");

// Real Execute
$sql->execute();

// Receive Data From MySQL
$regLists = $sql->fetchAll(PDO::FETCH_ASSOC);


$sql = $pdo->prepare("
        SELECT COUNT(id) As total FROM blogs WHERE del_flg = 0  
");
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC)[0]['total'];

$totalPages = ceil($totalRecord/$rowLimit); 

