<?php
include "../../Model/dbConnection.php";
    $sql = $pdo->prepare("SELECT * FROM faq");
    $sql->execute();
    $faqs = $sql->fetchALl(PDO::FETCH_ASSOC);
    
?>