<?php
echo "Ok";

include "../../Model/dbConnection.php";
if (isset($_POST["updateLab"])) {

    $pid = $_POST["pid"];
    $refdoc = $_POST["refdoc"];

    $resDate = $_POST["resDate"];
    $test = $_POST["test"];
    $res = $_POST["res"];
    $unit = $_POST["unit"];
    $rem = $_POST["rem"];
    $repo = $_POST["repo"];
    $autho = $_POST["autho"];
    $rfrate = $_POST["rfrate"];
    $upid = $_POST["upid"];

    $sql = $pdo->prepare(
        "UPDATE lab_reports SET 
        patient_id=:pid,
        ref_doc=:refdoc,
        result_date=:resdate,
        test=:test,
        result=:res,
        ref_rate=:refrate,
        unit=:unit,
        remark=:remark,
        reported_by=:repo,
        authorised_by=:autho,
        updated_date=:updateDate
        WHERE id=:id"
    );

    $sql->bindValue(":pid", $pid);
    $sql->bindValue(":refdoc", $refdoc);
    $sql->bindValue(":resdate", $resDate);
    $sql->bindValue(":test", $test);
    $sql->bindValue(":res", $res);
    $sql->bindValue(":refrate", $rfrate);

    $sql->bindValue(":unit",  $unit);
    $sql->bindValue(":remark", $rem);
    $sql->bindValue(":repo", $repo);
    $sql->bindValue(":autho", $autho);
    $sql->bindValue(":updateDate", date("Y/m/d"));
    $sql->bindValue(":id", $upid);
    $sql->execute();

    header("Location: ../../View/labreport/labList.php");
} else {
    echo "Error";
}
