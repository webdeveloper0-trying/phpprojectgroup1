<?php
include "../common/uNavbar/uNavbar.php";

include "../../../patient/Controller/common/aChColorTxtController.php";





?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js" defer></script>

  <!-- custom css3 -->
  <link rel="stylesheet" href="../common/css/style.css" <?php time(); ?> />
  <link rel="stylesheet" href="../common/uNavbar/css/uNavbar.css" <?php time(); ?> />
  <link rel="stylesheet" href="./css/home.css" <?php time(); ?> />


  <script src="../common/jq/jquery-3.6.0.min.js" defer></script>
  <script src="./js/home.js" <?php time(); ?> defer></script>
  <!-- <script src="./js/uSubscribeNew.js" defer></script> -->



</head>

<body>
  <!-- herosection -->
  <section id="herosection" class="mb-5">
    <div class="container-fluid d-flex mx-xs-0 mx-sm-0 mx-md-5 mx-lg-5">
      <div class="headerInfo col col-lg-7 text-lg-start">
        <?php
        $webName = explode("/", $webName);
        $fName = $webName[0];
        $lName = $webName[1];
        ?>
        <h3 class="header homeHeader h3 fw-bold">
          <?= $fName ?><span><?= $lName ?></span></h3>

        <p class="text-muted my-5">
          Our top health tips to help you live well in every way. <br />
          Discover, small, simple changes which can make a big difference.
        </p>

        <div class="d-flex pb-4 mb-5" aria-label="Basic example">
          <a href="">
            <button type="button" class="btn btn-green rounded-0">
              <img src="../storage/home/doct1.png" alt="" width="30" />
              Find Doctors
            </button>
          </a>
          <a href="">
            <button type="button" class="btn btn-purple rounded-0">
              <img src="../storage/home/capsule.png" alt="" width="30">
              Pharmacies
            </button>
          </a>
        </div>

        <div class="services row col-12 justify-content-center align-items-center flex-row  mt-lg-5 mt-md-5 mt-5 py-5 px-3">
          <div class="serviceCard col card text-center me-4">
            <div class="card-body">
              <h5 class="card-title">
                <i class='bx bxs-user-account bx-lg' style='color:#4B694D'></i>
              </h5>
              <p class="card-text"></p>
              <a href="#" class="serviceLink">User Guide</a>
            </div>
          </div>

          <div class="serviceCard col card text-center me-4">
            <div class="card-body">
              <h5 class="card-title">
                <i class='bx bx-plus-medical bx-lg' style='color:#4B694D'></i>
              </h5>
              <p class="card-text"></p>
              <a href="#" class="serviceLink">Emergency</a>
            </div>
          </div>

          <div class="serviceCard col card text-center me-4">
            <div class="card-body">
              <h5 class="card-title">
                <i class='bx bx-donate-blood bx-lg' style='color:#4B694D'></i>
              </h5>
              <p class="card-text"></p>
              <a href="#" class="serviceLink">Appointment</a>
            </div>
          </div>

          <div class="serviceCard col card text-center">
            <div class="card-body">
              <h5 class="card-title">
                <i class='bx bxs-donate-blood bx-lg' style='color:#4b694d'></i>
              </h5>
              <p class="card-text"></p>
              <a href="#" class="serviceLink">Blood Donation</a>
            </div>
          </div>
        </div>
      </div>

      <div class="headerImg col col-lg-4">
        <div class="headerBox1"></div>
        <div class="headerBox2">Medical Service</div>
        <div class="headerBox3">that you can <span>TRUST</span></div>
        <img src="../storage/home/doctor1.jfif" alt="Doctor">
      </div>
    </div>

  </section>

  <hr />

  <section id="myblogs" class="myBlogs mt-5">
    <div class=" container-fluid">
      <div class="m-5">
        <h3 class="h3 title fw-bold mb-5">Health Tips
          <span class="titleBar"></span>
        </h3>
        <div class="row row-cols-1 row-cols-md-4 g-4">
          <div class="col mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../storage/home/weightLoss.jpg" class="card-img-top" alt="..." />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Noom Reviews: Long-term weight loss through behavioral change?</h5>
                <a href="#!" class="btn btn-green">Read More</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../storage/home/benefitsOfCoffee.jpg" class="card-img-top" alt="..." />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Top 10 Health Benefits of Coffee</h5>
                <a href="#!" class="btn btn-green">Read More</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../storage/home/diabete.jpg" class="card-img-top" alt="..." />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Diabetes Statistics in the United States</h5>
                <a href="#!" class="btn btn-green">Read More</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../storage/home/orgain.jpg" class="card-img-top" alt="..." />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Orgain Reviews: A good value in supplements and meal replacements?</h5>

                <a href="#!" class="btn btn-green">Read More</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../storage/home/goodLens.jpg" class="card-img-top" alt="..." />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Lensabl Review: Good lens replacement and eyewear options? T</h5>

                <a href="#!" class="btn btn-green">Read More</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../storage/home/zincSupplement.jpg" class="card-img-top" alt="..." />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Best Zinc Supplement</h5>

                <a href="#!" class="btn btn-green">Read More</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../storage/home/hairLoss.jfif" class="card-img-top" alt="..." />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Keeps Review: Do Keeps’ Hair Loss Treatments Work?</h5>

                <a href="#!" class="btn btn-green">Read More</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../storage/home/candid.jpg" class="card-img-top" alt="..." />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Candid Review: Is Candid teeth straightening legit?</h5>

                <a href="#!" class="btn btn-green">Read More</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- carousel -->

  <section class="d-flex justify-content-center align-items-center">
  <div class="splideCarousel splide pt-3">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide d-flex justify-content-center align-items-center flex-column">
        <img class="sCarouselImg rounded-circle" src="../storage/home/lady-img.jpg" alt="lady-profile">
          <p class="sCarouselTxt rounded p-3 pt-5">
          I have had prolonged treatment here for a serious situation. the hospital, the consultants, staff, everyone
            has been highly professional and expertly trained. Staff are helpful, caring, professional and friendly.
            Thank you for everything. I highly recommend this global standard hospital in the heart of Yangon.
          </p>
        </li>
        <li class="splide__slide d-flex justify-content-center align-items-center flex-column">
        <img class="sCarouselImg rounded-circle" src="../storage/home/lady-img.jpg" alt="lady-profile">
          <p class="sCarouselTxt rounded p-3 pt-5">
          I have had prolonged treatment here for a serious situation. the hospital, the consultants, staff, everyone
            has been highly professional and expertly trained. Staff are helpful, caring, professional and friendly.
            Thank you for everything. I highly recommend this global standard hospital in the heart of Yangon.
          </p>
        </li>
        <li class="splide__slide d-flex justify-content-center align-items-center flex-column">
        <img class="sCarouselImg rounded-circle" src="../storage/home/lady-img.jpg" alt="lady-profile">
          <p class="sCarouselTxt rounded p-3 pt-5">
          I have had prolonged treatment here for a serious situation. the hospital, the consultants, staff, everyone
            has been highly professional and expertly trained. Staff are helpful, caring, professional and friendly.
            Thank you for everything. I highly recommend this global standard hospital in the heart of Yangon.
          </p>
        </li>
        <li class="splide__slide d-flex justify-content-center align-items-center flex-column">
        <img class="sCarouselImg rounded-circle" src="../storage/home/lady-img.jpg" alt="lady-profile">
          <p class="sCarouselTxt rounded p-3 pt-5">
          I have had prolonged treatment here for a serious situation. the hospital, the consultants, staff, everyone
            has been highly professional and expertly trained. Staff are helpful, caring, professional and friendly.
            Thank you for everything. I highly recommend this global standard hospital in the heart of Yangon.
          </p>
        </li>
        <li class="splide__slide d-flex justify-content-center align-items-center flex-column">
        <img class="sCarouselImg rounded-circle" src="../storage/home/lady-img.jpg" alt="lady-profile">
          <p class="sCarouselTxt rounded p-3 pt-5">
          I have had prolonged treatment here for a serious situation. the hospital, the consultants, staff, everyone
            has been highly professional and expertly trained. Staff are helpful, caring, professional and friendly.
            Thank you for everything. I highly recommend this global standard hospital in the heart of Yangon.
          </p>
        </li>
      </ul>
    </div>
  </div>
  </section>


  <section id="calculator">

    <div class=" container-fluid">

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
              <input type="number" id="inputWeight" />
            </div>
            <div class="height mb-3">
              <div class="row">
                <div class="col">
                  <div class="FeetLabel">Height (feet):</div>
                  <input type="number" id="inputFeet" />
                </div>
                <div class="col">
                  <div class="InchesLabel">Height (inches):</div>
                  <input type="number" id="inputInches" />
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary calculateBtn mb-3">
              Calculate
            </button>
            <div class="displayReport mb-3 ms-5">
              Your Body Mass Index is <span id="bmrResult"> 20.6</span>
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
              <div class="col"><input type="number" id="" class="mb-3" /></div>
            </div>
            <div class="row">
              <div class="col">Height (feet):</div>
              <div class="col"><input type="number" id="" class="mb-3" /></div>
            </div>
            <div class="row">
              <div class="col">Height (inches):</div>
              <div class="col"><input type="number" id="" class="mb-3" /></div>
            </div>
            <div class="row">
              <div class="col">Age :</div>
              <div class="col"><input type="number" id="" class="mb-3" /></div>
            </div>
            <div class="row">
              <div class="col">Sex :</div>
              <div class="col"><input type="number" id="" class="mb-3" /></div>
            </div>
            <div class="row">
              <div class="col">BMR (kcal/day):</div>
              <div class="col"><input type="number" id="" class="mb-3" /></div>
            </div>
            <div class="row">
              <div class="col">PAL</div>
              <div class="col"><input type="number" id="" class="mb-3" /></div>
            </div>
            <div class="row">
              <div class="col">Total energy expenditure is</div>
              <div class="col"><input type="number" id="" class="mb-3" /></div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>



  <footer id="footer" class="footer">
    <div class="container-fluid mx-5 py-5">
      <!-- 
      <div class="footer container"> -->
      <div class="row">
        <div class="col">
          <div class="mb-3">
            <a href="https://www.w3schools.com">Address</a>
          </div>
          <div class="footerAddress">No.77,Yangon,</div>
          <div class="footerAddress">Myanmar</div>
          <br />
          <div class="footerAddress">01-567 344</div>
          <div class="footerAddress">(09)-444 777 333</div>
        </div>
        <div class="col">
          <div class="mb-3">
            <a href="https://www.w3schools.com">Privacy Policy</a>
          </div>
          <div><a href="https://www.w3schools.com">FAQs</a></div>
        </div>
        <div class="col">
          <div class="mb-3">
            <a href="https://www.w3schools.com">Navigation</a>
          </div>
          <div class="footerHome">
            <a href="https://www.w3schools.com">Home</a>
          </div>
          <div><a href="https://www.w3schools.com">Centers</a></div>
          <div><a href="https://www.w3schools.com">Blogs</a></div>
          <div><a href="https://www.w3schools.com">Contact</a></div>
        </div>
        <div class="col">
          <div class="mb-3">
            <a href="https://www.w3schools.com">Follow Us</a>
          </div>
        </div>



      </div>
    </div>


    </div>
  </footer>

 
  <button
  type="button"
  class="newsLetterBox hover btn btn-secondary"
  data-mdb-container="body"
  data-mdb-toggle="popover"
  data-mdb-placement="left"
  data-mdb-content="Well Received!"
>
<i class='bx bx-news newsLetter bx-lg'></i>
<p class="newsAlert rounded p-3">If you click this button, We will send to your Email our latest blogs and event.</p>
</button>

</body>

</html>