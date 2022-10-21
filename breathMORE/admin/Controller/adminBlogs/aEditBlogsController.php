<?php
include "../../Model/dbConnection.php";

if(isset($_GET["id"])){
    $blogId = $_GET["id"];

    $sql = $pdo->prepare("
                        SELECT * FROM blogs
                        WHERE id = :id");
    
    $sql->bindValue(':id',$blogId);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    session_start();

    //save session data
    $_SESSION["blogInfo"] = $result;


    header("Location: ../../View/adminBlog/aUpdateBlogForm.php");
                    
}