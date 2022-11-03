<?php

include "../../Model/dbConnection.php";


    $sql = $pdo->prepare("SELECT * FROM blogs WHERE del_flg = 0");
    $sql->execute();
    $resultBlogs = $sql->fetchALl(PDO::FETCH_ASSOC);

    $sql = $pdo->prepare("SELECT * FROM blogs WHERE del_flg = 0 ORDER BY id DESC LIMIT 8");
    $sql->execute();
    $blogsInMain = $sql->fetchALl(PDO::FETCH_ASSOC);
    
?>