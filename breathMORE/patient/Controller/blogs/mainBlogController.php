<?php

include "../../Model/dbConnection.php";


    $sql = $pdo->prepare("SELECT * FROM blogs");
    $sql->execute();
    $resultBlogs = $sql->fetchALl(PDO::FETCH_ASSOC);

    $sql = $pdo->prepare("SELECT * FROM blogs ORDER BY id ASC LIMIT 8");
    $sql->execute();
    $blogsInMain = $sql->fetchALl(PDO::FETCH_ASSOC);
    
?>