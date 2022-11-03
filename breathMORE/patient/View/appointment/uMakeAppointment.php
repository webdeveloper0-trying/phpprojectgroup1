<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Appointment</title>

    
    <?php

    session_start();
    if (!isset($_SESSION["userId"])) {
        header("Location: ../uRegisterLogin/register.php");
    } else {
        $userId = $_SESSION["userId"];
    }

    include "../../../patient/Controller/common/aChColorTxtController.php";
    include "../../../admin/Controller/adminProfile/aSelectMsgController.php";

    ?>
   
   <link href="../storage/home/<?=$logoPic ?>" rel="icon" type="image/png" />



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
    <script src="./js/uChoseDoctor.js" <?= time() ?> defer></script>


</head>

<body>
    <div class="mx-5">
        <?php
        include("../common/uNavbar/uSecNavbar.php") ?>
        <div class="d-flex justify-content-center align-items-center flex-column">
            <h3 class="title h3 my-5">Make Appointment
                <span class="titleBar"></span>
            </h3>

            <h5 class="h5 mt-3">Make an appointment with the doctor right now and choose your preferred date and time!!!</h5>


            <div class="appintmentBox d-flex justify-content-center flex-row mt-5">
                <div class="col-5 appointmentGuideline d-flex justify-content-center align-items-center flex-column pt-5 pb-3">

                    <h5 class="text-green text-center mb-3">Need a appointment??</h5>

                    <div class="alertAppointment text-center ps-5 py-2 mb-5">
                        <p>This Appointment is ONE WEEK BOOKING.So,you must take a booking BEFORE ONE WEEK the day you come our hospital</p>
                    </div>
                    <div class="tagging">

                        <p><span class="icon"></span> Select Speciality you want to take a booking</p>
                        <p><span class="icon"></span>Select Doctor and Click Doctor you want to take a booking</p>
                        <p><span class="icon"></span>Fill infos in the Appointment form and Click Send</p>
                        <p><span class="icon"></span>Return Message Will Appear</p>
                    </div>

                </div>

                <div class="appointmentChose col-5 ms-5">

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="choseSpeciality">Choose Speciality</label>
                        <select class="form-select bg-purple" id="choseSpeciality">
                            <option selected class="bg-primary" disabled>Choose the Speciality</option>
                            <option value="1" class="bg-primary">Eye</option>
                            <option value="2" class="bg-primary">General</option>
                            <option value="3" class="bg-primary">Skin</option>
                            <option value="4" class="bg-primary">Surgery</option>
                            <option value="5" class="bg-primary">Kidney</option>
                        </select>
                    </div>


                    <div id="docNames" class="animate__animated animate__slideInDown d-flex flex-wrap p-5">

                        <h6>Doctors' Names will appear HERE</h6>

                    </div>
                </div>
                <!-- container div end -->
            </div>
        </div>



</body>

</html>