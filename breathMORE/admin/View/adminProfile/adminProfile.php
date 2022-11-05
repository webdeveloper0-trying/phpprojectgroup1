<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>

    <?php
    session_start();
    if (isset($_POST['adminname']) && isset($_POST['password'])) {
        $adminname = $_POST['adminname'];
        $password = $_POST['password'];
        $_SESSION["adminname"] = $adminname;
    }



    include "../../Controller/common/aChColorTxtController.php";
    include "../../Controller/adminProfile/aProfileSelectPropsController.php";



    ?>
    <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />


    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?=time()" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css?=time()" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap?=time()" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css?=time()" rel="stylesheet" />
    <!-- MDB JS1-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../common/css/style.css" <?php time() ?>>
    <link rel="stylesheet" href="./css/adminProfile.css" <?php time() ?>>

    <!-- picker css1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css" <?php time() ?> /> <!-- 'classic' theme -->


</head>

<body>
    <div class="d-flex align-items-center flex-row">
        <div class="adminProfile col-2 me-5">
            <div class="profileHeader">
                <?php
                $webName = explode("/", $webName);
                $fName = $webName[0];
                $lName = $webName[1];
                
                if ($_SESSION["ismainadmin"]) {
                $adminTxt = "Main Admin"; ?>

                <a href="../adminDashboard/aDashboard.php">
                    <h3 class="homeHeader fw-bold text-center mt-5 ms-1">
                        <?= $fName ?><span><?= $lName ?></span></h3>
                </a>
                <?php } else {
                $adminTxt = "Sub Admin"; ?>

                <a href="../adminDashboard/aSubAdminDashboard.php">
                    <h3 class="homeHeader fw-bold text-center mt-5 ms-1">
                        <?= $fName ?><span><?= $lName ?></span></h3>
                </a>
                <?php }
                ?>
                
            </div>
            <div class="profileCard card rounded-0 py-3">
                <i class='bx bx-lg bxs-user-circle text-center' style='color:#4b694d'></i>
                <p class="card-text text-center mt-2">
                    <?= $adminTxt; ?>
                </p>
            </div>



        </div>

        <div class="col-2 me-5">
        </div>

        <div class="adminSetting col-9 ms-5">
            <div class="profileHeader"></div>
            <nav class="bg-green adminMenuLinks navbar navbar-expand-lg rounded">
                <div class="container-fluid">
                    <?php if (!$_SESSION["ismainadmin"]) { ?>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">

                                <li class="breadcrumb-item">
                                    <a href="../aTotalRegisterList/aTotalRegister.php">Total Registered List</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../adminAppointment/aAppointmentList.php">Total Appointment</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../doctor/list.php">Doctors List</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../adminBloodDonation/abloodDonationList.php">Blood Donation</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../bloodStock/listBs.php">Blood Stocks</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../diseAndmedi/addmedi.php">Medicine</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../labreport/labList.php">Lab Reports</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../pharmacy/listPharmacy.php">Pharmacies</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../phistory/phlist.php">Patient History</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../oxygen/o2list.php">Oxygen</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../faq/faqAdd.php">FAQS</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../feedback/aFeedbackList.php">Feedbacks</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../subscribeNews/aSubscribeNewList.php">Subscription Lists</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../adminBlog/aBlogList.php">Blogs</a>
                                </li>
                            </ol>
                        </nav>
                    <?php } else { ?>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../adminManagement/aManagement.php">
                                        Admin Management
                                    </a>
                                </li>

                                <li class="breadcrumb-item">
                                    <a href="../aTotalRegisterList/aTotalRegister.php">Total Registered List</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../adminAppointment/aAppointmentList.php">Total Appointment</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../doctor/list.php">Doctors List</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../adminBloodDonation/abloodDonationList.php">Blood Donation</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../bloodStock/listBs.php">Blood Stocks</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../diseAndmedi/addmedi.php">Medicine</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../labreport/labList.php">Lab Reports</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../pharmacy/listPharmacy.php">Pharmacies</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../phistory/phlist.php">Patient History</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../oxygen/o2list.php">Oxygen</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../faq/faqAdd.php">FAQS</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../feedback/aFeedbackList.php">Feedbacks</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../subscribeNews/aSubscribeNewList.php">Subscription Lists</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="../adminBlog/aBlogList.php">Blogs</a>
                                </li>
                            </ol>
                        </nav>
                    <?php } ?>

                </div>
            </nav>

            <div class="mt-5">
                <table class="colorChange table">

                    <tr>
                        <th colspan="2" class="bg-purple text-center">Font and Name Change</th>
                        <th colspan="3" class="bg-purple text-center">Color Change</th>
                    </tr>

                    <tr>
                        <th>Logo Profile: </th>
                        <td>
                            <div class="form-outline">
                                <input type="text" name="logoImg" id="logoImg" class="form-control" placeholder="imgname.extension" />
                                <input type="hidden" name="logoImg1" id="logoImg1" value="<?= $defaultProps[0]["logoPic"] ?>" />
                            </div>
                        </td>
                        <th>Background Color1: </th>
                        <td id="chBgColor1">

                        </td>
                        <td>
                            <input type="hidden" name="bgColor1" id="bgColor1" value="<?= $defaultProps[0]["backgroundColorOne"] ?>" />
                            <div class="color-picker1">

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Website Name: </th>
                        <td>
                            <div class="form-outline">
                                <input type="text" name="webName" id="webName" class="form-control" placeholder="firstName/secondName" />
                                <input type="hidden" name="webName1" id="webName1" value="<?= $defaultProps[0]["websiteName"] ?>" />
                            </div>
                        </td>
                        <th>Background Color2: </th>
                        <td id="chBgColor2"></td>
                        <td>
                            <input type="hidden" name="bgColor2" id="bgColor2" value="<?= $defaultProps[0]["backgroundColorTwo"] ?>" />
                            <div class="color-picker2"></div>
                        </td>
                    </tr>


                    <tr>
                        <th>Logo Color:
                            <input type="hidden" name="logoColor" name="logoColor" value="<?= $defaultProps[0]["logoColor"] ?>" />
                            <div class="color-picker6"></div>
                        </th>

                        <td id="chLogoColor">

                        </td>
                        <th>Background Color3: </th>
                        <td id="chBgColor3"></td>
                        <td>
                            <input type="hidden" name="bgColor3" id="bgColor3" value="<?= $defaultProps[0]["backgroundColorThree"] ?>" />
                            <div class="color-picker3"></div>
                        </td>

                    </tr>
                    <tr>
                        <th>Font-family1: </th>
                        <td>
                            <div class="form-outline">
                                <input type="text" name="fontOne" id="fontOne" class="form-control" />
                                <input type="hidden" name="fontOne1" id="fontOne1" value="<?= $defaultProps[0]["fontFamilyOne"] ?>" />
                            </div>
                        </td>
                        <th>Text Color1: </th>
                        <td id="chTxtColor1"></td>
                        <td>
                            <input type="hidden" name="txtColor1" id="txtColor1" value="<?= $defaultProps[0]["txtColorOne"] ?>" />
                            <div class="color-picker4"></div>
                        </td>

                    </tr>
                    <tr>
                        <th>Font-family2: </th>
                        <td>
                            <div class="form-outline">
                                <input type="text" name="fontTwo" id="fontTwo" class="form-control" />
                                <input type="hidden" name="fontTwo1" id="fontTwo1" value="<?= $defaultProps[0]["fontFamilyTwo"] ?>" />
                            </div>
                        </td>
                        <th>Text Color2: </th>
                        <td id="chTxtColor2"></td>
                        <td>
                            <input type="hidden" name="txtColor2" id="txtColor2" value="<?= $defaultProps[0]["txtColorTwo"] ?>" />
                            <div class="color-picker5"></div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" name="change" id="tChange" class="tChange btn btn-purple mt-3">Change</button>
                        </td>
                    </tr>

                </table>
            </div>

            <div class="alertCard form-outline card text-center rounded-0 mt-5 py-3">

                <form action="../../Controller/adminProfile/adminAlertController.php" method="post">
                    <h4 class="h4 header">Today's Alert</h4>

                    <!-- Message input -->
                    <div class="container form-outline d-flex justify-content-center mb-4">
                        <textarea class="form-control bg-light mx-2" name="dailyMsg" id="dailyMsg" rows="4"></textarea>
                        <label class="form-label mx-2" for="dailyMsg">Daily Message</label>
                    </div>

                    <button type="submit" class="btn btn-purple mt-3">Submit</button>
                    <form>
            </div>




            <script src="../common/jq/jquery-3.6.0.min.js"></script>
            <!-- picker js1 -->
            <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>

            <!-- custom js1 -->
            <script src="./js/aChangeColors.js" <?php time() ?>></script>


</body>

</html>