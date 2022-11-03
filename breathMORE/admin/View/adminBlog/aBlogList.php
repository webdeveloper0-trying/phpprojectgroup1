<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>

    <?php
    session_start();

    include "../../Controller/adminBlogs/aBlogListController.php";
    include "../../../patient/Controller/common/aChColorTxtController.php";


    if (isset($_POST['adminname']) && isset($_POST['password'])) {
        $adminname = $_POST['adminname'];
        $password = $_POST['password'];
        $_SESSION["adminname"] = $adminname;
    }


    if ($_SESSION["ismainadmin"]) {
        include "../common/adminNavbar.php";
    } else {
        include "../common/adminSubNavbar.php";
    }

    if (!isset($_SESSION["adminname"])) {
        header("Location: ../adminRegisterLogin/aLogin.php");
    }


    ?>

    <!-- Bootstrap css1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrap js1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>


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
                $count = ($page * $rowLimit) - ($rowLimit - 1);
                foreach ($blogs as $blog) { ?>
                    <tr>
                        <td><?= $count++; ?></td>
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


                            <div class="showContent">
                                <?= $blog["content"] ?>
                            </div>


                            <div class="bg-light position-absolute p-5 content-hide">
                                <button type="button" class="btn-close position-absolute btnClose" aria-label="Close"></button>
                                <?= $blog["content"]; ?>
                            </div>


                        </td>

                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="../../Controller/adminBlogs/aEditBlogsController.php?id=<?= $blog["id"] ?>">
                                        <i class="fa-solid fa-pen-to-square""></i>
                                    </a>
                                </div>
                                <div class=" col">
                                            <a href="../../Controller/adminBlogs/aDeleteBlogController.php?id=<?= $blog["id"] ?>">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                </div>
                            </div>

                            <!-- <td class="d-flex">
                            <a href="../../Controller/adminBlogs/aEditBlogsController.php?id=<?= $blog["id"] ?>">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            &nbsp; &nbsp;
                            <a href=" ../Controller/deleteAdminController.php?id=<?= $blog["id"] ?>">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>

                        </td> -->
                    </tr><?php } ?>

            </tbody>

            <tfoot>
                <tr>
                    <td colspan="7">
                        <ul class="pagination pagination-circle justify-content-end">
                            <li class="page-item 
                    <?php if ($page <= 1) {
                        echo "disabled";
                    }  ?>
                    ">
                                <a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                                    <span aria-hidden="true">Previous</span>
                                </a>
                            </li>

                            <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                                <li class="page-item 
                        <?php
                                if ($page == $i) {
                                    echo "active";
                                }
                        ?>
                        "><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                            <?php } ?>


                            <li class="page-item 
                     <?php if ($page >= $totalPages) {
                            echo "disabled";
                        }  ?>">
                                <a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next">
                                    <span aria-hidden="true">Next</span>
                                </a>
                            </li>
                        </ul>

                    </td>
                </tr>
            </tfoot>
        </table>



        <!-- Submit button -->
        <a href="./aAddBlogForm.php">
            <button type="submit" name="addBlog" class="btn btn-purple mb-4">Add</button>
        </a>


    </div>
</body>

</html>