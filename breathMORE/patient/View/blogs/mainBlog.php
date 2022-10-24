<?php

include "../../Model/dbConnection.php";
session_start();
$resultBlogs = $_SESSION["subBlogInfo"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  
  <link rel="stylesheet" href="../common/css/style.css" />
</head>

<body>
  <div class="header row">
    <div class="col-6 mx-auto text-center">
      <h4 class="m-5 blogHeader">Strong And Well</h4>
    </div>
  </div>
  <div class="blogCard ">
    <?php foreach ($resultBlogs as $blogs) { ?>
      <div class="container">
        <div class="row bg-info mb-2 blogsBackground">
          <div class="col-10 mx-auto text-center">
            <div class="row">
              <div class="col-md-4 col-sm-12">
                <img src="../img/<?php echo $blogs["blog_img"] ?>" class="img-fluid ms-0 m-1 mt-1" alt="..." />
              </div>
              <div class="col-md-8 col-sm-12">
                <h5 class="blogTitle m-3">
                  <?php echo $blogs["title"] ?>
                </h5>
                <span class="blogWriter me-5 fw-bold">By: <?php echo $blogs["writer"] ?></span>
                <span class="blogDate ms-5 fw-bold"> Last Updated: <span> <?php echo $blogs["date"] ?></span></span>
                <p class="blogContentStart text-start mt-3"><?php echo substr($blogs["content"],0,350) ?>
                </p><a href="./Controller/subBlog.php?id=<?= $blogs["id"]?>" class="">Read Full Article</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</body>

</html>