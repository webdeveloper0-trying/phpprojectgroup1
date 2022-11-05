<?php
include "../../Model/dbConnection.php";
    $sql = $pdo->prepare("SELECT * FROM faq WHERE del_flg = 0");
    $sql->execute();
    $faqs = $sql->fetchALl(PDO::FETCH_ASSOC);
    
?>