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


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>

    <link rel="stylesheet" href="../common/css/style.css" />
    <link rel="stylesheet" href="../common/uNavbar/css/uNavbar.css" />
    <link rel="stylesheet" href="../common/uFooter/css/uFooter.css" />
</head>

<body>
    <div class="mx-5">
        <div class="d-flex  justify-content-center align-items-center flex-column">
            <h3 class="header text-center my-5">Privacy & Policy</h3>
            <div class="row">


                <p>This Privacy Policy was last updated on July 14, 2022.</p>

                <p>Thank you for joining
                    <?php
                    $webName;
                    $webName = explode("/", $webName);

                    $fName = $webName[0];
                    $lName = $webName[1];
                    ?>
                    <b>
                        <?= $fName ?><b><?= $lName ?></b></b>. We at

                    <b>
                        <?= $fName ?><b><?= $lName ?></b></b>
                    (“
                    <b>
                        <?= $fName ?><b><?= $lName ?></b></b>”, “we”, “us”) respect your privacy and want you to understand how we collect, use, and share data about you. This Privacy Policy covers our data collection practices and describes your rights regarding your personal data.
                </P>
                <br>
                <p>Unless we link to a different policy or state otherwise, this Privacy Policy 
                    applies when you visit or use the <b>
                        <?= $fName ?><b><?= $lName ?></b></b> websites, mobile applications,
                     APIs, or related services (the “Services”). It also applies to prospective customers 
                     of our business and enterprise products.</p>
                <br>
                <p>By using the Services, you agree to the terms of this Privacy Policy. You shouldn’t use the Services if you don’t agree with this Privacy Policy or any other agreement that governs your use of the Services.</p>
                <br>

            </div>
        </div>
    </div>
</body>

</html>