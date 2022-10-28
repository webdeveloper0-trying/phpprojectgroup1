<?php

session_start();

include "../../Model/dbConnection.php";


if (isset($_POST["editOxygen"])) {
    $oname = $_POST["oname"];
    $odate = $_POST["odate"];
    $onum = $_POST["onum"];

    $otype = $_POST["otype"];
    $oaddre = $_POST["oaddre"];

    $upid = $_POST["upid"];


    $sql = $pdo->prepare(
        "UPDATE oxygen_lists SET 
            name=:name,
            date=:date,
            ph_num=:phnum,
            address=:addre,
            type_of_service=:tos,
            updated_date=:updateDate
        WHERE id=:id"
    );

    $sql->bindValue(":name", $oname);
    $sql->bindValue(":date", $odate);
    $sql->bindValue(":phnum", $onum);
    $sql->bindValue(":addre", $oaddre);
    $sql->bindValue(":tos", $otype);
    $sql->bindValue(":updateDate", date("Y/m/d"));
    $sql->bindValue(":id", $upid);

    $sql->execute();

    header("Location: ../../View/oxygen/o2list.php");
} else {
    echo "ERR";
}
