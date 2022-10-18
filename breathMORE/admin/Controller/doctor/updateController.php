<?php
session_start();
include "../../Model/dbConnection.php";

if (isset($_POST["updateDoctor"])) {
    $name = $_POST["docName"];
    $gender = $_POST["gender"];
    $sama = $_POST["sama"];
    $bachelar = $_POST["bachelar"];
    $center = $_POST["center"];
    $phNum = $_POST["phNum"];
    $id = $_POST["id"];
    // echo $id;
    $dutyDate = $_POST["dutyDate"];
    $stime = $_POST["stime"];
    $etime = $_POST["etime"];

    $sql = $pdo->prepare("
    UPDATE doctor_lists SET 
    doctor_name=:name,
    doctor_gender=:gender,
    doctor_sama=:sama,
    doctor_bachelar=:bachelar,
    center=:center,
    ph_num=:phNum,
    updated_date=:updateDate
    WHERE doctor_id=:id
");
    $sql->bindValue(":name", $name);
    $sql->bindValue(":gender", $gender);
    $sql->bindValue(":sama", $sama);
    $sql->bindValue(":bachelar", $bachelar);
    $sql->bindValue(":center", $center);
    $sql->bindValue(":phNum", $phNum);
    $sql->bindValue(":updateDate", date("Y/m/d"));
    $sql->bindValue(":id", $id);

    $sql->execute();

    $sql = $pdo->prepare("
    UPDATE doctor_dutytime_lists SET 
    day=:day,
    start_time=:stime,
    end_time=:etime,
    updated_date=:updateDate
    WHERE doc_id=:id
");
    $sql->bindValue(":day", $dutyDate);
    $sql->bindValue(":stime", $stime);
    $sql->bindValue(":etime", $etime);
    $sql->bindValue(":updateDate", date("Y/m/d"));
    $sql->bindValue(":id", $id);
    $sql->execute();

    // header("Location: ../../View/doctor/list.php");
    header("Location: ../../View/doctor/list.php");
} else {
    echo "ERR";
}
