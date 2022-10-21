<?php

include "../../Model/dbConnection.php";
if (isset($_GET["id"])) {
    $docId = $_GET["id"];

    echo $docId;

    $sql = $pdo->prepare("
    UPDATE doctor_lists SET del_flg=1
    WHERE doctor_id=:id
    ");
    $sql->bindValue(":id", $docId);
    $sql->execute();

    $sql = $pdo->prepare("
    UPDATE doctor_dutytime_lists SET del_flg=1
    WHERE doc_id=:id
    ");
    $sql->bindValue(":id", $docId);
    $sql->execute();


    header("Location: ../../View/doctor/list.php");
}
