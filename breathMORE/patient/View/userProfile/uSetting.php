<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>

    <?php

    session_start();
    if (!isset($_SESSION["userId"])) {
        header("Location: ../uRegisterLogin/register.php");
    } else {
        $userId = $_SESSION["userId"];
    }
    include "../../Controller/userProfile/profileController.php";
    include "../common/uNavbar/uNavbar.php";
    include "../common/uFooter/uFooter.php";

    include "../../../patient/Controller/common/aChColorTxtController.php";
    include "../../../admin/Controller/adminProfile/aSelectMsgController.php";

    ?>

    <!-- custom css -->

    <link rel="stylesheet" href="../common/css/style.css" />
    <link rel="stylesheet" href="../common/uNavbar/css/uNavbar.css" />
    <link rel="stylesheet" href="../common/uFooter/css/uFooter.css" />
    <link rel="stylesheet" href="./css/userProfile.css" <?php time(); ?> />

    <!-- js, jq -->
    <script src="../common/jq/jquery-3.6.0.min.js" defer></script>
    <script src="./js/profile.js" defer></script>


</head>

<body>
    <div class="mx-5 mt-5 d-flex justify-content align-items-center flex-column">

        <form action="../../Controller/userProfile/updateController.php" method="post" enctype="multipart/form-data" class="d-flex justify-content align-items-center flex-column">


            <div class="imgBox d-flex justify-content-center align-items-center position-relative">
                <img src="../storage/home/<?= $userInfo[0]["patient_profile"] ?>" alt="a" id="image" class="uPic mb-4" />
                <input type="file" name="upload" onchange="setimg()" id="uploadfile" class="d-block form-control-lg">
            </div>

            <div class="mt-4">
                <div class="form-outline mb-4">
                    <input type="text" name="username" class="form-control" value="<?= $userInfo[0]["user_name"] ?>" placeholder="name" disabled>
                    <label class="form-label" for="name">Name</label>
                </div>


                <div class="form-outline mb-4">
                    <input type="email" name="email" class="form-control" value="<?= $userInfo[0]["user_email"] ?>" placeholder="email" disabled>
                    <label class="form-label" for="email">Email</label>
                </div>


                <div class="form-outline mb-4">
                    <input type="text" name="phNo" class="form-control" value="<?= $userInfo[0]["ph_num"] ?>" required>
                    <label class="form-label" for="phNo">Ph.No</label>
                </div>

                <div class="form-outline mb-4 required">

                    <label class="form-label" for="gender">Gender</label>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1" <?php if ($userInfo[0]["gender"] == "Male") echo "checked" ?> />
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2" <?php if ($userInfo[0]["gender"] == "Female") echo "checked" ?> />
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="3" <?php if ($userInfo[0]["gender"] == "Other") echo "checked" ?> />
                        <label class="form-check-label" for="inlineRadio2">Other</label>
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <input type="date" name="dob" class="form-control mt-5" value="<?= $userInfo[0]["date_of_birth"] ?>" placeholder="date of birth" required>
                    <label class="form-label" for="dob">Date Of Birth</label>
                </div>

                <input type="hidden" name="id" value="<?= $userInfo[0]["register_id"] ?>">
            </div>

            <button type="sumit" class="btn btn-purple mt-5" name="profile">Update</button>
        </form>


    </div>
</body>

</html>