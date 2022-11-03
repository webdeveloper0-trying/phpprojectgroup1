<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <?php
    session_start();
    unset($_SESSION["userId"]);

    include "../../../patient/Controller/common/aChColorTxtController.php";
    include "../../../admin/Controller/adminProfile/aSelectMsgController.php";
    ?>

    <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
    <!-- custom css -->
    <link rel="stylesheet" href="../common/css/style.css" <?php time(); ?> />
    <link rel="stylesheet" href="./css/uRegister.css" />

    <script src="../common/jq/jquery-3.6.0.min.js" defer></script>
    <script src="../common/js/script.js" defer></script>
</head>



<body>


    <div class="formContainer d-flex justify-content-center align-items-center mt-5">

        <!--body -->
        <div class="row">


            <div class="regBg col col-4 mx-auto pb-5">
                <div class="d-flex justify-content-center align-items-center flex-column mt-5">

                    <img src="../storage/home/<?= $logoPic ?>" alt="Logo" class="logoImg" width="85">

                    <?php
                    $webName;
                    $webName = explode("/", $webName);

                    $fName = $webName[0];
                    $lName = $webName[1];
                    ?>
                    <h3 class="header homeHeader h3 fw-bold">
                        <?= $fName ?><span><?= $lName ?></span></h3>
                </div>


            </div>

            <div class="regInfo col col-8 mx-auto pb-5">
                <form action="../../Controller/uRegisterLogin/registerController.php" method="post">
                    <h3 class="header text-center my-5"> CREATE A NEW ACCOUNT</h3>

                    <div class="form-outline mb-4">
                        <input type="text" name="username" class="form-control" required>
                        <label class="form-label" for="name">Name</label>
                    </div>

                    <div class="formRow row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="ph_no" class="form-control" required>
                                <label class="form-label" for="phNo">Ph.No</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="email" class="form-control" required>
                                <label class="form-label" for="email">Email</label>
                            </div>
                        </div>
                    </div>

                    <div class="formRow row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="password" name="password" class="form-control"" required>
                                <label class=" form-label" for="pwd">Password</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="password" name="comfirmpassword" class="form-control" required>
                                <label class="form-label" for="cPwd">Confirm Password</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-outline mb-4">

                        <label class="form-label" for="gender">Gender</label>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="1" />
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="2" />
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="3" />
                            <label class="form-check-label" for="inlineRadio3">Other</label>
                        </div>
                    </div>



                    <div class="form-outline mb-4">
                        <label class="form-label" for="dob">Date Of Birth</label>
                        <input type="date" name="date_of_birth" class="form-control" required>

                    </div>

                    <div class="d-flex justify-content-center mb-4">
                        <button type="sumit" class="btn btn-purple">Sign Up</button>
                    </div>

                    <div class="loginLink text-center">
                        <a href="./login.php" class="text-primary">Already has account?
                            <span>LogIn</span>
                        </a>
                    </div>

                </form>
            </div>


        </div>
    </div>


</body>

</html>