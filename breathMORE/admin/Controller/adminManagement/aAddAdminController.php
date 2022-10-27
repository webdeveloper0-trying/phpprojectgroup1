<?php 

include "../../Model/dbConnection.php";

if(isset($_POST["addAdmin"])){
    $adminName = $_POST["adminname"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    

    $role = (isset($_POST["role"]))? ("1") : ("0");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Prepare for Execute
$sql = $pdo->prepare("
                INSERT INTO admin_management(
                    admin_name,
                    password,
                    status
                )
                VALUES
                (
                    :adminName,
                    :password,
                    :role                 
                )");

        $sql->bindValue(':adminName',$adminName);
        $sql->bindValue(':password',password_hash($password, PASSWORD_DEFAULT));
        $sql->bindValue(':role',$role);
        
        

// Real Execute
$sql->execute();

header("Location: ../../View/adminManagement/aManagement.php");
  
}else{
    echo "Not Received";
}


