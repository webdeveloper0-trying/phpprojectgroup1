<?php
echo "BS OK";
include "../../Model/dbConnection.php";


if (isset($_POST["addPharmacy"])) {
    $pharmacyName = $_POST["pharmacyName"];
    $pharmacyPhoto = $_POST["pharmacyPhoto"];
    $pharmacyAdd = $_POST["pharmacyAdd"];
    $phNum = $_POST["phNum"];
    $township = $_POST["township"];



    $sql = $pdo->prepare("
    INSERT INTO pharmacy_lists
    (
        pharmacy_name,
        pharmacy_photo,
        pharmacy_address,
        ph_num,
        township,
        created_date
    )
    VALUES
    (
        :pharmacy_name,
        :pharmacy_photo,
        :pharmacy_address,
        :ph_num,
        :township,
        :created_date
    )
    ");

    $sql->bindValue(":pharmacy_name", $pharmacyName);
    $sql->bindValue(":pharmacy_photo", $pharmacyPhoto);
    $sql->bindValue(":pharmacy_address", $pharmacyAdd);
    $sql->bindValue(":ph_num", $phNum);
    $sql->bindValue(":township", $township);
    $sql->bindValue(":created_date", date("Y/m/d"));
    $sql->execute();

    header("Location: ../../View/pharmacy/listPharmacy.php");
} else {
    echo "Err";
}
