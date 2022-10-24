<?php
session_start();
unset($_SESSION["username"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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

    <!-- custom css -->
    <link rel="stylesheet" href="../common/css/style.css" <?php time(); ?> />
    <link rel="stylesheet" href="./css/uRegister.css" />
</head>



<body>


    <div class="d-flex justify-content-center align-items-center mt-5">

        <!--body -->
        <div class="row col-7">


            <div class="regBg col pb-5">
                <div class="d-flex justify-content-center flex-row mt-5">

                    <img src="../storage/home/logo.png" class="logo" />

                    <h3 class="homeHeader text-center mt-5">Breath
                        <span>MORE</span>
                    </h3>

                </div>


            </div>

            <div class="regInfo col pb-5">
                <form action="../../Controller/uRegisterLogin/registerController.php" method="post">
                    <h3 class="header text-center my-5"> CREATE A NEW ACCOUNT</h3>

                    <div class="form-outline mb-4">
                        <input type="text" name="username" class="form-control" required>
                        <label class="form-label" for="form3Example3">Name</label>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="ph_no" class="form-control" required>
                                <label class="form-label" for="form3Example1">Ph.No</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="email" class="form-control" required>
                                <label class="form-label" for="form3Example2">Email</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="password" name="password" class="form-control"" required>
                                <label class=" form-label" for="form3Example1">Password</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="password" name="comfirmpassword" class="form-control" required>
                                <label class="form-label" for="form3Example2">Confirm Password</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" name="gender" class="form-control" required>
                        <label class="form-label" for="form3Example3">Gender</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" name="date_of_birth" class="form-control" required>
                        <label class="form-label" for="form3Example3">Date Of Birth</label>
                    </div>

                    <div class="d-flex justify-content-center mb-4">
                        <button type="sumit" class="btn btn-purple">Sign Up</button>
                    </div>

                    <div class="loginLink text-center">
                        <a href="./login.php" class="text-primary">Already has account?</a>
                    </div>

                </form>
            </div>


        </div>
    </div>


</body>

</html>