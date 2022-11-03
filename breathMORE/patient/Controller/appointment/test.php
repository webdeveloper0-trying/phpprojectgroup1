<?php 
include "../../Model/dbConnection.php";
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $sql = $pdo->prepare(
//     "INSERT INTO online_appointments_lists(
//        date,
//        time,
//        categories,
//        doctor_id,
//        patient_id,
//        ph_no,
//        diagnosis,
//        address,
//        created_date
      
//     )
//     VALUES
//     (
//         date('Y/m/d'),
//         '6:00am',
//         'eye',
//         45,
//         45,
//         09-123356789,
//         'ill',
//         'mandalay',
//         date('Y/m/d')     
//     );");

$sql = $pdo->prepare(
    "SELECT * FROM online_appointments_lists;");
    $docTakenInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql->execute();

    echo "SELECT";
    echo "<pre>";
    print_r($docTakenInfo);

 ?>