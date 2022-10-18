<?php

include "../../Model/dbConnection.php";

if (isset($_POST["applyFor"])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phNo=$_POST['phNo'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
   

    switch ($_POST["bloodType"]) {
        case '1':
            $bloodType = "A";
            break;
        case '2':
            $bloodType = "B";
            break;

        case '3':
            $bloodType = "0";
            break;
        case '4':
            $bloodType = "AB";
            break;
        case '5':
            $bloodType = "Untested";
            break;

    }
    

    switch ($_POST["rhD"]) {
        case '1':
            $rhD = "Positive";
            break;
        case '2':
            $rhD = "Negative";
            break;

        case '3':
            $rhD = "Untested";
            break;

    }

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare for Execute
    $sql = $pdo->prepare("
                INSERT INTO blood_donar_lists(  
                    register_id,                
                    blood_type,
                    rhd                  
                )
                VALUES
                (   :userId,               
                    :bloodType,
                    :rhD
                                   
                )");

    // $sql->bindValue(':user_id','$user_id');
    $sql->bindValue(':bloodType', $bloodType);
    $sql->bindValue(':rhD', $rhD);

    session_start();
    $sql->bindValue(':userId',$_SESSION["userId"]);



    // Real Execute
    $sql->execute();

    header("Location:../../View/bloodDonation/completeBloodDonation.php");
    



} else {
    echo "Not Received";
}
