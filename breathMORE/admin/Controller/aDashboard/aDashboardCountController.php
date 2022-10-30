

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






