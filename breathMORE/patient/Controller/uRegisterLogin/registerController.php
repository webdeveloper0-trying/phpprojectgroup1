<?php
session_start();

include "../../Model/dbConnection.php";
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $comfirmpassword = $_POST["comfirmpassword"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $date_of_birth = $_POST["date_of_birth"];
    $ph_no = $_POST["ph_no"];

    $sql = $pdo->prepare("SELECT * FROM  total_registered_accounts 
    WHERE user_name= :name ");
    $sql->bindValue(":name", $username);
    // $sql->bindValue(":password", $password);
    // $sql->bindValue(":comfirmpassword", $comfirmpassword);

    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    print_r($result);
    if (count($result) == 0) {
        $sql = $pdo->prepare("INSERT INTO  total_registered_accounts (user_name,user_email,user_password,user_confirmpassword,ph_num,date_of_birth,age,gender)
    VALUES(:name,:email,:password,:comfirmpassword,:ph_no,:date_of_birth,:age,:gender)");
        $sql->bindValue(":name", $username);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));
        $sql->bindValue(":comfirmpassword", password_hash($comfirmpassword, PASSWORD_DEFAULT));
        $sql->bindValue(":ph_no", $ph_no);
        $sql->bindValue(":date_of_birth", $date_of_birth);
        $sql->bindValue(":age", $age);
        $sql->bindValue(":gender", $gender);

        $sql->execute();
        $_SESSION["username"] = $username;
        header("location: ../../View/main/home.php");
    } else {
        header("location: ../../View/uRegisterLogin/login.php");
        echo "<script> alert('You account has already been existed!!')</script>";
    }
}
