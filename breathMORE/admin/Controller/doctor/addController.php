<?php
// echo "OK";

include"../../Model/dbConnection.php";

if(isset($_POST["addDoctor"])){
    $name= $_POST["docName"];
    $gender= $_POST["gender"];
    $sama= $_POST["sama"];
    $bachelar= $_POST["bachelar"];
    $center= $_POST["center"];
    $phNum= $_POST["phNum"];


    $dutyDate=$_POST["dutyDate"];
    $stime=$_POST["stime"];
    $etime=$_POST["etime"];

    $sql = $pdo->prepare("
    INSERT INTO doctor_lists
    (
        doctor_name,
        doctor_gender,
        doctor_sama,
        doctor_bachelar,
        center,
        ph_num,
        created_date

    )VALUES
    (
        :doctor_name,
        :doctor_gender,
        :doctor_sama,
        :doctor_bachelar,
        :center,
        :ph_num,
        :created_date

    )
");

$sql->bindValue(":doctor_name",$name);
$sql->bindValue(":doctor_gender",$gender);
$sql->bindValue(":doctor_sama",$sama);
$sql->bindValue(":doctor_bachelar",$bachelar);
$sql->bindValue(":center",$center);
$sql->bindValue(":ph_num",$phNum);
$sql->bindValue(":created_date",date("Y/m/d"));
$sql->execute();

//return last id
$id = $pdo->lastInsertId();

$sql = $pdo->prepare("
    INSERT INTO doctor_dutytime_lists 
    (
        doc_id,
        day,
        start_time,
        end_time,
        created_date

    )VALUES
    (

        :id,
        :day,
        :stime,
        :etime,
        :createdDate

    )
");

$sql->bindValue(":id",$id);
$sql->bindValue(":day",$dutyDate);
$sql->bindValue(":stime",$stime);
$sql->bindValue(":etime",$etime);
$sql->bindValue(":createdDate", date("Y/m/d"));
$sql->execute();

// header("Location: ../../View/doctor/list.php");
header("Location: ../../View/doctor/list.php");

}
else{
    echo "ERR";
}

?>