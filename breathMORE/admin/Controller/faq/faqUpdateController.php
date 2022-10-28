<?php
// echo "ok";
session_start();
include "../../Model/dbConnection.php";

if (isset($_POST["upFaq"])) {
    $upque = $_POST["upque"];
    $upans = $_POST["upans"];
    $upId = $_POST["upid"];

    $sql = $pdo->prepare(
        "UPDATE faq SET 
            question=:que,
            answer=:ans,
            updated_date=:updateDate
        WHERE id=:upid"
    );

    $sql->bindValue(":que", $upque);
    $sql->bindValue(":ans", $upans);
    $sql->bindValue(":updateDate", date("Y/m/d"));
    $sql->bindValue(":upid", $upId);

    $sql->execute();

    header("Location: ../../View/faq/faqAdd.php");
} else {
    echo "ERR";
}
