<?php
include "../../Model/dbConnection.php";


if (isset($_GET["id"])) {
    echo $_GET["id"];
    $feedbackId = $_GET["id"];


    $sql = $pdo->prepare("
    UPDATE feedback SET del_flg = 1
    WHERE id=:id;");


    $sql->bindValue(':id', $feedbackId);
    $sql->execute();


    header("Location:../../View/feedback/aFeedbackList.php");
}
