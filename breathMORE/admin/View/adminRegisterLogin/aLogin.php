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

  <!-- custom css1 -->
  <link rel="stylesheet" href="../common/css/style.css">

  <!-- bootstrap css1 js1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</head>

<body>
  <section class="vh-100" >
    <form action="../../Controller/adminLogin/aLoginController.php" method="post" class="container py-5 h-100 ">
      <div class="row  d-flex justify-content-center align-items-center h-100  ">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
          <div class="card shadow-2-strong " style="border-radius: 1rem;">
            <div class="card-body p-5 text-center mycard_body">
              <form action="../Controller/loginController.php" method="post">
                <h3 class="mb-5">Log in</h3>

                <div class="form-outline mb-4">
                 

                  <input  type="text" id="typeEmailX-2" name="adminname" class="form-control form-control-lg" placeholder="AdminName " required />

                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="typePasswordX-2" name="password" class="form-control form-control-lg" placeholder="Password "required />

                </div>
                <button class="btn btn-lg btn-block submit-button" type="submit">Login</button>
                <hr class=" myhr">
              </form>


            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
</body>

</html>