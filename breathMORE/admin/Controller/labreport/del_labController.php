<?php

// echo "OK";
include "../../Model/dbConnection.php";
if (isset($_GET["id"])) {
    $labid = $_GET["id"];

    echo $labid;

    $sql = $pdo->prepare("
    UPDATE lab_reports SET del_flg=1
    WHERE id=:id
    ");
    $sql->bindValue(":id", $labid);
    $sql->execute();

    header("Location: ../../View/labreport/labList.php");
}
