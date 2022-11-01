<?php

session_start();
if (isset($_POST["userId"])) {
    $subscribeId = $_SESSION["userId"];

    include "../../Model/dbConnection.php";

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql1 = $pdo->prepare("SELECT sub_id FROM subscribe_for_newsletter
                        WHERE sub_id = :subId");

    $sql1->bindValue(":subId", $subscribeId);
    $sql1->execute();
    $subId = $sql1->fetchAll(PDO::FETCH_ASSOC);

    if (count($subId) == 0) {
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $pdo->prepare("INSERT INTO subscribe_for_newsletter(
                                    sub_id)
                                    VALUES(
                                    :subscribe                
                                    )");
    
        $sql->bindValue(":subscribe", $subscribeId);
        $sql->execute();
    }

   
} else {
    echo "NO";
}
