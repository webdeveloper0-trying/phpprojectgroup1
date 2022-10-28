<?php
include "../../Model/dbConnection.php";
if (isset($_GET["id"])) {
    $shopid = $_GET["id"];

    echo  $shopid;

    $sql = $pdo->prepare("
UPDATE pharmacy_lists SET del_flg=1
WHERE id=:id
");
    $sql->bindValue(":id",  $shopid);
    $sql->execute();

    header("Location: ../../View/pharmacy/listPharmacy.php");
}
