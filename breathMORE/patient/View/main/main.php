
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>


  <?php
session_start();
if ($_SESSION["isRegister"]) { ?>
    <!-- Shepherd -->
    <link rel="stylesheet" href="../libs/node_modules/shepherd.js/dist/css/shepherd.css" />
    <script src="../libs/node_modules/@popperjs/core/dist/umd/popper.min.js" defer></script>
    <script src="../libs/node_modules/shepherd.js/dist/js/shepherd.min.js" defer></script>
    <script src="./js/userguide.js" <?=time()?> defer></script>
  <?php 
  $_SESSION["isRegister"] = false;}
   ?>


  <!-- Splide JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js" defer></script>

  <!-- custom css3 -->
  <?php

if (!isset($_SESSION["userId"])) {
  header("Location: ../uRegisterLogin/register.php");
} else {
  $userId = $_SESSION["userId"];
}
include "../../Controller/blogs/mainBlogController.php";
include "../common/uNavbar/uNavbar.php";
include "../common/uFooter/uFooter.php";

include "../../../patient/Controller/common/aChColorTxtController.php";
include "../../../admin/Controller/adminProfile/aSelectMsgController.php";
include "../../Controller/uFeedBack/uSelectFeedbackController.php";


?>

  <link rel="stylesheet" href="../common/css/style.css" />
  <link rel="stylesheet" href="../common/uNavbar/css/uNavbar.css" <?php time(); ?> />
  <link rel="stylesheet" href="../common/uFooter/css/uFooter.css" <?php time(); ?>>
  <link rel="stylesheet" href="./css/home.css" />

  <!-- jq and js -->
  <script src="../common/jq/jquery-3.6.0.min.js" defer></script>

  <script src="../common/uNavbar/js/uNavbar.js" defer></script>
  <script src="./js/home.js" defer></script>
  <script src="./js/bmiBmr.js" defer></script>
</head>

<body>
  <!-- Daily Msg -->
  <marquee><?= $dailyMsg[0]["message"] ?></marquee>

  <!-- herosection -->
  <div class="container-fluid">

    <section id="herosection" class="mb-4 p-5">


      <div class="row flex-wrap ">
        <div class="col-lg-8 mybg">
          <div class="row flex-wrap ">

            <div class="col-lg-8 col-md-8 col-sm-8">
              <div class="headerInfo">
                <?php
                $webName = explode("/", $webName);
                $fName = $webName[0];
                $lName = $webName[1];
                ?>
                <h3 class="header homeHeader h3 fw-bold">
                  <?= $fName ?><span><?= $lName ?></span></h3>

                <p class="text-muted">
                  Our top health tips to help you live well in every way. <br />
                  Discover, small, simple changes which can make a big difference.
                </p>

                <div class="d-flex pb-4 m-4" aria-label="Basic example">
                  <a id="ufindDoctor" href="../appointment/uMakeAppointment.php">
                    <button type="button" class="ufindDoctor btn  btn-green rounded-0">
                      <img src="../storage/home/doct1.png" alt="" width="30" />
                      Find Doctors
                    </button>
                  </a>
                  <a id="upharmacy" href="../pharmacy/pharmacy.php">
                    <button type="button" class="upharmacy btn  btn-purple rounded-0 ms-1">
                      <img src="../storage/home/capsule.png" alt="" width="30">
                      Pharmacies
                    </button>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-lg-5 col-md-6 col-sm-5">

              <div id="uUserGuide" class="my-card-bg text-center p-2">
                <div class="uUserGuide">
                  <i class='bx bxs-user-account bx-lg' style='color:#f2f4f1'></i>
                </div>
                <a href="../userGuide/userguide.php" class="serviceLink myhover">User Guide</a>
              </div>

            </div>
            <div class="col-lg-5 col-md-6 col-sm-5">
              <div id="uEmergency" class="my-card-bg text-center btn-background-slide p-2">
                <div class="uEmergency">
                  <i class='bx bx-plus-medical bx-lg' style='color:#f2f4f1'></i>
                </div>
                <a href="../emergency/uEmergency.php" class="serviceLink myhover">Emergency</a>
              </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-5">
              <div id="uAppointment" class="my-card-bg text-center p-2">
                <div class="uAppointment">
                  <i class='bx bxs-bookmarks bx-lg' style='color:#f2f4f1'></i>
                </div>
                <a href="../appointment/uMakeAppointment.php" class="serviceLink myhover">Appointment</a>
              </div>
            </div>
            <div id="uBloodDonation" class="col-lg-5 col-md-6 col-sm-5">
              <div class="uBloodDonation my-card-bg text-center p-2">
                <div>
                  <i class='bx bxs-donate-blood bx-lg' style='color:#f2f4f1'></i>
                </div>
                <a href="../bloodDonation/bloodDonationForm.php" class="serviceLink myhover">Blood Donation</a>
              </div>

            </div>
          </div>
        </div>
        <div class="headerImg col col-lg-4 col-md-4">
          <div class="headerBox1"></div>
          <div class="headerBox2">Medical Service</div>
          <div class="headerBox3">that you can <span>TRUST</span></div>
          <img src="../storage/home/doctor1.jfif" alt="Doctor">
        </div>

      </div>
    </section>
  </div>
  <hr />

  <section id="myblogs" class="myBlogs">

    <div class="container-fluid p-5">
      <div class="m-5">
        <h3 class="h3 title fw-bold mb-5">Health Tips
          <span class="titleBar"></span>
        </h3>
        <div class="row row-cols-1 row-cols-md-4 g-4">

          <?php foreach ($blogsInMain as $blogInMain) { ?>

            <div class="col mb-4">
              <div class="card">
                <div class="blogimage bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="../storage/home/<?= $blogInMain["blog_img"] ?>" class="card-img-top" alt="..." />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> <?= $blogInMain["title"] ?></h5>
                  <a href="../../Controller/blogs/subBlogController.php?id=<?= $blogInMain["id"] ?>" class="btn btn-green">Read More</a>
                </div>
              </div>
            </div>
          <?php } ?>


        </div>
      </div>
    </div>
  </section>

  <!-- carousel -->

  <section class="d-flex justify-content-center align-items-center">
    <div class="splideCarousel splide pt-2 ">
      <div class="splide__track">
        <ul class="splide__list">

          <?php foreach ($feedbacks as $feedback) { ?>
            <li class="splide__slide d-flex justify-content-center align-items-center flex-column">
              <img class="sCarouselImg rounded-circle" src="../storage/home/profile.png" alt="lady-profile">

              <p class="sCarouselTxt rounded p-3 pt-5">
                <b>Rating: <?= $feedback["rating"] ?></b> <br />
                <?= $feedback["feedback"] ?>
              </p>
            </li>
          <?php } ?>


        </ul>
      </div>
    </div>
  </section>


  <section id="calculator">

    <div class="container-fluid p-5">

      <div class="calculators m-5">
        <div class="row">
          <div class="col ms-3">
            <div class="bmi">BMI CALCULATOR</div>
            <p class="aboutBmi mt-3">
              BMI is a reliable indicator of body fatness for most people. It is
              used to screen for weight categories that may lead to health
              problems. This calculator provides BMI and the corresponding weight
              category.
            </p>

            <div class="weight mb-3">
              <div class="weightLabel">Weight:</div>
              <input type="number" id="inputWeight" value="" />
            </div>
            <div class="height mb-3">
              <div class="row">
                <div class="col">
                  <div class="FeetLabel">Height (feet):</div>
                  <input type="number" id="inputFeet" value="" />
                </div>
                <div class="col">
                  <div class="InchesLabel">Height (inches):</div>
                  <input type="number" id="inputInches" value="" />
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-purple calculateBtn mb-3" id="calculateButton">
              Calculate
            </button>
            <div class="displayReport mb-3 ms-5">
              Your Body Mass Index is <span id="showResult"></span>
            </div>
            <img src="../storage/home/Screenshot (41) 1.png" class="img-fluid" alt="..." />
          </div>
          <div class="col">
            <div class="bmi">ADVANCE BMR CALCULATOR</div>
            <p class="aboutBmr mt-3">
              Your basal metabolic rate (BMR) is equivalent to the amount of
              energy (in the form of calories) that your body needs to function if
              it were to rest for 24 hours.
            </p>
            <div class="row mt-5">
              <div class="col">Weight (pounds):</div>
              <div class="col"><input type="number" id="inputWeightBmr" class="mb-3" value="" /></div>
            </div>
            <div class="row">
              <div class="col">Height (feet):</div>
              <div class="col"><input type="number" id="inputFeetBmr" class="mb-3" value="" /></div>
            </div>
            <div class="row">
              <div class="col">Height (inches):</div>
              <div class="col"><input type="number" id="inputInchesBmr" class="mb-3" value="" /></div>
            </div>
            <div class="row">
              <div class="col">Age :</div>
              <div class="col"><input type="number" id="inputAgeBmr" class="mb-3" value="" /></div>
            </div>
            <div class="row">
              <div class="col">Gender :</div>
              <div class="col"><select class="form-select" id="inputGenderBmr" aria-label="Default select example">
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                </select></div>
            </div>
            <div class="row">
              <div class="col">BMR (kcal/day):</div>
              <div class="col"><input type="number" id="calculationBmr" class="mb-3" value="" /></div>
            </div>
            <div class="row">
              <div class="col">PAL</div>
              <div class="col"><select class="form-select" id="inputPalBmr" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1.2">Sedentary (little or no exercise)</option>
                  <option value="1.375">Lightly active (light exercise/sports 1-3 days/week)</option>
                  <option value="1.55">Moderately active (moderate exercise/sports 3-5 days/week)</option>
                  <option value="1.725">Very active (hard exercise/sports 6-7 days a week)</option>
                  <option value="1.9">If you are extra active (very hard exercise/sports & a physical job)</option>
                </select></div>
            </div>
            <div class="row">
              <div class="col">Total energy expenditure is</div>
              <div class="col"><input type="number" id="calculationTee" class="mb-3" value="" /></div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>
  <button type="button" id="uSubscribe" class="newsLetterBox hover btn btn-secondary" data-mdb-container="body" data-mdb-toggle="popover" data-mdb-placement="left" data-mdb-content="Well Received!">
    <i class='uSubscribe bx bx-news newsLetter bx-lg'></i>
    <p class="newsAlert rounded p-3">If you click this button, We will send to your Email our latest blogs and event.</p>
  </button>

</body>

</html>