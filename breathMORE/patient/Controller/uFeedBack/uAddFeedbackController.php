<?php

include "../../Model/dbConnection.php";
session_start();
if (isset($_POST["fbSubmit"])) {
    $userId = $_SESSION["userId"];
    $fbMsg = $_POST["fbMsg"];
    $fbRating = $_POST["fbRating"];

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $pdo->prepare("INSERT INTO feedback(
        user_id,rating,feedback,created_date)
        VALUES(
        :userId,
        :rating,
        :feedback,
        :created_date                
        )");

    $sql->bindValue(":userId", $userId);
    $sql->bindValue(":rating", $fbRating);
    $sql->bindValue(":feedback", $fbMsg);
    $sql->bindValue(":created_date", date("Y/m/d"));
    $sql->execute();

    header("Location: ../../View/emergency/uEmergency.php");
} else {
    echo "NO";
}
