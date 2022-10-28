<?php

// echo "OK";
include "../../Model/dbConnection.php";
if (isset($_GET["id"])) {
    $bloodId = $_GET["id"];

    echo $bloodId;

    $sql = $pdo->prepare("
    UPDATE blood_stock_lists SET del_flg=1
    WHERE id=:id
    ");
    $sql->bindValue(":id", $bloodId);
    $sql->execute();

    header("Location: ../../View/bloodStock/listBs.php");
}
