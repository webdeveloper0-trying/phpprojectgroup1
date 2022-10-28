<?php
// echo "ok";
session_start();
include "../../Model/dbConnection.php";
if (isset($_GET["id"])) {
    $oId = $_GET["id"];
    echo $oId;
    //prepare
    $sql = $pdo->prepare("SELECT * FROM oxygen_lists WHERE id=:id");
    $sql->bindValue(":id", $oId);

    $sql->execute();

    $oxygenRes = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($oxygenRes);
    $_SESSION["oxygenInfo"] = $oxygenRes;
    header("Location: ../../View/oxygen/o2edit.php");
} else {
    echo "err";
}
