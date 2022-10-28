<?php
session_start();

include "../../Model/dbConnection.php";
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    

    $sql = $pdo->prepare("SELECT * FROM total_registered_accounts 
    WHERE user_name= :name AND user_email = :email");
    $sql->bindValue(":name", $username);
    $sql->bindValue(":email", $email);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    print_r($result);
    if (password_verify($password, $result[0]['user_password'])) {
        $_SESSION["username"] = $username;

        $sql1 = $pdo->prepare("SELECT * FROM  total_registered_accounts 
        ORDER BY register_id DESC LIMIT 1 ");
        $sql1->execute();
        $resultId = $sql1->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION["userId"] = $resultId[0]['register_id'];

        header("location: ../../View/main/main.php");
    } else {
       
        header("location: ../../View/uRegisterLogin/login.php");
        
    }
}
