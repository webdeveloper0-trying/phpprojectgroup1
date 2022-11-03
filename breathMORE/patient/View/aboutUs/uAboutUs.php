<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>


  <!-- custom css -->
  <link rel="stylesheet" href="../common/css/style.css" <?php time(); ?> />
  <link rel="stylesheet" href="../common/uNavbar/css/uNavbar.css" />
  <link rel="stylesheet" href="../common/uFooter/css/uFooter.css" <?php time(); ?>>
  <link rel="stylesheet" href="./css/uAboutUs.css" <?php time(); ?>>

  <script src="../common/jq/jquery-3.6.0.min.js" defer></script>
  <script src="../common/uNavbar/js/uNavbar.js" <?php time(); ?> defer></script>


  <?php
  session_start();
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
  include "../../Controller/appointment/uCountAppointmentController.php";

  ?>

</head>

<body>
  <section class="aboutUsHeading mt-5 mx-5">
    <?php
    $webName;
    $webName = explode("/", $webName);
    $fName = $webName[0];
    $lName = $webName[1];
    ?>
    <h3 class="title homeHeader">
      <?= $fName ?><span><?= $lName ?></span>
      <span class="titleBar"></span>
    </h3>

    </h3>
    <div class="">
      <div class="row">

        <div class="aboutMenu col col-3 mt-5">
          <ul class="list-group text-center rounded-0">
            <li class="list-item">
              <a href="../appointment/uMakeAppointment.php">Appointment</a>
            </li>
            <li class="list-item">
              <a href="../bloodDonation/bloodDonationForm.php">Blood Donation</a>
            </li>
            <li class="list-item">
              <a href="../emergency/uEmergency.php">Emergency</a>
            </li>
            <li class="list-item">
              <a href="../pharmacy/pharmacy.php">Pharmacies</a>
            </li>
            <li class="list-item">
              <a href="../userGuide/userguide.php">User Guide</a>
            </li>
          </ul>
        </div>

        <div class="overView col col-5 mt-5 mx-5">
          <h5 class="overviewTitle mb-3">OVERVIEW</h5>
          <p class="overviewText">
            <?= $fName ?><span><?= $lName ?></span> is designed to support pharmacists, physicians, physician assistants, nurses and
            advance practice nurses, dentists, and students in all care settings—whether at inpatient
            or outpatient facilities, during post-care treatment, at retail pharmacies, or through
            pharmaceutical manufacturers. Our focus on speed and safety at the point of care for
            these various settings means that you and your teams can quickly get the drug information
            and drug interactions answers you need, when you and your patients need them.
          </p>
        </div>
        <div class="overviewImage col col-3 mt-5">
          <img src="../storage/aboutUs/aboutUsImg.png" class="img-fluid overviewImg" alt="..." />
        </div>
      </div>
    </div>
  </section>


  <section class="features d-flex justify-content-center align-items-center flex-column mt-5 mx-5">
    <div class="featuresInfo d-flex justify-content-center align-items-center flex-column">
      <h4 class="featureTitle text-center">
        Features of Online Registration System
      </h4>

      <div class="bar">
        <div class="ball"></div>
      </div>

      <p class="mt-5">
        <?= $fName ?><span><?= $lName ?></span> is designed to support pharmacists, physicians, physician assistants, nurses and
        advance practice nurses, dentists, and students in all care settings—whether at inpatient
        or outpatient facilities, during post-care treatment, at retail pharmacies, or through
        pharmaceutical manufacturers. Our focus on speed and safety at the point of care for
        these various settings means that you and your teams can quickly get the drug information
        and drug interactions answers you need, when you and your patients need them.
      </p>
    </div>


    <div class="row featureCards">
      <div class="col card text-center m-5 p-0">
        <div class="bg-green card-header">Online Appointment</div>
        <div class="card-body">
          <p class="card-text">
            Find a Doctor who is your favorite and make an appointment comfortably using our Website.
            You can save time using our appointment service, without calling any call centers and get the specific time that you want to meet your doctor.

          </p>

        </div>

      </div>

      <div class="col card text-center m-5 p-0">
        <div class="bg-green card-header">Blood Donation</div>
        <div class="card-body">
          <p class="card-text">
            Every donation is critical. You can make a lifesaving difference.
            Patients with trauma, undergoing surgery, or with conditions that require
            blood transfusions, such as sickle cell disease, need blood and blood products. You can help.
            Donate Blood. Save a life.


          </p>

        </div>

      </div>

      <div class="col card text-center m-5 p-0">
        <div class="bg-green card-header">Emergency</div>
        <div class="card-body">
          <p class="card-text">
            The emergency Department at Breath More Hospital is
            staffed 24 hours a day by Board Certified Emergency
            Medicine Physicians and registered nurses who are
            certified in advanced cardiac life support (ACLS)
            and in Trauma Care. Moreover, We provide Oxygen
            available places on our website.

          </p>

        </div>
      </div>
    </div>
  </section>

  <section class="hightLights d-flex justify-content-center align-items-center">

    <div class="row justify-content-center align-items-center flex-row">
      <div class="col bg-purple rounded me-5 px-5 py-3">
        <h5>Online Appointments Token Today</h5>
        <div class="d-flex justify-content-center align-items-center flex-row">
          <img src="../storage/aboutUs/calendar_.png" alt="">
          <p class="hightLightCount ms-5 text-light"><?= $todayACount[0]['COUNT(id)'] ?></p>
        </div>
      </div>

      <div class="col bg-purple rounded ms-5 px-5 py-3">
        <h5>Online Appointments Token Until Today</h5>
        <div class="d-flex justify-content-center align-items-center flex-row">
          <img src="../storage/aboutUs/calendar_.png" alt="">
          <p class="hightLightCount ms-5 text-light"><?= $totalACount[0]['COUNT(id)'] ?></p>
        </div>
      </div>
    </div>
  </section>
</body>

</html>