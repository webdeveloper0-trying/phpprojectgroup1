<?php

if (isset($_POST["searchText"])) {
    $center = $_POST["searchText"];

    include "../../Model/dbConnection.php";


    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $pdo->prepare(" SELECT doctor_id,doctor_name
    FROM doctor_lists
    WHERE center= :center AND del_flg = 0");

    $sql->bindValue(":center", $center);
    $sql->execute();
    $doctorCenters = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($doctorCenters);
}else{
    echo "NOT RECEIVED1";
    print_r(isset($_POST["searchText"]));
}
