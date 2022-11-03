<?php
include "../../../patient/Controller/common/aChColorTxtController.php";
include "../../Controller/userProfile/profileController.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link href="../storage/home/<?=$logoPic?>" rel="icon" type="image/png" />


    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />

    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js" defer></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="uNavbar col-12 navbar navbar-expand-lg navbar-light bg-green flex-column position-sticky top-0 p-0">

        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-brand mt-2 mt-lg-0">

                    <a href="../main/main.php">
                        <img src="../storage/home/<?=$logoPic ?>" height="35" alt="MDB Logo" loading="lazy" />

                        <?php
                        $webName = explode("/", $webName);
                        $fName = $webName[0];
                        $lName = $webName[1];
                        ?>
                        <span id="logoStitle">
                            <?= $fName ?><span id="logoEtitle"><?= $lName ?></span></span>
                    </a>



                </div>


                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li id="uHome" class="nav-link-active nav-item m-3">
                        <a class="uHome nav-link" href="../main/main.php">Home</a>
                    </li>
                    <li id="uAbout" class="nav-link-active nav-item m-3">
                        <a class="uAbout nav-link" href="../aboutUs/uAboutUs.php">About Us</a>
                    </li>
                    <li class="uCenter nav-link-active nav-item m-3">
                        <a class="uCenter nav-link" href="../centers/center.php">Center</a>
                    </li>
                    <li class="uBlogs nav-link-active nav-item m-3">
                        <a class="uBlogs nav-link" href="../blogs/mainBlog.php">Blogs</a>
                    </li>
                </ul>

            </div>

            <div id="uProfile" class="userProfile nav-item me-5 me-lg-0 dropdown">
                <a class="uProfile nav-link dropdown-toggle" href="../userProfile/uprofile.php" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <img src="../storage/home/<?= $userInfo[0]["patient_profile"] ?>" width="30em" height="30em" alt="a" class="PicImg my-4 rounded-circle" />
                </a>
                <ul class="dropdown-menu me-5" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="../userProfile/uprofile.php">Go to Profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="../../Controller/uRegisterLogin/uLogoutController.php">Log Out</a>
                    </li>
                </ul>
            </div>


        </div>

    </nav>

</body>

</html>