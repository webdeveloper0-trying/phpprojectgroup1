<?php
echo "BS OK";
include "../../Model/dbConnection.php";


if (isset($_POST["addBstock"])) {
    $inB = $_POST["psB"] - $_POST["udB"];
    $bloodtypes = $_POST["bloodtypes"];
    $psB = $_POST["psB"];
    $udB = $_POST["udB"];
    $avg = $_POST["avg"];
    $bdate = $_POST["bdate"];
    // $psB - $udB


    $sql = $pdo->prepare("
    INSERT INTO blood_stock_lists
    (
        blood_date,
        instock_now,
        blood_type,
        previous_stock,
        used_quantity,
        average_range,
        created_date
    )
    VALUES
    (
        :blood_date,
        :instock_now,
        :blood_type,
        :previous_stock,
        :used_quantity,
        :average_range,
        :created_date
    )
    ");

    $sql->bindValue(":blood_date", $bdate);
    $sql->bindValue(":instock_now", $inB);
    $sql->bindValue(":blood_type", $bloodtypes);
    $sql->bindValue(":previous_stock", $psB);
    $sql->bindValue(":used_quantity", $udB);
    $sql->bindValue(":average_range", $avg);
    $sql->bindValue(":created_date", date("Y/m/d"));


    $sql->execute();

    header("Location: ../../View/bloodStock/listBs.php");
} else {
    echo "Err";
}
