<?php
include "../../Controller/userProfile/profileController.php";
include "../common/uNavbar/uNavbar.php";
include "../common/uFooter/uFooter.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>

     <!-- custom css -->

     <link rel="stylesheet" href="../common/css/style.css" />
    <link rel="stylesheet" href="../common/uNavbar/css/uNavbar.css" />
    <link rel="stylesheet" href="../common/uFooter/css/uFooter.css" />
    <link rel="stylesheet" href="./css/userProfile.css" <?php time(); ?> />

    <!-- js, jq -->
    <script src="../common/jq/jquery-3.6.0.min.js" defer></script>
   

</head>
<body>
    <div class="mx-5 d-flex justify-content align-items-center flex-column">
        
         <form action="../../Controller/userProfile/profileController.php" method="post" enctype="multipart/form-data" class="d-flex justify-content align-items-center flex-column">
           

            <img src="../storage/home/benefitsOfCoffee.jpg"  alt="a" id="image" class="uPic" />
            <input type="file" name="upload" onchange="setimg()" id="uploadfile">

            <input type="text" name="username" class="form-control  mt-5" value="<?= $userInfo[0]["user_name"] ?>" placeholder="name" disabled>
            <input type="text" name="email" class="form-control mt-5" value="<?= $userInfo[0]["user_email"] ?>" placeholder="email" disabled>
            <input type="text" name="Age" class="form-control mt-5" value="
            <?= $userInfo[0]["age"] ?>" placeholder="Age" required>
            <input type="text" name="Gender" class="form-control mt-5 " value="<?php if ($userInfo[0]["gender"] == 0) echo "female";
                                                                                elseif ($userInfo[0]["gender"] == 1) echo "Male"; ?>" placeholder="gender" required>
            <input type="text" name="date of birth" class="form-control mt-5" value="<?= $userInfo[0]["date_of_birth"] ?>" placeholder="date of birth" required>
            <input type="hidden" name="id" value="<?= $userInfo[0]["register_id"] ?>">
            <button type="sumit" class="btn btn-secondary mt-5" name="profile">Update</button>
        </form>

        
    </div>
</body>
</html>