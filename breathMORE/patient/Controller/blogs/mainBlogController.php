<?php
session_start();
include "../../Model/dbConnection.php";


    $sql = $pdo->prepare("SELECT * FROM blogs");
    $sql->execute();
    $resultBlogs = $sql->fetchALl(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($resultBlogs);
?>