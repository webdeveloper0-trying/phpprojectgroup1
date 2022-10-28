<?php

include "../../Model/dbConnection.php";

if (isset($_POST["addBlog"])) {
    $blogTitle = $_POST["blogTitle"];
    $blogWriter = $_POST["blogWriter"];
    $blogDate = $_POST["blogDate"];
    $blogImage = $_POST["blogImage"];
    $blogContent = $_POST["blogContent"];
  
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare for Execute
    $sql = $pdo->prepare("
                INSERT INTO blogs(title,writer,date,content,blog_img)
                 VALUES(
                :blogTitle,
                :blogWriter,
                :blogDate,
                :blogImage,
                :blogContent)
                ");



    $sql->bindValue(':blogTitle', $blogTitle);
    $sql->bindValue(':blogWriter', $blogWriter);
    $sql->bindValue(':blogDate', $blogDate);
    $sql->bindValue(':blogImage', $blogImage);
    $sql->bindValue(':blogContent', $blogContent);
  


    // Real Execute
    $sql->execute();

    $blogUpdate = $sql->fetchAll(PDO::FETCH_ASSOC);

    header("Location: ../../View/adminBlog/aBlogList.php");
} else {
    echo "Not Received";
}
