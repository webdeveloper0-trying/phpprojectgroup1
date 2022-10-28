<?php

session_start();

include "../../Model/dbConnection.php";

if (isset($_SESSION["pList"])) {
    $npid = $_SESSION["pList"];
    echo "<pre>";
    print_r($npid);


    $sql = $pdo->prepare("SELECT doctor_id,doctor_name FROM doctor_lists WHERE doctor_id=:did");

    $sql->bindValue(":did", $npid[0]["doctor_id"]);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    // $_SESSION["dname"] = $result;
}
