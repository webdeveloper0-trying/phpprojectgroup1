<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
    <link rel="stylesheet" href="./css/uLogin.css" <?php time(); ?> />

    <script src="../common/jq/jquery-3.6.0.min.js" defer></script>
    <script src="../common/js/script.js" defer></script>
</head>


<body>
    <div class="d-flex justify-content-center align-items-center mt-5">

        <!--body -->
        <div class="row">
            <div class="loginInfo col col-7 pb-5">
                <form action="../../Controller/uRegisterLogin/loginController.php" method="post">
                    <h3 class="h3 header text-center my-5">LOG IN</h3>

                    <div class="form-outline mb-4">
                        <input type="text" name="username" class="form-control text-light" required>
                        <label class="form-label text-light" for="name">Name</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" name="email" class="form-control text-light" required>
                        <label class="form-label text-light" for="email">Email</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" name="password" class="form-control text-light" required>
                        <label class="form-label text-light" for="pwd">Password</label>
                    </div>

                    <div class="d-flex justify-content-center mb-4">
                        <button type="sumit" class="btn btn-purple">Log In</button>
                    </div>


                    <div class="regLink text-center">
                        <a href="./register.php" class="ms-6">Don't Have Account?
                            <span><u>Register</u></span>
                        </a>
                        <br />

                        <a href="./forgetpassword.php" class="ms-6">
                            <u>Forgot Password?</u>

                        </a>
                    </div>

                </form>
            </div>
            <div class="loginBg col col-5 pb-5 px-5">
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
        </div>
    </div>
</body>

</html>