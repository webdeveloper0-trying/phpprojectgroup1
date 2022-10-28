<?php
echo "OK";
session_start();
include "../../Model/dbConnection.php";

if (isset($_POST["updateDiseAndmedi"])) {
    $uid = $_POST["upId"];
    $disname = $_POST["updname"];
    $medname = $_POST["upmedname"];

    $sql = $pdo->prepare(
        "UPDATE disease_and_medicine_lists SET 
        disease_names=:dname,
        medicine_names=:mname,
        updated_date=:updateDate
        WHERE id=:id"
    );

    $sql->bindValue(":dname",  $disname);
    $sql->bindValue(":mname", $medname);
    $sql->bindValue(":updateDate", date("Y/m/d"));
    $sql->bindValue(":id", $uid);
    $sql->execute();

    header("Location: ../../View/diseAndmedi/addmedi.php");
} else {
    echo "ERR";
}
