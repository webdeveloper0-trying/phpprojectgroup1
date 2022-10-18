<?php 

include "../../Model/dbConnection.php";

if(isset($_POST["updateAdmin"])){
    $adminName = $_POST["adminname"];
    $password = $_POST["password"];
    $id = $_POST["id"];

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Prepare for Execute
$sql = $pdo->prepare("
                UPDATE admin_management
                SET admin_name = :adminName,
                password = :password
                WHERE id = :id");

        $sql->bindValue(':adminName',$adminName);
        $sql->bindValue(':password',password_hash($password, PASSWORD_DEFAULT));
        $sql -> bindValue(':id',$id);

// Real Execute
$sql->execute();

header("Location: ../../View/adminManagement/aManagement.php");

// Receive Data From MySQL

    
}else{
    echo "Not Received";
}


