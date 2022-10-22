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
</head>
<link rel="stylesheet" href="style.css">

<body class=" h-auto">
    <div class="container-fluid">

        <!--body -->
        <div class="row">
            <div class="col-md-6 left">
                <form action="../Controller/loginController.php" method="post">
                    <h6 class="display-4 ms-3 fw-bold  escape"> CREATE A NEW ACCOUNT</h6>
                    <input type="text" name="username" class="form-control  mt-5" placeholder="name" required>
                    <input type="text" name="email" class="form-control mt-5" placeholder="email" required>
                    <input type="password" name="password" class="form-control mt-5" placeholder="password" required>
                    <input type="password" name="comfirmpassword" class="form-control  mt-5" placeholder="comfirmpassword" required>
                    <input type="text" name="Age" class="form-control mt-5" placeholder="Age" required>
                    <input type="text" name="Gender" class="form-control mt-5 " placeholder="gender" required>
                    <input type="text" name="date of birth" class="form-control mt-5 " placeholder="date of birth" required>
                    <button type="sumit" class="btn btn-secondary mt-5">Login</button>
                    <br>
                    <br>
                    <a href="./register.php" class="ms-6">Sign Up?
                    </a>
                </form>
            </div>
            <div class="col-md-6">
                <img src="./Group 178.jpg" class="img-fluid" alt="...">
            </div>
        </div>
    </div>
</body>

</html>