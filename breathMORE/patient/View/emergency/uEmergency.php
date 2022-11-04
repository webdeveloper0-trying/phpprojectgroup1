<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency</title>

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
    include "../../Controller/emergency/oxygenListController.php";


    ?>


    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js" defer></script>

    <!-- Splide JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js" defer></script>

    <!-- custom css3 -->
    <link rel="stylesheet" href="../common/css/style.css" <?php time(); ?> />
    <link rel="stylesheet" href="../common/uNavbar/css/uNavbar.css" />
    <link rel="stylesheet" href="../common/uFooter/css/uFooter.css">
    <link rel="stylesheet" href="./css/uEmergency.css" <?php time(); ?> />
</head>

<body>
    <div class="con mx-5 p-5">
        <h3 class="title my-5">Emergency Departments and Embulance Services
            <span class="titleBar"></span>
        </h3>

        <div class="row">
            <div class="col col-9">
                <h5 class="emergencyTitle mb-4">In Case of <span>Emergency</span>, Please Call
                    <span> 09455 222 111</span>
                </h5>
                <p>
                    Whether you arrive because of broken bones or a heart attack, our certified and specially
                    trained physicians and nurses are committed to providing you with the highest level of
                    emergency care in a safe environment.
                </p>

                <div class="balls d-flex justify-content-center">
                    <div class="ball mt-5 me-5"></div>
                    <div class="ball mt-5 me-5"></div>
                    <div class="ball mt-5 me-5"></div>
                </div>

            </div>

            <div class="col col-2">
                <img src="../storage/emergency/emergency1.jpg" alt="EmergencyImg1" class="emergencyImg1" />
            </div>
        </div>

        <div class="row mt-5">

            <div class="col col-2 me-5">
                <img src="../storage/emergency/emergency2.jpg" alt="EmergencyImg1" class="emergencyImg1" />
            </div>

            <div class="col col-9 ms-5">
                <h5 class="emergencyTitle mb-4">Emergency ambulance service for both local & remote area
                </h5>
                <p>
                    Hospital to Hospital patient transfer, Airport and Seaport pickup service
                    Ambulance for out-patient appointments, admission and discharge
                    Home visit
                    Ambulance and medical cover for sports activities, events, festivals, conference

                </p>

                <div class="balls d-flex justify-content-center">
                    <div class="ball mt-5 me-5"></div>
                    <div class="ball mt-5 me-5"></div>
                    <div class="ball mt-5 me-5"></div>
                </div>

            </div>
        </div>

        <div class="oxygenList row mt-5">
            <div class="col col-9">
                <h5 class="emergencyTitle mb-5">
                    24/7 Oxygen Available Places In Yangon
                </h5>

                <div class="oxygenTable">
                    <table class="table table-borderless">
                        <thead class="thead1">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Ph.NO</th>
                                <th scope="col">Address</th>
                                <th scope="col">Service</th>
                            </tr>
                        </thead>
                        <tbody class="my-word-break">
                            <?php
                            $count = 0;
                            foreach ($oxygenLists as $oxygenList) { ?>
                                <tr>
                                    <th scope="row" class="text-wrap"><?= ++$count; ?></th>
                                    <td class="text-wrap"><?= $oxygenList["name"] ?></td>
                                    <td class="text-wrap"><?= $oxygenList["ph_num"] ?></td>
                                    <td class="text-wrap"><?= $oxygenList["address"] ?></td>
                                    <td class="text-wrap"><?= $oxygenList["type_of_service"] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="balls d-flex justify-content-center">
                    <div class="square mt-5 me-5"></div>
                    <div class="square mt-5 me-5"></div>
                    <div class="square mt-5 me-5"></div>
                </div>

            </div>

            <div class="col col-2">
                <img src="../storage/emergency/emergency3.jpg" alt="EmergencyImg3" class="emergencyImg1" />
            </div>
        </div>

        <div class="callCenters row mt-5">

            <div class="col col-4 me-5">
                <img src="../storage/emergency/emergency4.jpg" alt="EmergencyImg4" class="emergencyImg4" />
            </div>

            <div class="col col-7 ms-5">
                <h5 class="emergencyTitle mb-4">
                    24 hours Call Centers
                    Billing & Payment Services
                </h5>

                <ol class="list-group list-group-light list-group-numbered rounded-0">
                    <li class="list-group-item d-flex justify-content-between align-items-start ps-4">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Billing & Payment Services</div>
                            01-231 777, 01-523 444
                        </div>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start ps-4">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Admission Information</div>
                            01-222 1111, 01-444 000
                        </div>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start ps-4">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Outpatient Appointments</div>
                            01-666 888, 01-567 999, 09-422049911
                        </div>

                    </li>
                </ol>

                <div class="balls d-flex justify-content-center">
                    <div class="square mt-5 me-5"></div>
                    <div class="square mt-5 me-5"></div>
                    <div class="square mt-5 me-5"></div>
                </div>

            </div>
        </div>

        <hr />

        <form class="mt-5" action="../../Controller/uFeedBack/uAddFeedbackController.php" method="POST">
            <h4 class="header mb-3">Your FeedBack</h4>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea name="fbMsg" class="form-control" id="form4Example3" rows="4"></textarea>
                <label class="form-label" for="form4Example3">Review</label>
            </div>



            <div class="row">

                <div class="col">
                    <label for="customRange3" class="form-label">Rating for our services</label>
                    <div class="range">
                        <input type="range" name="fbRating" class="form-range" min="0" max="5" step="0.5" id="customRange3" />
                    </div>
                </div>

                <div class="col">
                    <!-- Submit button -->
                    <button type="submit" name="fbSubmit" class="btn btn-purple btn-lg mb-4">Send</button>
                </div>
            </div>


        </form>





    </div>
</body>

</html>