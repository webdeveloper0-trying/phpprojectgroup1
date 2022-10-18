<?php
include "../../Model/dbConnection.php";

$sql = $pdo->prepare("
    SELECT 
    doctor_lists.doctor_id,
    doctor_dutytime_lists.doc_id,
    doctor_name,doctor_gender,doctor_sama,doctor_bachelar,center,ph_num,
    day,start_time,end_time
    FROM doctor_lists
    INNER JOIN  doctor_dutytime_lists
    ON doctor_lists.doctor_id=doctor_dutytime_lists.doc_id WHERE   doctor_lists.del_flg=0 AND   doctor_dutytime_lists.del_flg=0 ;
");

$sql->execute();
$doctorList = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($doctorList);
