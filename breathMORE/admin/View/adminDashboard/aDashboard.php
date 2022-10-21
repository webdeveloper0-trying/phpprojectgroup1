<?php

session_start();

if (isset($_POST['adminname']) && isset($_POST['password'])) {
    $adminname = $_POST['adminname'];
    $password = $_POST['password'];
    $_SESSION["adminname"] = $adminname;
}

if (!isset($_SESSION["adminname"])) {
    header("Location: ../adminRegisterLogin/aLogin.php");
} else {
    $adminname = $_SESSION["adminname"];
}
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
                <button type="button" class="my-3 btn btn-lg btn-green btn-rounded">
                    <a href="../adminManagement/aManagement.php">Admin Management</a>
                </button>
            </div>
            <div class="col col-4 text-center">
                <button type="button" class="my-3 btn btn-lg btn-green btn-rounded">
                    <a href="">Total Registered List</a>
                </button>
            </div>
            <div class="col col-4 text-center">
                <button type="button" class="my-3 btn btn-lg btn-green btn-rounded">
                    <a href="../adminAppointment/aAppointmentList.php">Total Appointments</a>
                </button>
            </div>
            <div class="col col-4 text-center">
                <button type="button" class="my-3 btn btn-lg btn-green btn-rounded">
                   <a href="">Doctors List</a>
                </button>
            </div>

            <div class="col col-4 text-center">
                <button type="button" class="my-3 btn btn-lg btn-green btn-rounded">
                    <a href="../adminBloodDonation/abloodDonationList.php">Blood Donations</a>
                </button>
            </div>
            <div class="col col-4 text-center">
                <button type="button" class="my-3 btn btn-lg btn-green btn-rounded">
                    <a href="">Medicine</a>
                </button>
            </div>
            <div class="col col-4 text-center">
                <button type="button" class="my-3 btn btn-lg btn-green btn-rounded">
                    <a href="">Lab Reports</a>
                </button>
            </div>
            <div class="col col-4 text-center">
                <button type="button" class="my-3 btn btn-lg btn-green btn-rounded">
                    <a href="">Pharmacies List</a>
                </button>
            </div>
            <div class="col col-4 text-center">
                <button type="button" class="my-3 btn btn-lg btn-green btn-rounded">
                    <a href="../adminBlog/aBlogList.php">Blogs</a>
                </button>
            </div>


        </div>
    </div>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>