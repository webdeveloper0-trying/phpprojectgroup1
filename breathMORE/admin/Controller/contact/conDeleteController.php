<?php

// echo "OK";
include "../../Model/dbConnection.php";
if (isset($_GET["id"])) {
    $conId = $_GET["id"];

    echo $conId;

    $sql = $pdo->prepare("
    UPDATE contact_us SET del_flag=1
    WHERE id=:id
    ");
    $sql->bindValue(":id", $conId);
    $sql->execute();

    header("Location: ../../View/contactUs/addContact.php");
}
