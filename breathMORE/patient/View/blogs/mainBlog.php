<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blogs</title>

  <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />

  <?php

  session_start();
  if (!isset($_SESSION["userId"])) {
    header("Location: ../uRegisterLogin/register.php");
  } else {
    $userId = $_SESSION["userId"];
  }
  include "../../Controller/blogs/mainBlogController.php";
  include "../common/uNavbar/uNavbar.php";
  include "../common/uFooter/uFooter.php";

  include "../../../patient/Controller/common/aChColorTxtController.php";
  include "../../../admin/Controller/adminProfile/aSelectMsgController.php";


  // $resultBlogs = $_SESSION["subBlogInfo"];
  ?>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>


  <link rel="stylesheet" href="../common/css/style.css" />
  <link rel="stylesheet" href="../common/uNavbar/css/uNavbar.css" />;
  <link rel="stylesheet" href="../common/uFooter/css/uFooter.css" />
  <link rel="stylesheet" href="./css/mainBlog.css" <?php time(); ?>>
</head>

<body>
  <div class="con mx-5">
    <h4 class="header text-center my-5">Strong And Well</h4>

    <div class="blogList p-5">
      <?php foreach ($resultBlogs as $blogs) { ?>

        <div class="blogCard row mb-4 pb-4">
          <div class="col-md-3 col-sm- d-flex justify-content-center align-items-center">
            <img src="../storage/home/<?= $blogs["blog_img"] ?>" class="img-fluid blogImage" alt="..." />
          </div>
          <div class="col-md-8 col-sm-12">
            <h5 class="blogTitle my-4">
              <?= $blogs["title"] ?>
            </h5>
            <span class="blogWriter me-5 fw-bold">By: <?= $blogs["writer"] ?></span>
            <span class="blogDate ms-5 fw-bold"> Last Updated: <span> <?= $blogs["date"] ?></span></span>
            <p class="blogContent mt-4"><?= substr($blogs["content"], 0, 350) ?>
            </p>
            <div class="d-flex justify-content-end">
              <a href="../../Controller/blogs/subBlogController.php?id=<?= $blogs["id"] ?>" class="btn-green py-1 px-2">Read Full Article</a>
            </div>
          </div>
        </div>

      <?php } ?>
    </div>

  </div>
</body>

</html>