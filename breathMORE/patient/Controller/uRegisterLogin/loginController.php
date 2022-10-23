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
        header("location: ../../View/main/home.php");
    } else {
        echo "<script> alert('You account has already been existed!!')</script>";
        header("location: ../../View/uRegisterLogin/login.php");
        
    }
}
