<?php
// echo "ok";

include "../../Model/dbConnection.php";
if (isset($_POST["addFaq"])) {
    $que = $_POST["que"];
    $ans = $_POST["ans"];

    $sql = $pdo->prepare("
    INSERT INTO faq
    (
        question,
        answer,
        created_date
    )
    VALUES
    (
        :question,
        :answer,
        :created_date
    )
    ");

    $sql->bindValue(":question", $que);
    $sql->bindValue(":answer", $ans);
    $sql->bindValue(":created_date", date("Y/m/d"));


    $sql->execute();

    header("Location: ../../View/faq/faqAdd.php");
} else {
    echo "Err";
}
