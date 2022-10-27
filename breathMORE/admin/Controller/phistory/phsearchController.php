<?php

session_start();

include "../../Model/dbConnection.php";

if (isset($_POST["searchid"])) {
    $pid = $_POST["searchid"];

    $sql = $pdo->prepare(" 
    SELECT * FROM online_appointments_lists INNER JOIN total_registered_accounts ON online_appointments_lists.patient_id=total_registered_accounts.register_id WHERE online_appointments_lists.patient_id LIKE :pid 
    ");
    $sql->bindValue(":pid", "%" . $pid . "%");
    $sql->execute();
    $pList1 = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["pList"] = $pList1;

    echo json_encode($pList1);
    // header("Location: ../phistory/newController.php");

    // $sql = $pdo->prepare(" 
    // SELECT * FROM doctor_lists WHERE doctor_id=:pid
    // ");
    // $sql->bindValue(":pid", $pList1[0]["doctor_id"]);

    // $sql->execute();
    // $pList2 = $sql->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($pList2);


}
