<?php
session_start();

include "../common/uNavbar/uNavbar.php";
include "../common/uFooter/uFooter.php";

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $_SESSION["username"] = $username;
}
if (!isset($_SESSION["username"])) {

    // header("Location: ../uRegisterLogin/register.php");
} else {
    $userId = $_SESSION["userId"];
} ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />


    <!-- custom css3 -->
    <link rel="stylesheet" href="../common/css/style.css" />
    <link rel="stylesheet" href="../common/uNavbar/css/uNavbar.css" />
    <link rel="stylesheet" href="../common/uFooter/css/uFooter.css" /F>
    <link rel="stylesheet" href="./css/userguide.css">
</head>

<body class="body">
    <div class="container-fluid">
        <div class="row  justify-content-center">

            <div class="col-6">
                <div class="body">
                    <div class="display-3 userguide">UserGuide</div>
                    <h6 class="mt-5 fs-3">About</h6>
                    <div class="mt-2 fs-5"><span><i class="fa-sharp fa-solid fa-star icon"></i></span> Here is a list of phone numbers where you can contact <br>us quickly
                    </div>
                    <h6 class="mt-5 fs-3">Centers</h6>
                    <p class="mt-2 fs-5"><span><i class="fa-sharp fa-solid fa-star icon"></i></span> At Centers,You can see the list of departments which we<br>can service for you.</p>
                    <h6 class="mt-5 fs-3">News</h6>
                    <p class="mt-2 fs-5"><span><i class="fa-sharp fa-solid fa-star icon"></i></span> News is the section for health knowledge.We aim to<br>provide messages that will benifit you.</p>
                    <h6 class="mt-5 fs-3">Contact</h6>
                    <p class="mt-2 fs-5"><span><i class="fa-sharp fa-solid fa-star icon"></i></span> Here is a list of phone numbers where you can contact <br>us quickly . </p>
                    <h6 class="mt-5 fs-3">Find Doctor</h6>
                    <p class="mt-2 fs-5"><span><i class="fa-solid fa-user-doctor icon"></i></span> Here is a list of phone numbers where you can contact us <br>quickly.</p>
                    <h6 class="mt-5 fs-3">Pharmacy near me</h6>
                    <p class="mt-2 fs-5"><i class="fa-solid fa-prescription-bottle-medical icon"><span></span></i></span> Here is a list of phone numbers where you can contact us <br> quickly.</p>
                    <h6 class="mt-5 fs-3">Emergency</h6>
                    <p class="mt-2 fs-5"><span><i class="fa-solid fa-truck-medical icon"></i></span> Here is a list of phone numbers and addresses you can<br> contact at emergency time.</p>
                    <h6 class="mt-5 fs-3">Make Appointment</h6>
                    <p class="mt-2 fs-5"><span><i class="fa-regular fa-calendar-check icon"></i></span> Here is a list of phone numbers where you can contact us <br> quickly.</p>
                    <h6 class="mt-5 fs-3">Blood Donation</h6>
                    <p class="mt-2 fs-5"><span> <i class="fa-solid fa-hand-holding-droplet icon"></i></span> Here is the page you can fill information for donation of <br> blood.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>