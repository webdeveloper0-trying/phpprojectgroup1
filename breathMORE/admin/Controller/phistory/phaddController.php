<?php
echo "Ok";

include "../../Model/dbConnection.php";


echo "<pre>";
print_r($result);



if (isset($_POST["addPatientReport"])) {
    $pid = $_POST["pid"];
    $date = $_POST["date"];
    $dnote = $_POST["dnote"];
    $refDoc = $_POST["refDoc"];
    $did = $_POST["did"];
    $sql = $pdo->prepare("
    INSERT INTO patient_history
    (
        patient_id,
        doctor_id,
        doctor_note,
        write_date,
        reported_by,
        created_date

    )VALUES
    (
        :patient_id,
        :doctor_id,
        :doctor_note,
        :write_date,
        :reported_by,
        :created_date

    )
");

    $sql->bindValue(":patient_id", $pid);
    $sql->bindValue(":doctor_id", $did);
    $sql->bindValue(":doctor_note", $dnote);
    $sql->bindValue(":write_date", $date);
    $sql->bindValue(":reported_by", $refDoc);
    $sql->bindValue(":created_date", date("Y/m/d"));
    $sql->execute();
    //return last id

    header("Location: ../../View/phistory/phlist.php");
} else {
    echo "ERR";
}
