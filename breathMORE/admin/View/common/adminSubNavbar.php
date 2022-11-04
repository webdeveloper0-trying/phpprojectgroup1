<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />

    <!-- Bootstrap css1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrap js1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?=time()" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css?=time()" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap?=time()" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css?=time()" rel="stylesheet" />

    <!-- Boxicon  -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


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

    <button class="btn btn-green btnMenu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
        <i class='bx bx-menu bx-sm' style='color:#fff'></i>
    </button>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <?php

            $webName = explode("/", $webName);

            $fName = $webName[0];
            $lName = $webName[1];
            ?>
            <h5 class="offcanvas-title mt-3 header homeHeader fw-bold ps-3" id="offcanvasWithBothOptionsLabel">
                <?= $fName ?><span><?= $lName ?></span></h5>

            <button type="button" class="btn-close btn-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group text-center mt-5">
                <li class="p-3">
                    <a href="../adminProfile/adminProfile.php">Admin Profile</a>
                </li>
                <li class="p-3">
                    <a href="../adminDashboard/aSubAdminDashboard.php">Admin DashBoard</a>
                </li>
                <li class="p-3">
                    <a href="../aTotalRegisterList/aTotalRegister.php">Total Registered List</a>
                </li>
                <li class="p-3">
                    <a href="../adminAppointment/aAppointmentList.php">Total Appointments</a>
                </li>
                <li class="p-3">
                    <a href="../adminBloodDonation/abloodDonationList.php">Blood Donations</a>
                </li>
                <li class="p-3">
                    <a href="../bloodStock/listBs.php">Blood Stocks</a>
                </li>

                <li class="p-3">
                    <a href="../doctor/list.php">Doctors</a>
                </li>
                
                <li class="p-3">
                    <a href="../pharmacy/listPharmacy.php">Pharmacies</a>
                </li>
                <li class="p-3">
                    <a href="../diseAndmedi/addmedi.php">Disease And Medicine</a>
                </li>

                <li class="p-3">
                    <a href="../labreport/labList.php">Lab Reports</a>
                </li>
                <li class="p-3">
                    <a href="../oxygen/o2list.php">Oxygen</a>
                </li>

                <li class="p-3">
                    <a href="../faq/faqAdd.php">FAQ</a>
                </li>
                <li class="p-3">
                    <a href="../phistory/phlist.php">Patient History</a>
                </li>
                <li class="p-3">
                    <a href="../contactUs/addContact.php">Contact Us</a>
                </li>

                <li class="p-3">
                    <a href="../adminBlog/aBlogList.php">Blogs</a>
                </li>
                <li class="p-3">
                    <a href="../subscribeNews/aSubscribeNewList.php">Subscribe News</a>
                </li>
                <li class="p-3">
                    <a href="../feedback/aFeedbackList.php">FeedBack</a>
                </li>

            </ul>
        </div>
    </div>


</body>

<script>
        document.getElementById("adminLogout").addEventListener("click",function(){
            console.log("admin Logout");
            document.getElementById("dropBox").classList.toggle("show");
        })
    </script>

</html>