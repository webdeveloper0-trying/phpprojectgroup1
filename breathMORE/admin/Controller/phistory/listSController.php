<?php


include "../../Model/dbConnection.php";

if (isset($_POST["searchid"])) {
    $pid = $_POST["searchid"];

    $sql = $pdo->prepare(" 
    SELECT * FROM patient_history INNER JOIN doctor_lists ON patient_history.refDocId= doctor_lists.doctor_id  WHERE patient_history.patient_id LIKE :pid 
    ");
    $sql->bindValue(":pid", "%" . $pid . "%");
    $sql->execute();
    $pList1 = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["pList"] = $pList1;

    echo json_encode($pList1);
}
