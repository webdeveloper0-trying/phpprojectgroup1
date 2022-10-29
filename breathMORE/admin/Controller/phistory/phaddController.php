<?php


include "../../Model/dbConnection.php";
if (isset($_POST["addPatientReport"])) {
    $pid = $_POST["pid"];
    $date = $_POST["date"];
    $dnote = $_POST["dnote"];
    $typeIDdoc = $_POST["typeIDdoc"];
    $did = $_POST["did"];
    $sql = $pdo->prepare("
    INSERT INTO patient_history
    (
        patient_id,
        doctor_id,
        doctor_note,
        refDocID,
        write_date,
        created_date

    )VALUES
    (
        :patient_id,
        :doctor_id,
        :doctor_note,
        :refDocID,
        :write_date,
        :created_date

    );
");

    $sql->bindValue(":patient_id", $pid);
    $sql->bindValue(":doctor_id", $did);
    $sql->bindValue(":doctor_note", $dnote);
    $sql->bindValue(":refDocID", $typeIDdoc);
    $sql->bindValue(":write_date", $date);
    $sql->bindValue(":created_date", date("Y/m/d"));
    $sql->execute();
    //return last id

    header("Location: ../../View/phistory/phlist.php");
} else {
    echo "ERR";
}
