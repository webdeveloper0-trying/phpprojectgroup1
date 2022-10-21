<?php
session_start();
unset($_SESSION["adminname"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Log In</title>

   <!-- Font Awesome -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?=time()" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css?=time()" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap?=time()" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css?=time()" rel="stylesheet" />

  <!-- custom css1 -->
  <link rel="stylesheet" href="../common/css/style.css">
  <link rel="stylesheet" href="./css/aLogin.css" <?php time();?> />

</head>

<body class="d-flex justify-content-center align-items-center">
  <div class="row">
  <div class="logo">Breath<span>More</span></div>
  <!-- <section class="vh-100">
    <form action="../../Controller/adminLogin/aLoginController.php" method="post" class="container py-5 h-100 ">
      <div class="row  d-flex justify-content-center align-items-center h-100  ">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
          <div class="card shadow-2-strong " style="border-radius: 1rem;">
            <div class="card-body p-5 text-center mycard_body">
              <form action="../Controller/loginController.php" method="post">
                <h3 class="mb-5">Log in</h3>

                <div class="form-outline mb-4">


                  <input type="text" id="typeEmailX-2" name="adminname" class="form-control form-control-lg" placeholder="AdminName " required />

                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="typePasswordX-2" name="password" class="form-control form-control-lg" placeholder="Password " required />

                </div>
                <button class="btn btn-lg btn-block submit-button" type="submit">Login</button>
                <hr class=" myhr">
              </form>


            </div>
          </div>
        </div>
      </div>
    </form>
  </section> -->

  <div class="col-12 col-sm-12 d-flex justify-content-center align-items-center">

    <form class="loginForm my-5 p-5 rounded-5" action="../../Controller/adminLogin/aLoginController.php" method="post">
      <!-- Name input -->
      <div class="form-outline mb-4">
      <label class="form-label" for="adminName">Admin Name</label>
        <input type="name" name="adminname" id="adminName" class="form-control" />
        
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
      <label class="form-label" for="adminPassword">Password</label>
        <input type="password" name="password" id="adminPassword" class="form-control" />
        
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-purple btn-block mb-4">Sign in</button>
    
    </form>
  </div>
  </div>
</body>

</html>