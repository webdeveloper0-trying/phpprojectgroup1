<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sub Dashboard</title>

    <?php
    session_start();
    include "../../../patient/Controller/common/aChColorTxtController.php";
    include "../../../admin/Controller/adminProfile/aSelectMsgController.php";
    include '../../Controller/aDashboard/aDashboardCountController.php';


    if (isset($_POST['adminname']) && isset($_POST['password'])) {
        $adminname = $_POST['adminname'];
        $password = $_POST['password'];
        $_SESSION["adminname"] = $adminname;
    }

    if (!isset($_SESSION["adminname"])) {
        header("Location: ../adminRegisterLogin/aLogin.php");
    }
    $adminname = $_SESSION["adminname"];




    $register = $regCount[0]['COUNT(register_id)'];

    $appointement = $appCount[0]['COUNT(id)'];

    $doctors = $docCount[0]['COUNT(doctor_id)'];

    $donations = $donCount[0]['COUNT(id)'];


    $medicines = $medCount[0]['COUNT(id)'];


    $reports = $labCount[0]['COUNT(id)'];

    $pharmacies = $pharmacyCount[0]['COUNT(id)'];

    $patients = $patientCount[0]['COUNT(id)'];

    $oxygens = $oxygenCount[0]['COUNT(id)'];

    $subscriptions = $subCount[0]['COUNT(id)'];

    $blogs = $blogCount[0]['COUNT(id)'];

    $faqs = $faqCount[0]['COUNT(id)'];

    $feedbacks = $feedbackCount[0]['COUNT(id)'];

    $bloodstocks = $bloodStockCount[0]['COUNT(id)'];


    ?>


    <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?=time()" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css?=time()" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap?=time()" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css?=time()" rel="stylesheet" />

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- custom css -->
    <link rel="stylesheet" href="../common/css/style.css">
    <link rel="stylesheet" href="./css/adashboard.css" <?php time(); ?>>

</head>

<body>

    <div class="d-flex justify-content-center align-items-center flex-row position-absolute top-0 end-0 mx-5 mt-5 position-relative">
        <a href="../adminProfile/adminProfile.php">
            <i class='bx bx-lg bxs-user-circle' style='color:#4b694d'></i>

        </a>
        <i id="adminLogout" class='bx bxs-down-arrow me-5' style='color:#4b694d'></i>

        <ul id="dropBox" class="bg-light p-3 rounded position-absolute text-center end-0 top-100">
            <a href="../adminProfile/adminProfile.php">
                <li>Profile</li>
            </a>
            <a href="../adminRegisterLogin/aLogin.php">
                <li>LogOut</li>
            </a>
        </ul>
    </div>

    <div class="d-flex justify-content-center align-items-center flex-column">


        <h3 class="h3 header my-5">Admin Dashboard</h3>
        <div class="adminDashboard col col-10 row justify-content-center align-items-center flex-wrap py-5">
           
            <div class="col col-4 text-center">
                <a href="../aTotalRegisterList/aTotalRegister.php">
                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        Total Registered List
                        <span class="badge badge-primary rounded-pill fs-6"><?= $register; ?></span>
                    </button>
                </a>
            </div>
            <div class="col col-4 text-center">
                <a href="../adminAppointment/aAppointmentList.php">
                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        Total Appointments
                        <span class="badge badge-primary rounded-pill fs-6"><?= $appointement; ?></span>

                    </button>
                </a>
            </div>
            <div class="col col-4 text-center">
                <a href="../doctor/list.php">
                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        Doctors List
                        <span class="badge badge-primary rounded-pill fs-6">
                            <?= $doctors; ?>
                        </span>

                    </button>
                </a>
            </div>

            <div class="col col-4 text-center">
                <a href="../adminBloodDonation/abloodDonationList.php">
                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        Blood Donations
                        <span class="badge badge-primary rounded-pill fs-6">
                            <?= $donations; ?>
                        </span>
                    </button>
                </a>
            </div>

            <div class="col col-4 text-center">
                <a href="../bloodStock/listBs.php">
                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        Blood Stocks
                        <span class="badge badge-primary rounded-pill fs-6">
                            <?= $bloodstocks; ?>
                        </span>
                    </button>
                </a>
            </div>

            <div class="col col-4 text-center">
                <a href="../diseAndmedi/addmedi.php">

                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        Medicine list
                        <span class="badge badge-primary rounded-pill fs-6">
                            <?= $medicines; ?>
                        </span>

                    </button>
                </a>
            </div>
            <div class="col col-4 text-center">
                <a href="../labreport/labList.php">
                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        Lab Reports
                        <span class="badge badge-primary rounded-pill fs-6">
                            <?= $reports; ?>
                        </span>
                    </button>
                </a>
            </div>

            <div class="col col-4 text-center">
                <a href="../pharmacy/listPharmacy.php">
                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        Pharmacies
                        <span class="badge badge-primary rounded-pill fs-6">
                            <?= $pharmacies; ?>
                        </span>
                    </button>
                </a>
            </div>


            <div class="col col-4 text-center">
                <a href="../phistory/phlist.php">
                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        Patients' History
                        <span class="badge badge-primary rounded-pill fs-6">
                            <?= $patients; ?>
                        </span>
                    </button>
                </a>
            </div>


            <div class="col col-4 text-center">
                <a href="../oxygen/o2list.php">
                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        Oxygen
                        <span class="badge badge-primary rounded-pill fs-6">
                            <?= $oxygens; ?>
                        </span>
                    </button>
                </a>
            </div>

            <div class="col col-4 text-center">
                <a href="../faq/faqAdd.php">
                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        FAQs
                        <span class="badge badge-primary rounded-pill fs-6">
                            <?= $faqs; ?>
                        </span>
                    </button>
                </a>
            </div>

            <div class="col col-4 text-center">

                <a href="../feedback/aFeedbackList.php">
                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        FeedBacks
                        <span class="badge badge-primary rounded-pill fs-6"><?= $feedbacks; ?></span>

                    </button>
                </a>
            </div>

            <div class="col col-4 text-center">
                <a href="../subscribeNews/aSubscribeNewList.php">
                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        Subscribtion List
                        <span class="badge badge-primary rounded-pill fs-6"><?= $subscriptions; ?></span>
                    </button>
                </a>
            </div>


            <div class="col col-4 text-center">

                <a href="../adminBlog/aBlogList.php">
                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        Blogs
                        <span class="badge badge-primary rounded-pill fs-6"><?= $blogs; ?></span>

                    </button>
                </a>
            </div>

            <div class="col col-4 text-center">

                <a href="../contactUs/addContact.php">
                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        Contact


                    </button>
                </a>
            </div>

            <div class="col col-8"></div>




        </div>
    </div>

    <script>
        document.getElementById("adminLogout").addEventListener("click", function() {
            console.log("admin Logout");
            document.getElementById("dropBox").classList.toggle("show");
        })
    </script>




    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>