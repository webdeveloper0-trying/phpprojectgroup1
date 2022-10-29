<?php
include "../../Model/dbConnection.php";

session_start();



    $sql = $pdo->prepare("SELECT * FROM faq");
    $sql->execute();
    $faqs = $sql->fetchALl(PDO::FETCH_ASSOC);
    
?>