<?php
echo "OK EDIT";

session_start();

include "../../Model/dbConnection.php";

if (isset($_GET["id"])) {
    $dmID = $_GET["id"];
    $sql = $pdo->prepare("SELECT * FROM disease_and_medicine_lists WHERE id=:id");


    $sql->bindValue(":id", $dmID);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($result);

    $_SESSION["dAndmeInfos"] = $result;

    header("Location: ../../View/diseAndmedi/editmedi.php");
} else {
    header("Location: ../../View/diseAndmedi/addmedi.php");
}
