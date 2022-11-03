<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Donation</title>

  <?php
  session_start();
  include '../../Controller/bloodDonation/uFillBloodDonationConroller.php';

  if (!isset($_SESSION["userId"])) {
    header("Location: ../uRegisterLogin/register.php");
  } else {
    $userId = $_SESSION["userId"];
  }

  include "../../../patient/Controller/common/aChColorTxtController.php";
  include "../../../admin/Controller/adminProfile/aSelectMsgController.php";


  ?>

  <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />


  <!-- custom css files 2 -->
  <link rel="stylesheet" href="../common/css/style.css">
  <link rel="stylesheet" href="../common/uNavbar/css/uSecNavbar.css" />
  <link rel="stylesheet" href="./css/uBloodDonationForm.css">
</head>

<body>
  <div class="mx-5">
    <?php
    include("../common/uNavbar/uSecNavbar.php") ?>
    <div class="d-flex justify-content-center align-items-center flex-column">

      <h3 class="header my-3">Registration Form For Blood Donation</h3>

      <form action="../../Controller/bloodDonation/uAddBloodDonationController.php" method="post" class="form d-flex justify-content-center align-items-center flex-column pt-3">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row col-12 mb-4">
          <!-- <input type="text" value="2" /> -->
          <div class="col col-6 text-center">
            <div class="form-outline">
              <label class="form-label" for="form6Example1">Name</label>
              <input type="text" name="name" id="form6Example1" class="form-control text-center" value="<?= $userInfos[0]["user_name"] ?>" readyonly />

            </div>
          </div>
          <div class="col col-6 text-center">
            <div class="form-outline">
              <label class="form-label" for="form6Example2">Email</label>
              <input type="email" name="email" id="form6Example2" class="form-control text-center" value="<?= $userInfos[0]["user_email"] ?>" readyonly />
            </div>
          </div>
        </div>

        <div class="row col-12 mb-4">
          <div class="col col-4 text-center">
            <!-- Text input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form6Example3">Ph.NO</label>
              <input type="text" name="phNo" id="form6Example3" class="form-control text-center" value="<?= $userInfos[0]["ph_num"] ?>" readyonly />

            </div>
          </div>
          <div class="col col-4 text-center">
            <!-- Text input -->
            <div class="form-outline mb-4 text-center">
              <label class="form-label" for="form6Example3">Date of Birth</label>
              <input type="text" name="dob" id="form6Example3" class="form-control text-center" value="<?= $userInfos[0]["date_of_birth"] ?>" readyonly />
            </div>

          </div>

          <div class="col col-4 text-center">
            <!-- Text input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form6Example4">Gender</label>
              <input type="text" name="gender" id="form6Example3" class="form-control text-center" value="<?= $userInfos[0]["gender"] ?>" readyonly />
            </div>
          </div>
        </div>

        <div class="row col-12 mb-4">
          <div class="col col-6 d-flex justify-content-center align-items-center">
            <!-- BloodType Select -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form6Example5">Blood Type</label><br />


              <div class="form-check">
                <input class="form-check-input me-2" name="bloodType" type="checkbox" value="1" id="form6Example10" />
                <label class="form-check-label" for="form6Example10">A </label>
              </div>

              <div class="form-check">
                <input class="form-check-input me-2" name="bloodType" type="checkbox" value="2" id="form6Example11" />
                <label class="form-check-label" for="form6Example11">B </label>
              </div>

              <div class="form-check">
                <input class="form-check-input me-2" name="bloodType" type="checkbox" value="3" id="form6Example12" />
                <label class="form-check-label" for="form6Example12">O </label>
              </div>

              <div class="form-check">
                <input class="form-check-input me-2" name="bloodType" type="checkbox" value="4" id="form6Example13" />
                <label class="form-check-label" for="form6Example13">AB </label>

              </div>

              <div class="form-check">
                <input class="form-check-input me-2" name="bloodType" type="checkbox" value="5" id="form6Example14" />
                <label class="form-check-label" for="form6Example14">Untested </label>
              </div>
            </div>

          </div>

          <div class="col col-6 d-flex justify-content-center align-items-center">


            <!-- rhD test check -->
            <div class=" form-outline mb-4">
              <label class="form-label" for="form6Example6">RhD</label>


              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="rhD" value="1" id="flexCheck1" />
                <label class="form-check-label" for="flexCheck1">Positive</label>
              </div>


              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="rhD" value="2" id="flexCheck2" />
                <label class="form-check-label" for="flexCheck2">Negative</label>
              </div>


              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="rhD" value="3" id="flexCheck3" />
                <label class="form-check-label" for="flexCheck3">Untested</label>
              </div>

            </div>
          </div>
        </div>

        <!-- Submit button -->
        <button type="submit" name="applyFor" class="btn btn-purple btn-lg mb-4">Submit</button>
      </form>
    </div>
  </div>
</body>

</html>