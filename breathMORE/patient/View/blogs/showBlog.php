<?php
include "../../Controller/blogs/subBlogController.php";

$subBlogInfo =$_SESSION["subBlogInfo"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="jquery3.6.0.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="row ">
        <div class="col-10 mx-auto text-center mt-5">
            <h2><?php echo $subBlogInfo[0]["title"] ?></h2>
        </div>
    </div>
    <div class="row m-5">
        <div class="col text-center">By: <span class="fw-bold"><?php echo $subBlogInfo[0]["writer"] ?></span></div>
        <div class="col text-center">Last Updated: <span class="fw-bold"><?php echo $subBlogInfo[0]["date"] ?></span></div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-10 mx-auto">
        <img src="../View/../../img/<?php echo $subBlogInfo[0]["blog_img"] ?>" class="img-fluid ms-0 m-1 mt-1" alt="..." />

        </div>
    </div>
    <div class="row m-5">
        <div class="col-md-5 mx-auto">
        <?php echo $subBlogInfo[0]["content"] ?>

        </div>
    </div>
</body>

</html>