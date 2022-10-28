<?php
echo "ok";
include "../../Model/dbConnection.php";

if (isset($_POST["addDiseAndmedi"])) {
    $disName = $_POST["disname"];
    $medName = $_POST["medname"];

    $sql = $pdo->prepare("
    INSERT INTO disease_and_medicine_lists
    (
        disease_names,
        medicine_names,
        created_date
    )
    VALUES
    (
        :disease_names,
        :medicine_names,
        :created_date
    )
");

    $sql->bindValue(":disease_names", $disName);
    $sql->bindValue(":medicine_names", $medName);
    $sql->bindValue(":created_date", date("Y/m/d"));

    $sql->execute();

    header("Location: ../../View/diseAndmedi/addmedi.php");
} else {
    echo "ERR";
}
