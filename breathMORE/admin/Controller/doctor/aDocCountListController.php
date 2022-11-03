<?php
include "../../Model/dbConnection.php";

$drowLimit = 3; //Set Row range which you want to place in a page


$dpage = (isset($_GET["dpage"])) ? $_GET["dpage"] : 1;
$dstartPage = ($dpage - 1) * $drowLimit; //0 ,if clicked 2,(2-1)*5=5

$sql = $pdo->prepare("
    SELECT * FROM doctor_lists
    INNER JOIN  doctor_dutytime_lists
    ON doctor_lists.doctor_id = doctor_dutytime_lists.doc_id
    WHERE doctor_dutytime_lists.appointment_count = :countAppointment AND doctor_lists.del_flg=0 AND doctor_dutytime_lists.del_flg=0 LIMIT $dstartPage,$drowLimit;  
"); //0,5 initial stage ,second stage 5,5,third 10,5

// echo "count".$_SESSION["countAppointment"];

$sql->bindValue(':countAppointment',5);
$sql->execute();
$docCountLists = $sql->fetchAll(PDO::FETCH_ASSOC);




//for pagination
$sql = $pdo->prepare("
SELECT COUNT(id) AS dtotal FROM doctor_lists
INNER JOIN  doctor_dutytime_lists
ON doctor_lists.doctor_id = doctor_dutytime_lists.doc_id
WHERE doctor_dutytime_lists.appointment_count = 5 AND doctor_lists.del_flg=0 AND doctor_dutytime_lists.del_flg=0;  
");

$sql->execute();
$dtotalRecord = $sql->fetchAll(PDO::FETCH_ASSOC)[0]['dtotal'];
// echo $totalRecord;

$dtotalPages = ceil($dtotalRecord / $drowLimit);
