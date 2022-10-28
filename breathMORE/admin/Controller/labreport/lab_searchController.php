<?php
// echo "OK";
include "../../Model/dbConnection.php";

if (isset($_POST["searchText"])) {
    $searchNum = $_POST["searchText"];
    // echo $searchNum;
    $sql = $pdo->prepare(" 
        SELECT * FROM total_registered_accounts WHERE register_id  LIKE :regid");
    $sql->bindValue(":regid", "%" . $searchNum . "%");
    $sql->execute();
    $pinfoList = $sql->fetchAll(PDO::FETCH_ASSOC);
    // print_r($pinfoList);
    echo json_encode($pinfoList);
}
