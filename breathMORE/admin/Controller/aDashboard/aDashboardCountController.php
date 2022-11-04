

<?php

include "../../Model/dbConnection.php";




$sql = $pdo->prepare("
SELECT COUNT(register_id) FROM total_registered_accounts WHERE del_flg = 0;
");
$sql->execute();

$regCount = $sql->fetchAll(PDO::FETCH_ASSOC);


$sql = $pdo->prepare("
SELECT COUNT(id) FROM online_appointments_lists WHERE del_flg = 0;
");
$sql->execute();

$appCount = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
SELECT COUNT(doctor_id) FROM doctor_lists WHERE del_flg = 0;
");
$sql->execute();

$docCount = $sql->fetchAll(PDO::FETCH_ASSOC);



$sql = $pdo->prepare("
SELECT COUNT(id) FROM blood_donar_lists WHERE del_flg = 0;
");
$sql->execute();

$donCount = $sql->fetchAll(PDO::FETCH_ASSOC);



$sql = $pdo->prepare("
SELECT COUNT(id) FROM disease_and_medicine_lists WHERE del_flg = 0;
");
$sql->execute();

$medCount = $sql->fetchAll(PDO::FETCH_ASSOC);



$sql = $pdo->prepare("
SELECT COUNT(id) FROM lab_reports WHERE del_flg = 0;
");
$sql->execute();

$labCount = $sql->fetchAll(PDO::FETCH_ASSOC);



$sql = $pdo->prepare("
SELECT COUNT(id) FROM pharmacy_lists WHERE del_flg = 0;
");
$sql->execute();

$pharmacyCount = $sql->fetchAll(PDO::FETCH_ASSOC);


$sql = $pdo->prepare("
SELECT COUNT(id) FROM patient_history WHERE del_flg = 0;
");
$sql->execute();

$patientCount = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
SELECT COUNT(id) FROM oxygen_lists WHERE del_flg = 0;
");
$sql->execute();

$oxygenCount = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
SELECT COUNT(id) FROM blogs WHERE del_flg = 0;
");
$sql->execute();

$blogCount = $sql->fetchAll(PDO::FETCH_ASSOC);


$sql = $pdo->prepare("
SELECT COUNT(id) FROM subscribe_for_newsletter WHERE del_flg = 0;
");
$sql->execute();

$subCount = $sql->fetchAll(PDO::FETCH_ASSOC);


$sql = $pdo->prepare("
SELECT COUNT(id) FROM faq WHERE del_flg = 0;
");
$sql->execute();

$faqCount = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
SELECT COUNT(id) FROM blood_stock_lists WHERE del_flg = 0;
");
$sql->execute();

$bloodStockCount = $sql->fetchAll(PDO::FETCH_ASSOC);


$sql = $pdo->prepare("
SELECT COUNT(id) FROM feedback WHERE del_flg = 0;
");
$sql->execute();

$feedbackCount = $sql->fetchAll(PDO::FETCH_ASSOC);








