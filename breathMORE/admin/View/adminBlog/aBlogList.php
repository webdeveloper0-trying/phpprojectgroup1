<?php
include "../../Controller/adminBlogs/aBlogListController.php";

include "../common/adminNavbar.php";

session_start();

if (isset($_POST['adminname']) && isset($_POST['password'])) {
    $adminname = $_POST['adminname'];
    $password = $_POST['password'];
    $_SESSION["adminname"] = $adminname;
}

if ($_SESSION["ismainadmin"] == 0) {
    header("Location: ../adminRegisterLogin/aLogin.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>

    <!-- Bootstrap css1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrap js1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?=time()" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css?=time()" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap?=time()" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css?=time()" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js" defer></script>

    <!-- custom css -->
    <link rel="stylesheet" href="../common/css/style.css">
    <link rel="stylesheet" href="./css/adminBlogList.css" <?php time() ?>>


    <!-- Navbar custom css -->
    <link rel="stylesheet" href="../common/css/adminNavbar.css" <?php time() ?>>

    <!-- jquery 1 -->
    <script src="../common/jq/jquery-3.6.0.min.js" defer></script>
    <script src="./js/adminBlogList.js" defer></script>

</head>

<body>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <h3 class="h3 header my-5">Blogs</h3>
        <table class="table align-middle bg-white">
            <thead class="thead text-center">
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Writer</th>
                    <th>Date</th>
                    <th>Content</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $count = 0;
                foreach ($blogs as $blog) { ?>
                    <tr>
                        <td><?= ++$count; ?></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../storage/blogsImg/<?= $blog["blog_img"] ?>" alt="" style="width: 45px; height: 45px" class="blogImg rounded-circle" />

                            </div>
                        </td>
                        <td>
                            <?= $blog["title"] ?>
                        </td>
                        <td>
                            <?= $blog["writer"] ?>
                        </td>
                        <td><?= $blog["date"] ?>
                        </td>
                        <td class="content position-relative">

                            <?php $content = $blog["content"];

                            $paraLen = strlen($content) / 2;

                            $showContent = substr($content, 0, 30);


                            $para = substr($content, 0, $paraLen);

                            $strLen1 = strrpos($para, ".");



                            $para1 = substr($content, 0, ++$strLen1);
                            $para2 = substr($content, $strLen1, strlen($content));


                            ?>
                            <p class="showContent">
                                <?= $showContent ?>
                            </p>


                            <p class="bg-light position-absolute p-5 content-hide">
                                <button type="button" class="btn-close position-absolute btnClose" aria-label="Close"></button>
                                <span> <?= $para1; ?></span> <br /><br />
                                <span> <?= $para2; ?></span>
                            </p>


                        </td>
                        <td class="d-flex">
                            <a href="../../Controller/adminBlogs/aEditBlogsController.php?id=<?= $blog["id"] ?>">
                                <i class="fa-solid fa-pen-to-square""></i>
                            </a>
                            &nbsp; &nbsp;
                            <a href=" ../Controller/deleteAdminController.php?id=<?= $blog["id"] ?>">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </td>
                    </tr><?php } ?>

            </tbody>
        </table>

        <!-- Submit button -->
        <button type="submit" name="updateAdmin" class="btn btn-purple btn-lg mb-4">Add</button>
    </div>
</body>

</html>