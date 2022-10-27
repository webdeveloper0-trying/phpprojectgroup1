<?php
session_start();
include "../../Model/dbConnection.php";

if(isset($_GET["id"])){
    $blogsId = $_GET["id"];

    $sql = $pdo->prepare("SELECT * FROM blogs WHERE id=:id");
    $sql->bindValue(":id",$blogsId);
    $sql->execute();
    $resultBlogs = $sql->fetchALl(PDO::FETCH_ASSOC);

    $_SESSION["subBlogInfo"] = $resultBlogs;
    header("Location: ../../View/blogs/showBlog.php");
    // echo "<pre>";
    // print_r($resultBlogs);

}

?>