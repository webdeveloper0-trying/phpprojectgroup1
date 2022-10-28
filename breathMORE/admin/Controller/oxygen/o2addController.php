<?php

include "../../Model/dbConnection.php";
// echo "OK";
if (isset($_POST["addOxygen"])) {
    $oname =  $_POST["oname"];
    $odate =  $_POST["odate"];
    $ophnum =  $_POST["ophnum"];
    $oaddre =  $_POST["oaddre"];
    $otype =  $_POST["otype"];



    $sql = $pdo->prepare("
        INSERT INTO oxygen_lists
        (
        name,
        date,
        ph_num,
        address,
        type_of_service,
        created_date
        )
        VALUES
        (
        :name,
        :date,
        :ph_num,
        :address,
        :service,
        :created_date
        )
    ");

    $sql->bindValue(":name", $oname);
    $sql->bindValue(":date", $odate);
    $sql->bindValue(":ph_num", $ophnum);
    $sql->bindValue(":address", $oaddre);
    $sql->bindValue(":service",  $otype);
    $sql->bindValue(":created_date", date("Y/m/d"));
    $sql->execute();

    header("Location: ../../View/oxygen/o2list.php");
} else {
    echo "Error";
}
