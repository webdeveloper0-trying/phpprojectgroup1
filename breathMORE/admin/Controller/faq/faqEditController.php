<?php
// echo "Ok";

session_start();

include "../../Model/dbConnection.php";

if (isset($_GET["id"])) {
    $faqId = $_GET["id"];
    // echo  $faqId;

    $sql = $pdo->prepare("SELECT * FROM faq WHERE id=:faqId");

    $sql->bindValue(":faqId", $faqId);
    $sql->execute();

    $gotId = $sql->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($gotId);

    $_SESSION["faqRes"] = $gotId;

    header("Location: ../../View/faq/faqedit.php");
} else {

    echo "err";
}
