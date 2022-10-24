<?php


session_start();
if (isset($_POST["userId"])) {
    $subId = $_SESSION["userId"];

    include "../../Model/dbConnection.php";

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $pdo->prepare("INSERT INTO subscribe_for_newsletter(
        sub_id
    )
    VALUES
    (
        :subId                
    )");

    $sql->bindValue(":subId", $subId);
    $sql->execute();
    
}else{
    echo "NO";
}
