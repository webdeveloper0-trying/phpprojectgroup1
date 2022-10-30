<?php
include "../../../patient/Controller/common/aChColorTxtController.php";
include "../../Controller/userProfile/profileController.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->


    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                        <img src="../storage/home/logo.png" height="35" alt="MDB Logo" loading="lazy" />

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
                    <li class="nav-link-active nav-item m-3">
                        <a class="nav-link" href="../../main/main.php">Home</a>
                    </li>
                    <li class="nav-link-active nav-item m-3">
                        <a class="nav-link" href="../../aboutUs/uAboutUs.php">About Us</a>
                    </li>
                    <li class="nav-link-active nav-item m-3">
                        <a class="nav-link" href="../../centers/center.php">Center</a>
                    </li>
                    <li class="nav-link-active nav-item m-3">
                        <a class="nav-link" href="../../blogs/mainBlog.php">Blogs</a>
                    </li>
                    <li class="nav-link-active nav-item m-3">
                        <a class="nav-link" href="../../emergency/uEmergency.php">Contact Us</a>
                    </li>
                </ul>

            </div>

            <div class="userProfile nav-item me-5 me-lg-0 dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <a href="../../userProfile/uprofile.php">
                        <img src="../storage/home/<?= $userInfo[0]["patient_profile"] ?>" width="45em" height="45em" alt="a" class="PicImg my-4 rounded-circle" />
                    </a>
                </a>
                <ul class="dropdown-menu me-5" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="#">Action</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
            </div>


        </div>

    </nav>

</body>

</html>