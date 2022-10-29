<?php
session_start();
// echo "<pre>";
// print_r($_SESSION["pList"]);
$docIds = $_SESSION["pList"];
$docArr = [];
foreach ($docIds as $key => $docId) {
    array_push($docArr, $docId['doctor_id']);
}

var_dump($docArr);

include "../../Model/dbConnection.php";
if (isset($_POST["addPatientReport"])) {
    $pid = $_POST["pid"];
    $date = $_POST["date"];
    $dnote = $_POST["dnote"];
    $typeIDdoc = $_POST["typeIDdoc"];
    $did = $_POST["typeIDdoc"];
    $include = false;
    for ($i = 0; $i < count($docArr); $i++) {
        if ($typeIDdoc == $docArr[$i]) {
            $include = true;
        }
    }
    if ($include) {



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
        header("Location: ../../View/phistory/phadd.php");
    }
} else {
    echo "ERR";
}
