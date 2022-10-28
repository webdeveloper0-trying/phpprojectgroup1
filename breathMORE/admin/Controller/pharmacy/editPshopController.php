<?php
echo "OK EDIT";

session_start();

include "../../Model/dbConnection.php";

if (isset($_GET["id"])) {
    $shopID = $_GET["id"];
    $sql = $pdo->prepare("SELECT * FROM pharmacy_lists WHERE id=:id");


    $sql->bindValue(":id", $shopID);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($result);

    $_SESSION["shopInfos"] = $result;

    header("Location: ../../View/pharmacy/editPharmacy.php");
} else {
    echo "err";
}
