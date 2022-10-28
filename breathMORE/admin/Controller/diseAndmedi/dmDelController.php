<?php

include "../../Model/dbConnection.php";
if (isset($_GET["id"])) {
    $dAndm = $_GET["id"];

    echo   $dAndm;

    $sql = $pdo->prepare("
    UPDATE disease_and_medicine_lists SET del_flg=1
    WHERE id=:id
    ");
    $sql->bindValue(":id", $dAndm);
    $sql->execute();


    header("Location: ../../View/diseAndmedi/addmedi.php");
}
