<?php
include '../../Controller/aDashboard/aDashboardCountController.php';
session_start();

if (isset($_POST['adminname']) && isset($_POST['password'])) {
    $adminname = $_POST['adminname'];
    $password = $_POST['password'];
    $_SESSION["adminname"] = $adminname;
}

if (!isset($_SESSION["adminname"])) {
    header("Location: ../adminRegisterLogin/aLogin.php");
} else {
    if ($_SESSION["ismainadmin"] == 0) {
        header("Location: ./aSubAdminDashboard.php");
    }
    $adminname = $_SESSION["adminname"];
}

print_r($regCount[0]['COUNT(register_id)']);

$register = $regCount[0]['COUNT(register_id)'];

$appointement = $appCount[0]['COUNT(id)'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?=time()" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css?=time()" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap?=time()" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css?=time()" rel="stylesheet" />

    <!-- custom css -->
    <link rel="stylesheet" href="../common/css/style.css">
    <link rel="stylesheet" href="./css/adashboard.css" <?php time(); ?>>

</head>

<body>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <h3 class="h3 header my-5">Admin Dashboard</h3>
        <div class="adminDashboard col col-10 row justify-content-center align-items-center flex-wrap py-5">
            <div class="col col-4 text-center">
                <a href="../adminManagement/aManagement.php">
                    <button type="button" id="mainAdminControl" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        Admin Management
                    </button>

                </a>
            </div>
            <div class="col col-4 text-center">

                <a href="../adminURegsiter/aURegisterListController.php">
                    <button type="button" class="my-3 btn btn-lg btn-green btn-rounded">

                        <a href="../aTotalRegisterList/aTotalRegister.php">
                            <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                                Total Registered List
                                <span class="badge badge-primary rounded-pill fs-6"><?= $register; ?></span>
                            </button>
                        </a>
            </div>
            <div class="col col-4 text-center">
                <a href="../adminAppointment/aAppointmentList.php">

                    <button type="button" class="my-3 btn btn-lg btn-green btn-rounded">
                        Total Appointment Lists

                        <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                            Total Appointments
                            <span class="badge badge-primary rounded-pill fs-6">14</span>

                        </button>
                </a>
            </div>
            <div class="col col-4 text-center">
                <a href="../doctor/list.php">

                    <button type="button" class="my-3 btn btn-lg btn-green btn-rounded">
                        Doctor Lists

                        <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                            Doctors List
                            <span class="badge badge-primary rounded-pill fs-6">14</span>

                        </button>
                </a>
            </div>

            <div class="col col-4 text-center">
                <a href="../adminBloodDonation/abloodDonationList.php">
                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        Blood Donations
                        <span class="badge badge-primary rounded-pill fs-6">14</span>
                    </button>
                </a>
            </div>
            <div class="col col-4 text-center">
                <a href="../diseAndmedi/addmedi.php">

                    <button type="button" class="my-3 btn btn-lg btn-green btn-rounded">
                        Diseases and Medicine

                        <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                            Medicine list
                            <span class="badge badge-primary rounded-pill fs-6">14</span>

                        </button>
                </a>
            </div>
            <div class="col col-4 text-center">
                <a href="../labreport/labList.php">

                    <button type="button" class="my-3 btn btn-lg btn-green btn-rounded">

                        <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">

                            Lab Reports
                            <span class="badge badge-primary rounded-pill fs-6">14</span>
                        </button>
                </a>
            </div>
            <div class="col col-4 text-center">
                <a href="../subscribeNews/aSubscribeNewList.php">
                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">

                        Subscribtion List
                        <span class="badge badge-primary rounded-pill fs-6">14</span>
                    </button>
                </a>
            </div>
            <div class="col col-4 text-center">
                <a href="../adminBlog/aBlogList.php">
                    <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                        Blogs list
                        <span class="badge badge-primary rounded-pill fs-6">14</span>
                    </button>
                </a>
            </div>
            <div class="col col-4 text-center">
                <a href="../oxygen/o2list.php">
                    <button type="button" class="my-3 btn btn-lg btn-green btn-rounded">
                        Oxygen
                    </button>
                </a>
            </div>
            <div class="col col-4 text-center">
                <a href="../pharmacy/addPharmacy.php">
                    <button type="button" class="my-3 btn btn-lg btn-green btn-rounded">
                        Pharmacies
                    </button>
                </a>
            </div>

            <div class="col col-4 text-center">

                <a href="../phistory/phadd.php">
                    <button type="button" class="my-3 btn btn-lg btn-green btn-rounded">
                        Patient History

                        <a href="../adminBlog/aBlogList.php">
                            <button type="button" class="my-3 btn btn-xl py-3 btn-green btn-rounded d-flex align-items-center">
                                Blogs
                                <span class="badge badge-primary rounded-pill fs-6">14</span>

                            </button>
                        </a>
            </div>


        </div>
    </div>



    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>