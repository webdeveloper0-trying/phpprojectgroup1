<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SubBlog</title>

    <?php
    session_start();
    
    include "../../../admin/Controller/adminProfile/aSelectMsgController.php";
    include "../../../patient/Controller/common/aChColorTxtController.php";
   
    
    $subBlogInfo = $_SESSION["subBlogInfo"];
    ?>

    <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />

    <?php
     include "../common/uFooter/uFooter.php"; ?>

    <!--  Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>


    <link rel="stylesheet" href="../common/css/style.css" />
    <link rel="stylesheet" href="../common/uNavbar/css/uSecNavbar.css" />
    <link rel="stylesheet" href="../common/uFooter/css/uFooter.css" />
    <link rel="stylesheet" href="./css/showBlog.css" <?php time(); ?>>
</head>

<body>
    <div class="con mx-5">

        <?php
        include("../common/uNavbar/uSecNavbar.php") ?>


        <h4 class="blogTitle my-5 text-center"><?= $subBlogInfo[0]["title"] ?></h4>

        <div class="row m-5">
            <div class="col text-center">By: <span class="fw-bold"><?= $subBlogInfo[0]["writer"] ?></span></div>
            <div class="col text-center">Last Updated: <span class="fw-bold"><?= $subBlogInfo[0]["date"] ?></span></div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-10 mx-auto">
                <img src="../storage/home/<?= $subBlogInfo[0]["blog_img"] ?>" class="img-fluid ms-0 m-1 mt-1" alt="..." />
            </div>
        </div>
        <div class="row m-5">
            <div class="col-md-10 mx-auto">
                <?= $subBlogInfo[0]["content"] ?>

            </div>
        </div>
    </div>
</body>

</html>