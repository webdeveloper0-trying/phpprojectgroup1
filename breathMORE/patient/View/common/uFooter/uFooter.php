<?php
include "../../../admin/Controller/contact/conListController.php";

// print_r($conList);
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
  
 
</head>

<body>

  <footer id="footer" class="footer mt-5 p-5">
    <div class="container-fluid">
      <!-- 
      <div class="footer container"> -->
      <div class="row">
        <div class="col">
          <div class="mb-3">
            <a href="https://www.w3schools.com" class="fw-bold">Address</a>
          </div>
          <div class="footerAddress">No.77,Yangon,</div>
          <div class="footerAddress">Myanmar</div>
          <div class="footerAddress">01-567 344</div>
          <br />

          <div class="footerAddress"><?= $uConList[0]['website_phno'] ?></div>
        </div>
        <div class="col">
          <div class="mb-3">
            <a href="../userPrivacyPolicy/privacyPolicy.php" class="footerLink">Privacy Policy</a>
          </div>
          <div><a href="../faq/faq.php" class="footerLink">FAQs</a></div>
        </div>
        <div class="col">
          <div class="mb-3">
            <a href="#" class="fw-bold">Navigation</a>
          </div>
          <div class="footerHome">
            <a href="../main/main.php" class="footerLink">Home</a>
          </div>
          <div><a href="../centers/center.php" class="footerLink">Centers</a></div>
          <div><a href="../blogs/mainBlog.php" class="footerLink">Blogs</a></div>
          <div><a href="../emergency/uEmergency.php" class="footerLink">Emergency</a></div>
        </div>
        <div class="col">
          <div class="ms-2 mb-3">
            <a href="#" class="fw-bold">Follow Us</a>
          </div>
          <div class="socialLinks">
            <a href="<?= $uConList[0]['facebook'] ?>" class="m-2"><i class='bx bx-sm bxl-facebook footerLink' style='color:#eaeaea'></i></a>
            <a href="<?= $uConList[0]['telegram'] ?>" class="m-2"><i class='bx bx-sm bxl-telegram footerLink' style='color:#eaeaea'></i></a>
            <a href="<?= $uConList[0]['youtube'] ?>" class="m-2"><i class='bx bx-sm bxl-youtube footerLink' style='color:#eaeaea'></i></a>
          </div>
        </div>



      </div>
    </div>


    </div>
  </footer>
</body>

</html>