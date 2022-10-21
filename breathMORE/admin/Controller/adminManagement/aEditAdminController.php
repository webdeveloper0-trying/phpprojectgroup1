<?php
include "../../Model/dbConnection.php";

if(isset($_GET["id"])){
    $adminId = $_GET["id"];

    $sql = $pdo->prepare("
                        SELECT * FROM admin_management
                        WHERE id = :id");
    
    $sql->bindValue(':id',$adminId);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    // echo("<pre>");
    // print_r($result);


    //save session data
    $_SESSION["adminInfo"] = $result;

    header("Location:../../View/adminManagement/aManagement.php");
                    
}