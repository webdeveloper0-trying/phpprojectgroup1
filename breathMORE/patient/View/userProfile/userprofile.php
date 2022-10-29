<?php
include "../../Controller/userProfile/profileController.php";
include "../common/uNavbar/uNavbar.php";
include "../common/uFooter/uFooter.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- custom css -->

    <link rel="stylesheet" href="../common/css/style.css" />
    <link rel="stylesheet" href="../common/uNavbar/css/uNavbar.css" />
    <link rel="stylesheet" href="../common/uFooter/css/uFooter.css" />
    <link rel="stylesheet" href="./css/userProfile.css" <?php time(); ?> />

    <!-- js, jq -->
    <script src="../common/jq/jquery-3.6.0.min.js" defer></script>
    <script src="./js/profile.js" defer></script>
    <script src="./js/history.js" defer></script>


</head>

<body>


    <div class="mx-5">

        <div class="uProfileTitle d-flex justify-content-center flex-row my-5">
            <h4 class="h3 me-4">Your Profile</h4>
            <div class="titleLine"></div>
        </div>


        <div class="profileCon d-flex py-4 shadow-4 ms-5">
            <div class="uProfileImgBox d-flex justify-content-center align-items-center flex-column ms-5">
                <div class="uPImg d-flex justify-content-center align-items-center mb-4">
                    <img src="../storage/home/benefitsOfCoffee.jpg" class="img-fluid uPic mb-3" alt="User" />
                </div>
                <div class="uPName text-center">
                    <span><?= $userInfo[0]["user_name"] ?></span>
                    <span class="uPline"></span>
                </div>
            </div>
            <div class="uProfileInfo ms-5">
                <table class="table text-start">
                    <thead>
                        <tr>
                            <th colspan="4" class="text-muted text-capitalize">Your Id is <span><?= $userInfo[0]["register_id"] ?></span></th>
                        </tr>
                        <tr>
                            <th><span class="text-muted">Gender:</span>
                                <?= $userInfo[0]["gender"] ?>
                            </th>
                            <th scope="col">
                                <span class="text-muted">Date of Birth:</span>
                                <?= $userInfo[0]["date_of_birth"] ?>
                            </th>
                            <th>
                                <span class="text-muted">Age:</span>
                                <?= $userInfo[0]["age"] ?>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td><span class="text-muted">Email</span>
                                <?= $userInfo[0]["user_email"] ?>
                            </td>

                            <td colspan="2"><span class="text-muted">Ph.No:</span>
                                <?= $userInfo[0]["ph_num"] ?>
                            </td>

                        </tr>

                    </tbody>
                </table>

                <div class="container d-flex justify-content-end">
                    <a href="">
                        <button class="btn btn-purple">Go to Setting</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="pHistory ms-5">

            <div class="selectTitle d-flex mt-5 mb-3 pb-1">
                <button class="uSelectLink me-5 ms-1" id="uAHistory">
                    Appointment History
                </button>

                <button class="uSelectLink" id="uReport">
                    Lab Report
                    </butt>
            </div>
            <div class="uAHistory animate__animated animate__fadeInLeft">


                <table class="table utable shadow-3 rounded" id="lab">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Speciality</th>
                            <th>Doctor's Id</th>
                            <th>Patiend Id</th>
                            <th>Ph.NO</th>
                            <th>Diagnosis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count1 = ($page1 * $rowLimit1) - ($rowLimit1 - 1);

                        foreach ($patientHistory as $patient) { ?>
                            <tr>
                                <td><?= $count1++ ?></td>
                                <td><?= $patient["date"] ?></td>
                                <td><?= $patient["time"] ?></td>
                                <td><?= $patient["categories"] ?></td>
                                <td><?= $patient["doctor_id"] ?></td>
                                <td><?= $patient["patient_id"] ?></td>
                                <td><?= $patient["ph_no"] ?></td>
                                <td><?= $patient["diagnosis"] ?></td>
                            </tr>
                        <?php }
                        ?>
                        <tr>
                            <td colspan="4">
                                <button type="button" id="downloadHistory" class="btn btn-purple">Download</button>

                            </td>

                            <td colspan="4" class="container d-flex  justify-content-end">
                                <ul class="pagination pagination-circle">
                                    <li class="page-item 
                    <?php if ($page1 <= 1) {
                        echo "disabled";
                    }  ?>
                    ">
                                        <a class="page-link" href="?page1=<?= $page1 - 1 ?>" aria-label="Previous">
                                            <span aria-hidden="true">Previous</span>
                                        </a>
                                    </li>

                                    <?php for ($i = 1; $i <= $totalPages1; $i++) { ?>
                                        <li class="page-item 
                        <?php
                                        if ($page1 == $i) {
                                            echo "active";
                                        }
                        ?>
                        "><a class="page-link" href="?page1=<?= $i ?>"><?= $i ?></a></li>
                                    <?php } ?>


                                    <li class="page-item 
                     <?php if ($page1 >= $totalPages1) {
                            echo "disabled";
                        }  ?>">
                                        <a class="page-link" href="?page1=<?= $page1 + 1 ?>" aria-label="Next">
                                            <span aria-hidden="true">Next</span>
                                        </a>
                                    </li>
                                </ul>

                            </td>
                        </tr>
                    </tbody>
                </table>


            </div>


            <div class="uReport animate__animated animate__fadeInLeft">
                <table class="table utable shadow-3 rounded" id="labReport">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th> Reference Doctor</th>
                            <th> ResultDate</th>
                            <th>Test</th>
                            <th>Result</th>
                            <th>RefRange</th>
                            <th>Unit</th>
                            <th>Remark</th>
                            <th>Reported_by</th>
                            <th>Authorised_by</th>

                        </tr>
                    </thead>
                    <tbody class="tablebody">
                        <?php $count2 = ($page2 * $rowLimit2) - ($rowLimit2 - 1);

                        foreach ($labList as $patient) { ?>
                            <tr>
                                <td><?= $count2++ ?></td>
                                <td><?= $patient["ref_doc"] ?></td>
                                <td><?= $patient["result_date"] ?></td>
                                <td><?= $patient["test"] ?></td>
                                <td><?= $patient["result"] ?></td>
                                <td><?= $patient["ref_rate"] ?></td>
                                <td><?= $patient["unit"] ?></td>
                                <td><?= $patient["remark"] ?></td>
                                <td><?= $patient["reported_by"] ?></td>
                                <td><?= $patient["authorised_by"] ?></td>

                            </tr>
                        <?php }
                        ?>

                        <tr>
                            <td colspan="4">
                                <button type="button" id="downloadLabReport" class="btn btn-purple">Download</button>

                            </td>

                            <td colspan="4" class="container d-flex  justify-content-end">
                                <ul class="pagination pagination-circle">
                                    <li class="page-item 
                    <?php if ($page2 <= 1) {
                        echo "disabled";
                    }  ?>
                    ">
                                        <a class="page-link" href="?page2=<?= $page2 - 1 ?>" aria-label="Previous">
                                            <span aria-hidden="true">Previous</span>
                                        </a>
                                    </li>

                                    <?php for ($i = 1; $i <= $totalPages2; $i++) { ?>
                                        <li class="page-item 
                        <?php
                                        if ($page2 == $i) {
                                            echo "active";
                                        }
                        ?>
                        "><a class="page-link" href="?page2=<?= $i ?>"><?= $i ?></a></li>
                                    <?php } ?>


                                    <li class="page-item 
                     <?php if ($page2 >= $totalPages2) {
                            echo "disabled";
                        }  ?>">
                                        <a class="page-link" href="?page2=<?= $page2 + 1 ?>" aria-label="Next">
                                            <span aria-hidden="true">Next</span>
                                        </a>
                                    </li>
                                </ul>

                            </td>
                        </tr>
                    </tbody>
                </table>





            </div>







        </div>

    </div>
</body>

</html>