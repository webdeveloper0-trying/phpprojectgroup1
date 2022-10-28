<?php
// echo "ok";
session_start();
include "../../Model/dbConnection.php";

if (isset($_POST["upContactUs"])) {
    $uPhnum = $_POST["uPhnum"];
    $ufb = $_POST["ufb"];
    $uyt = $_POST["uyt"];
    $uID = $_POST["uID"];
    $utele = $_POST["utele"];


    $sql = $pdo->prepare(
        "UPDATE contact_us SET 
            website_phno=:ph,
            facebook=:fb,
            youtube=:yt,
            telegram=:te,
            updated_date=:updateDate
        WHERE id=:upid"
    );

    $sql->bindValue(":ph", $uPhnum);
    $sql->bindValue(":fb", $ufb);
    $sql->bindValue(":yt", $uyt);
    $sql->bindValue(":te", $utele);
    $sql->bindValue(":updateDate", date("Y/m/d"));
    $sql->bindValue(":upid", $uID);

    $sql->execute();

    header("Location: ../../View/contactUs/addContact.php");
} else {
    echo "ERR";
}
