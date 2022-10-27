<?php
include "../../Model/dbConnection.php";


if (isset($_GET["id"])) {
    echo $_GET["id"];
    $adminId = $_GET["id"];


    $sql = $pdo->prepare("
    UPDATE admin_management SET del_flg = 1
    WHERE id=:id;");


    $sql->bindValue(':id', $adminId);
    $sql->execute();


    header("Location:../../View/adminManagement/aManagement.php");
}
