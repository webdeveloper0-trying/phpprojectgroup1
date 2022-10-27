<?php

include "../../Model/dbConnection.php";
if (isset($_POST["searchtext"])) {
    $search = $_POST["searchtext"];

    // echo $search;
    $sql = $pdo->prepare("SELECT * FROM disease_and_medicine_lists WHERE disease_names LIKE :disease ");
    $sql->bindValue(":disease", "%" . $search . "%");
    $sql->execute();
    $diseases = $sql->fetchAll(PDO::FETCH_ASSOC);

    // print_r($diseases);
    echo json_encode($diseases);
}
