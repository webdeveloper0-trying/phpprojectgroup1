<?php

include "../../Model/dbConnection.php";

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Prepare for Execute
$sql = $pdo->prepare(" SELECT user_name,user_email
FROM total_registered_accounts
LEFT JOIN subscribe_for_newsletter
ON total_registered_accounts.register_id  = subscribe_for_newsletter.sub_id
WHERE total_registered_accounts.register_id  = subscribe_for_newsletter.sub_id;");

$sql->execute();


// Receive Data From MySQL
$subscriberInfos = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($subscriberInfos);
