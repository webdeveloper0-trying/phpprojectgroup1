<?php 

include "../../Model/dbConnection.php";

if(isset($_POST["addAdmin"])){
    $adminName = $_POST["adminname"];
    $password = $_POST["password"];
    // $status = $_POST["status"];

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Prepare for Execute
$sql = $pdo->prepare("
                INSERT INTO admin_management(
                    admin_name,
                    password
                )
                VALUES
                (
                    :adminName,
                    :password                  
                )");

        $sql->bindValue(':adminName',$adminName);
        $sql->bindValue(':password',password_hash($password, PASSWORD_DEFAULT));
        
        

// Real Execute
$sql->execute();

header("Location: ../../View/adminManagement/aManagement.php");
  
}else{
    echo "Not Received";
}


