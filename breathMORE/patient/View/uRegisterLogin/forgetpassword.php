<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Pwd</title>

    <?php
    session_start();
    include "../../../patient/Controller/common/aChColorTxtController.php";
    ?>
    <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <!-- custom css3 -->
    <link rel="stylesheet" href="../common/css/style.css" />
</head>

<body class="d-flex justify-content-center">
    <div class="mx-5 mt-5 col col-xl-5 col-lg-5 col-md-5 col-sm-10 pt-5">

        <form class="bg-green p-3 rounded" action="../../Controller/uRegisterLogin/forgetpasswordController.php" method="POST">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="mail" class="form-control text-light" name="email" id="forgotPwdEmail" aria-describedby="emailHelp" required>
                <label class="form-label text-light" for="form1Example1">Email address</label>
            </div>


            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">


                <div class="col">
                    <button type="submit" class="btn btn-purple" name="forgetpassword">Reset password</button>
                    <a href="./login.php" class="text-light"><u>Login?</u></a>
                </div>
            </div>


        </form>

    </div>
</body>

</html>