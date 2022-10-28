<?php
// echo "OK";

include "../../Model/dbConnection.php";


if (isset($_POST["addLabReport"])) {
    $patient_id = $_POST["pid"];
    $refDoc = $_POST["refDoc"];
    $test = $_POST["test"];

    $result = $_POST["result"];
    $range = $_POST["range"];
    $unit = $_POST["unit"];

    $remark = $_POST["remark"];
    $repBy = $_POST["repBy"];
    $autBy = $_POST["autBy"];

    $resdate = $_POST["resdate"];

    $sql = $pdo->prepare("
    INSERT INTO lab_reports
    (
        patient_id,
        ref_doc,
        result_date,
        test,
        result,
        ref_rate,
        unit,
        remark,
        reported_by,
        authorised_by,
        created_date
    )VALUES
    (
        :patient_id,
        :ref_doc,
        :result_date,
        :test,
        :result,
        :ref_rate,
        :unit,
        :remark,
        :reported_by,
        :authorised_by,
        :created_date

    )
");

    $sql->bindValue(":patient_id", $patient_id);
    $sql->bindValue(":ref_doc", $refDoc);
    $sql->bindValue(":result_date", $resdate);
    $sql->bindValue(":test", $test);
    $sql->bindValue(":result", $result);
    $sql->bindValue(":ref_rate", $range);
    $sql->bindValue(":unit", $unit);
    $sql->bindValue(":remark", $remark);
    $sql->bindValue(":reported_by", $repBy);
    $sql->bindValue(":authorised_by", $autBy);
    $sql->bindValue(":created_date", date("Y/m/d"));
    $sql->execute();

    header("Location: ../../View/labreport/labList.php");
} else {
    echo "ERR";
}
