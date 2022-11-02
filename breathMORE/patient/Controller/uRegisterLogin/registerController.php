<?php
session_start();

include "../../Model/dbConnection.php";
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $comfirmpassword = $_POST["comfirmpassword"];
    $genderNo = $_POST["gender"];
    $date_of_birth = $_POST["date_of_birth"];
    $ph_no = $_POST["ph_no"];

    switch ($genderNo) {
        case '1':
            $gender = "Male";
            break;
        case '2':
            $gender = "Female";
            break;
        case '3':
            $gender = "Other";
            break;
    }

   
    $today = date("m/d/Y");
    $age = date_diff(date_create($date_of_birth), date_create($today));
    $age = $age->format('%y');

    $sql = $pdo->prepare("SELECT * FROM  total_registered_accounts 
    WHERE user_name= :name ");
    $sql->bindValue(":name", $username);
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

        $sql1 = $pdo->prepare("SELECT * FROM  total_registered_accounts 
        ORDER BY register_id DESC LIMIT 1 ");
        $sql1->execute();
        $resultId = $sql1->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION["userId"] = $resultId[0]['register_id'];
        $_SESSION["isRegister"] = true;

        // echo "Id".$_SESSION["userId"];
      
        header("location: ../../View/main/main.php");
    } else {
        
        header("location: ../../View/uRegisterLogin/login.php");
        echo "<script> alert('You account has already been existed!!')</script>";
    }
}
