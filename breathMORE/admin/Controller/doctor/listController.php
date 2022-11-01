<?php
include "../../Model/dbConnection.php";

$rowLimit = 4; //Set Row range which you want to place in a page


$page = (isset($_GET["page"])) ? $_GET["page"] : 1;
$startPage = ($page - 1) * $rowLimit; //0 ,if clicked 2,(2-1)*5=5

$sql = $pdo->prepare("
    SELECT * FROM doctor_lists
    INNER JOIN  doctor_dutytime_lists
    ON doctor_lists.doctor_id=doctor_dutytime_lists.doc_id WHERE doctor_lists.del_flg=0 AND   doctor_dutytime_lists.del_flg=0 LIMIT $startPage,$rowLimit;  
"); //0,5 initial stage ,second stage 5,5,third 10,5

$sql->execute();
$doctorList = $sql->fetchAll(PDO::FETCH_ASSOC);




//for pagination
$sql = $pdo->prepare("
    SELECT COUNT(id) AS total FROM doctor_lists
    INNER JOIN  doctor_dutytime_lists
    ON doctor_lists.doctor_id=doctor_dutytime_lists.doc_id WHERE   doctor_lists.del_flg=0 AND   doctor_dutytime_lists.del_flg=0  ;
");

$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC)[0]['total'];
// echo $totalRecord;

$totalPages = ceil($totalRecord / $rowLimit);
