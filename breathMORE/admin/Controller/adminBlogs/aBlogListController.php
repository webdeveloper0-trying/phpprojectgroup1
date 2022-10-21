<?php

include "../../Model/dbConnection.php";


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Prepare for Execute
$sql = $pdo->prepare("SELECT id,title,writer,date,content,blog_img
 FROM blogs");

// Real Execute
$sql->execute();

// Receive Data From MySQL
$blogs = $sql->fetchAll(PDO::FETCH_ASSOC);

