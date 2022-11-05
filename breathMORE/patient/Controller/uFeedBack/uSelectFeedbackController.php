<?php

include "../../Model/dbConnection.php";


    $sql = $pdo->prepare("SELECT * FROM feedback WHERE del_flg = 0");
    $sql->execute();
    $feedbacks = $sql->fetchALl(PDO::FETCH_ASSOC);

    
?>