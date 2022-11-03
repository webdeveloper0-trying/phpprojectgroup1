<?php

session_start();

include "../../Model/dbConnection.php";


if (isset($_POST["updateBstock"])) {
    $upbdate = $_POST["upbdate"];
    $preUsed = $_POST["preUsed"];

    $upUsed = $_POST["upUsed"] + $preUsed; //2
    $upBinstock =  $_POST["upPre"] - $upUsed;
    // echo $upBinstock;
    if ($upBinstock < 0) {
        header("Location: ../../View/bloodStock/listBs.php");
    } else {


        $upbloodtypes = $_POST["upbloodtypes"];

        $upPre = $_POST["upPre"];//10
        
        $upAvg = $_POST["upAvg"];

        $upId = $_POST["upId"];


        $sql = $pdo->prepare(
            "UPDATE blood_stock_lists SET 
            blood_date=:blood_date,
            instock_now=:instock_now,
            blood_type=:blood_type,
            previous_stock=:previous_stock,
            used_quantity=:used_quantity,
            average_range=:average_range,
            updated_date=:updateDate
        WHERE id=:id"
        );

        $sql->bindValue(":blood_date", $upbdate);
        $sql->bindValue(":instock_now", $upBinstock);
        $sql->bindValue(":blood_type", $upbloodtypes);
        $sql->bindValue(":previous_stock", $upPre);
        $sql->bindValue(":used_quantity", $upUsed);
        $sql->bindValue(":average_range", $upAvg);
        $sql->bindValue(":updateDate", date("Y/m/d"));
        $sql->bindValue(":id", $upId);


        $sql->execute();

        header("Location: ../../View/bloodStock/listBs.php");
    }
} else {
    echo "ERR";
}
