<?php

include "../../Model/dbConnection.php";


    $sql = $pdo->prepare("SELECT * FROM feedback");
    $sql->execute();
    $feedbacks = $sql->fetchALl(PDO::FETCH_ASSOC);

    
?>