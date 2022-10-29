<?php

session_start();

include "../../Model/dbConnection.php";

if (isset($_GET["id"])) {
    $patientId = $_GET["id"];
    echo $patientId;
    $sql = $pdo->prepare("SELECT * FROM lab_reports WHERE id=:labid");

    $sql->bindValue(":labid", $patientId);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($result);
    //  $_SESSION["docInfo"] docInfo is naming to assign $result val
    $_SESSION["pLabInfo"] = $result;



    header("Location: ../../View/labreport/editlab.php");
} else {
    // header("Location: ../../View/labreport/labList.php");
    echo "err";
}
