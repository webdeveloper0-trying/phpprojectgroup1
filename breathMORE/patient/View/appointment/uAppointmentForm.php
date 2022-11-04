<!DOCTYPE html>
<html lang="en">

<head>
    <title>AppointmentForm</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <?php

    session_start();
    if (!isset($_SESSION["userId"])) {
        header("Location: ../uRegisterLogin/register.php");
    } else {
        $userId = $_SESSION["userId"];
    }
    include '../../Controller/appointment/uFillAppointmentForm.php';


    include "../../../patient/Controller/common/aChColorTxtController.php";
    include "../../../admin/Controller/adminProfile/aSelectMsgController.php";


    if (isset($_GET["id"])) {
        $docId = $_GET["id"];

        $sql = $pdo->prepare("
                        SELECT doctor_id,doctor_name,center FROM doctor_lists
                        WHERE doctor_id = :id");

        $sql->bindValue(':id', $docId);
        $sql->execute();

        $docName = $sql->fetchAll(PDO::FETCH_ASSOC);

        $sql = $pdo->prepare("
    SELECT day,start_time,end_time FROM doctor_dutytime_lists
    WHERE doc_id = :id");

        $sql->bindValue(':id', $docId);
        $sql->execute();

        $docDateTime = $sql->fetchAll(PDO::FETCH_ASSOC);;


        $docDays = $docDateTime[0]["day"];

        $str_arr = explode(",", $docDays);
    }
    ?>
    <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <!-- custom css files 2 -->
    <link rel="stylesheet" href="../common/css/style.css">
    <link rel="stylesheet" href="../common/uNavbar/css/uSecNavbar.css" />
    <link rel="stylesheet" href="./css/uAppointmentForm.css">

    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- custom js1 -->
    <script src="../common/jq/jquery-3.6.0.min.js" defer></script>
    <script src="./js/uChoseDocDay.js" defer></script>


</head>

<body>
    <div class="mx-5">
        <?php
        include("../common/uNavbar/uSecNavbar.php") ?>

        <div class="d-flex justify-content-center align-items-center flex-column">

            <h3 class="title h3 my-5">Appointment Form
                <span class="titleBar"></span>
            </h3>
            <form action="../../Controller/appointment/uAcceptUserAppointmentController.php" method="post" class="form d-flex justify-content-center align-items-center flex-column p-5">

                <div class="appointmentFormCon row">

                    <div class="con1 col col-5 me-5">
                        <div class="form-outline my-4">
                            <label class="form-label" for="patientId">Patient Id</label>
                            <input type="text" name="patientId" id="patientId" class="form-control text-center" value="<?= $userInfos[0]["register_id"] ?>" readonly />
                        </div>


                        <div class="form-outline my-4">
                            <label class="form-label" for="patientName">Name</label>

                            <input type="text" name="patientName" id="patientName" class="form-control text-center" value="<?= $userInfos[0]["user_name"] ?>" readonly />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="patientEmail">Email</label>
                            <input type="email" name="patientEmail" id="patientEmail" class="form-control text-center" value="<?= $userInfos[0]["user_email"] ?>" readonly />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="patientPhNo">Ph.No</label>
                            <input type="text" name="patientPhNo" id="patientPhNo" class="form-control text-center" value="<?= $userInfos[0]["ph_num"] ?>" readonly />
                        </div>

                        <div class="form-outline mb-4">

                            <label class="form-label" for="patientGender">Gender</label>
                            <input type="text" name="gender" id="patientGender" class="form-control text-center" value="<?= $userInfos[0]["gender"]  ?>" readonly />
                        </div>

                        <div class="form-outline mb-4">
                            <?php
                            $birthDate = $userInfos[0]["date_of_birth"];

                            $currentDate = date("Y/m/d");

                            $age = date_diff(date_create($birthDate), date_create($currentDate));
                            ?>
                            <label class="form-label" for="patientAge">Age</label>
                            <input type="text" name="patientAge" id="patientAge" class="form-control text-center" value="<?= $age->format("%y") ?>" readonly />
                        </div>

                        <div class="form-outline">
                            <label class="form-label" for="patientAddress">Address</label>
                            <textarea class="form-control bg-light" name="patientAddress" id="patientAddress" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="con2 col col-5 ms-5">
                        <div class="form-outline my-4">
                            <input type="hidden" name="doctorID" id="" value="<?= $docName[0]["doctor_id"] ?>" />
                            <input type="hidden" name="docCenter" id="" value="<?= $docName[0]["center"] ?>">
                            <label class="form-label" for="docName">Doctor Name</label>
                            <input type="text" name="docName" id="docName" class="form-control" value="Dr.<?= $docName[0]["doctor_name"] ?>" readonly />
                        </div>

                        <div class="form-outline appointmentDay mb-4 mt-4">

                            <label for="" class="mb-3">ChooseYour Preferred Day</label>

                            <div class="animate__animated animate__slideInDown d-flex flex-wrap p-2">

                                <?php for ($i = 0; $i < count($str_arr); $i++) { ?>
                                    <input type="text" name="docDay" id="docDay" class="form-control docDay" value="<?= $str_arr[$i] ?>" readonly />
                                <?php } ?>


                            </div>

                        </div>

                        <div class="form-outline appointmentTime mb-4">

                            <label for="" class="mb-3">Time is</label>

                            <div class="animate__animated animate__slideInDown d-flex flex-wrap p-2">
                                <?php
                                $dateTime =   $docDateTime[0]["start_time"] . " - " . $docDateTime[0]["end_time"]
                                ?>

                                <input type="text" name="docTime" id="docTime" class="form-control docTime" value="<?= $dateTime ?>" readonly />

                            </div>

                        </div>

                        <div class="form-outline">
                            <label class="form-label" for="patientAddress">Feeling</label>
                            <textarea class="form-control bg-light" name="patientFeeling" id="patientAddress" rows="10"></textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" name="applyAppointment" class="btn btn-purple btn-lg my-4">Apply for Appointment</button>
            </form>
        </div>
    </div>

    
</body>

</html>