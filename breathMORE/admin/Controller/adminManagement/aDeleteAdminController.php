<?php
include "../../Model/dbConnection.php";


if (isset($_GET["id"])) {
    echo $_GET["id"];
    $adminId = $_GET["id"];


    $sql = $pdo->prepare("
                        DELETE FROM admin_management
                        WHERE id=:id;");


    $sql->bindValue(':id', $adminId);
    $sql->execute();

    

    header("Location:../../View/adminManagement/aManagement.php");
}
