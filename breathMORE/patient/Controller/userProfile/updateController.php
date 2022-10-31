<?php
include "../../Model/dbConnection.php";

if (isset($_POST["profile"])) {
   
    // get patient info
    $phNo = $_POST["phNo"];
    print_r($phNo);
    $genderNo = $_POST["gender"];

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


    $dateofbirth = $_POST["dob"];

    $today = date("m/d/Y");
    $age = date_diff(date_create($dateofbirth), date_create($today));
    $age = $age->format('%y');

    $id = $_POST["id"];

    // get img
    if ($_FILES['upload']['name'] == "") {
        $sql = $pdo->prepare(
            "UPDATE total_registered_accounts SET
            age=:age, gender=:gender, ph_num = :phNo, date_of_birth = :dateofbirth WHERE register_id = :id"
        );
    } else {
        $file = $_FILES['upload']['name'];
        $location = $_FILES['upload']['tmp_name'];
        $extension = pathinfo($file)['extension'];
       
        $path = $id.".".$extension;

        if (move_uploaded_file($location, "../../View/storage/home/".$id .".".$extension)) {
            $sql = $pdo->prepare(
                "UPDATE total_registered_accounts SET
                ph_num = :phNo,  date_of_birth = :dateofbirth, age =:age, gender=:gender,
                patient_profile =:profile
                WHERE register_id=:id"
            );

            $sql->bindValue(":profile", $path);
        } else {
            echo "sorry";
        }
    }


    $sql->bindValue(":age", $age);
    $sql->bindValue(":gender", $gender);
    $sql->bindValue(":phNo", $phNo);
    $sql->bindValue(":dateofbirth", $dateofbirth);
    $sql->bindValue(":id", $id);
    $sql->execute();
    header("location: ../../View/userProfile/uprofile.php");
}
