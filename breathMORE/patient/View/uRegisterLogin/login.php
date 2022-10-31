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
    <link rel="stylesheet" href="./css/uLogin.css" <?php time(); ?> />
</head>


<body>
    <div class="d-flex justify-content-center align-items-center mt-5">

        <!--body -->
        <div class="row col-7">
            <div class="loginInfo col col-8 pb-5">
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
                            <span>Register</span>
                        </a>
                        <br />

                        <a href="./forgetpassword.php" class="ms-6">Forgot Password?
                           
                        </a>
                    </div>

                </form>
            </div>
            <div class="loginBg col col-4 pb-5">
                <div class="d-flex justify-content-center flex-row mt-5">

                    <img src="../storage/home/logo.png" class="logo" />

                    <h3 class="homeHeader text-center mt-5">Breath
                        <span>MORE</span>
                    </h3>

                </div>


            </div>
        </div>
    </div>
</body>

</html>