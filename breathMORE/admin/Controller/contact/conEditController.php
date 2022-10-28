<?php
// echo "Ok";

session_start();

include "../../Model/dbConnection.php";

if (isset($_GET["id"])) {
    $conId = $_GET["id"];
    echo  $conId;

    $sql = $pdo->prepare("SELECT * FROM contact_us WHERE id=:faqId");

    $sql->bindValue(":faqId", $conId);
    $sql->execute();

    $gotId = $sql->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($gotId);

    $_SESSION["contactS"] = $gotId;

    header("Location: ../../View/contactUs/editContact.php");
} else {

    echo "err";
}
