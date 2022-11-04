<?php

include "../../Model/dbConnection.php";

if (isset($_POST["updateBlog"])) {
    $blogTitle = $_POST["blogTitle"];
    $blogWriter = $_POST["blogWriter"];
    $blogDate = $_POST["blogDate"];
    $blogImage = $_POST["blogImage"];
    $blogContent = $_POST["blogContent"];
    $blogId = $_POST["blogId"];

   


    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare for Execute
    $sql = $pdo->prepare("
                UPDATE blogs
                SET title = :blogTitle,
                writer = :blogWriter,
                date = :blogDate,
                content = :blogContent,
                blog_img = :blogImage              
                WHERE id = :blogId");

    $sql->bindValue(':blogTitle', $blogTitle);
    $sql->bindValue(':blogWriter', $blogWriter);
    $sql->bindValue(':blogDate', $blogDate);
    $sql->bindValue(':blogImage', $blogImage);
    $sql->bindValue(':blogContent', $blogContent);
    $sql->bindValue(':blogId', $blogId);




    // Real Execute
    $sql->execute();

    $blogUpdate = $sql->fetchAll(PDO::FETCH_ASSOC);

    header("Location: ../../View/adminBlog/aBlogList.php");
} else {
    echo "Not Received";
}
