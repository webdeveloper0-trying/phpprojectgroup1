<?php

include "../../Model/dbConnection.php";

$sql = $pdo->prepare("
        SELECT * FROM disease_and_medicine_lists WHERE del_flg = 0;
");
$sql->execute();

$drugs = $sql->fetchAll(PDO::FETCH_ASSOC);




