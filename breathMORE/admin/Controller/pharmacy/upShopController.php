<?php
echo "ok";
session_start();
include "../../Model/dbConnection.php";

if (isset($_POST["upPharmacy"])) {
    $upharmacyName = $_POST["upharmacyName"];
    $upharmacyPhoto = $_POST["upharmacyPhoto"];
    $upharmacyAdd = $_POST["upharmacyAdd"];
    $uphNum = $_POST["uphNum"];
    $utownship = $_POST["utownship"];

    $upid = $_POST["upid"];

    $sql = $pdo->prepare(
        "UPDATE pharmacy_lists SET 
            pharmacy_name=:pharmacy_name,
            pharmacy_photo=:pharmacy_photo,
            pharmacy_address=:pharmacy_address,
            ph_num=:ph_num,
            township=:township,
            updated_date=:updateDate
        WHERE id=:upid"
    );

    $sql->bindValue(":pharmacy_name", $upharmacyName);
    $sql->bindValue(":pharmacy_photo", $upharmacyPhoto);
    $sql->bindValue(":pharmacy_address", $upharmacyAdd);
    $sql->bindValue(":ph_num", $uphNum);
    $sql->bindValue(":township", $utownship);
    $sql->bindValue(":updateDate", date("Y/m/d"));
    $sql->bindValue(":upid", $upid);

    $sql->execute();

    header("Location: ../../View/pharmacy/listPharmacy.php");
} else {
    echo "ERR";
}
