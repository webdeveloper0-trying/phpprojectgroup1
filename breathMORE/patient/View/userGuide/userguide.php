<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Guide</title>

    <?php

    session_start();
    if (!isset($_SESSION["userId"])) {
        header("Location: ../uRegisterLogin/register.php");
    } else {
        $userId = $_SESSION["userId"];
    }
    include "../common/uNavbar/uNavbar.php";
    include "../common/uFooter/uFooter.php";

    include "../../../patient/Controller/common/aChColorTxtController.php";
    include "../../../admin/Controller/adminProfile/aSelectMsgController.php";


    ?>

    <!-- custom css3 -->
    <link rel="stylesheet" href="../common/css/style.css" />
    <link rel="stylesheet" href="../common/uNavbar/css/uNavbar.css" />
    <link rel="stylesheet" href="../common/uFooter/css/uFooter.css" /F>
    <link rel="stylesheet" href="./css/userguide.css">
</head>

<body class="body">
    <div class="row mx-5">

        <div class="row  justify-content-center align-items-center flex-column">
            <h3 class="header text-center my-5">UserGuide</h3>

            <div class="row">
                <ul class="list-group list-group-light">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <i class='bx bxs-bookmarks bx-lg' style='color:#4B694D'></i>
                            <div class="ms-3">
                                <h6>Make a Appointment</h6>
                                <p class="fw-bold mb-1">Here is the page you can take an appointment easily and quickly.</p>
                            </div>
                        </div>
                        <a class="btn btn-link btn-rounded btn-sm" href="../appointment/uMakeAppointment.php" role="button">View</a>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <i class='bx bxs-user-pin bx-lg' style='color:#4B694D'></i>
                            <div class="ms-3">
                                <h6>Doctors</h6>
                                <p class="fw-bold mb-1">Here is the page you can see the doctors in our hospital.</p>
                            </div>
                        </div>
                        <a class="btn btn-link btn-rounded btn-sm" href="../appointment/uMakeAppointment.php" role="button">View</a>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <i class='bx bxs-donate-blood bx-lg' style='color:#4b694d'></i>
                            <div class="ms-3">
                                <h6>Blood Donation</h6>
                                <p class="fw-bold mb-1">Here is the page you can fill information required for blood donation in a quick time.</p>
                            </div>
                        </div>
                        <a class="btn btn-link btn-rounded btn-sm" href="../bloodDonation/bloodDonationForm.php" role="button">View</a>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <i class='bx bx-plus-medical bx-lg' style='color:#4B694D'></i>
                            <div class="ms-3">
                                <h6>Emergency</h6>
                                <p class="fw-bold mb-1">Here is the page you can easily find emergency contacts.</p>
                            </div>
                        </div>
                        <a class="btn btn-link btn-rounded btn-sm" href="../emergency/uEmergency.php" role="button">View</a>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <i class='bx bxs-capsule bx-lg' style='color:#4b694d'></i>
                            <div class="ms-3">
                                <h6>Pharmacies</h6>
                                <p class="fw-bold mb-1">Here is the page you can easily find Pharmacies contacts and about Medicines.</p>
                            </div>
                        </div>
                        <a class="btn btn-link btn-rounded btn-sm" href="../pharmacy/pharmacy.php" role="button">View</a>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <i class='bx bx-lg bxs-info-circle' style='color:#4b694d'></i>
                            <div class="ms-3">
                                <h6>Abouts Us</h6>
                                <p class="fw-bold mb-1">Here is the page you can read about our hospital system.</p>
                            </div>
                        </div>
                        <a class="btn btn-link btn-rounded btn-sm" href="../aboutUs/uAboutUs.php" role="button">View</a>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <i class='bx bx-lg bxs-info-circle' style='color:#4b694d'></i>
                            <div class="ms-3">
                                <h6>Centers</h6>
                                <p class="fw-bold mb-1">Here is the page you can read about the centers of our hospital.</p>
                            </div>
                        </div>
                        <a class="btn btn-link btn-rounded btn-sm" href="../centers/center.php" role="button">View</a>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <i class='bx bx-lg bxs-info-circle' style='color:#4b694d'></i>
                            <div class="ms-3">
                                <h6>Blogs</h6>
                                <p class="fw-bold mb-1">Here is the page you can read blogs of us.</p>
                            </div>
                        </div>
                        <a class="btn btn-link btn-rounded btn-sm" href="../blogs/mainBlog.php" role="button">View</a>
                    </li>

                    
                </ul>
            </div>


        </div>
    </div>
</body>

</html>