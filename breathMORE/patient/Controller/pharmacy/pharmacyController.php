<?php
include "../../Model/dbConnection.php";
if (isset($_POST["searchtownship"])) {
    $search = $_POST["searchtownship"];
    $sql = $pdo->prepare("SELECT * FROM pharmacy_lists WHERE  township LIKE :township ");
    $sql->bindValue(":township", "%" . $search . "%");
    $sql->execute();
    $Township = $sql->fetchAll(PDO::FETCH_ASSOC);

    // print_r($diseases);
    echo json_encode($Township);
}
