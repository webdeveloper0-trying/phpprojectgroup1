<?php
echo "OK EDIT";

session_start();

include "../../Model/dbConnection.php";

if (isset($_GET["id"])) {
    $bloodID = $_GET["id"];
    $sql = $pdo->prepare("SELECT * FROM blood_stock_lists WHERE id=:id");


    $sql->bindValue(":id", $bloodID);
    $sql->execute();

    $boodtyResult = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($boodtyResult);

    $_SESSION["bloodInfos"] = $boodtyResult;

    header("Location: ../../View/bloodStock/editBs.php");
} else {
    echo "ERR";
}
