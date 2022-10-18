<?php

session_start();

include "../../Model/dbConnection.php";

if (isset($_GET["id"])) {
    $docId = $_GET["id"];
    // $sql = $pdo->prepare("SELECT * FROM doctor_lists WHERE doctor_id=:id");

    $sql = $pdo->prepare("
    SELECT * FROM doctor_lists
    INNER JOIN  doctor_dutytime_lists
    ON doctor_lists.doctor_id=doctor_dutytime_lists.doc_id WHERE doctor_id=:id;
    ");

    $sql->bindValue(":id", $docId);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($result);
    //  $_SESSION["docInfo"] docInfo is naming to assign $result val
    $_SESSION["docInfo"] = $result;



    header("Location: ../../View/doctor/edit.php");
} else {
    header("Location: ../../View/doctor/list.php");
}
