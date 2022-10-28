<?php
include "../../Controller/userProfile/profileController.php";
include "../common/uNavbar/uNavbar.php";
include "../common/uFooter/uFooter.php";

// echo "<pre>";
// print_r($patientinfo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- custom css -->
    <link rel="stylesheet" href="../common/css/style.css" />
    <link rel="stylesheet" href="../common/uNavbar/css/uNavbar.css" />
    <link rel="stylesheet" href="../common/uFooter/css/uFooter.css" />
    <link rel="stylesheet" href="./css/userProfile.css" <?php time(); ?> <script src="./js/profile.js" defer>
    </script>
</head>

<body>
    <div class="mx-5">
        <div class="uProfileTitle d-flex justify-content-center flex-row my-5">
            <h4 class="h3 me-4">Your Profile</h4>
            <div class="titleLine"></div>
        </div>


        <div class="profileCon d-flex py-4 shadow-4">
            <div class="uProfileImgBox d-flex justify-content-center align-items-center flex-column ms-5">
                <div class="uPImg d-flex justify-content-center align-items-center mb-4">
                    <img src="../storage/home/benefitsOfCoffee.jpg" class="img-fluid uPic mb-3" alt="User" />
                </div>
                <div class="uPName text-center">
                    <span><?= $patientinfo[0]["user_name"] ?></span>
                    <span class="uPline"></span>
                </div>
            </div>
            <div class="uProfileInfo ms-5">
                <table class="table text-start">
                    <thead>
                        <tr>
                            <th colspan="4" class="text-muted text-capitalize">Your Id is <span><?= $patientinfo[0]["register_id"] ?></span></th>
                        </tr>
                        <tr>
                            <th><span class="text-muted">Gender:</span>
                                <?= $patientinfo[0]["gender"] ?>
                            </th>
                            <th scope="col">
                                <span class="text-muted">Date of Birth:</span>
                                <?= $patientinfo[0]["date_of_birth"] ?>
                            </th>
                            <th>
                                <span class="text-muted">Age:</span>
                                <?= $patientinfo[0]["age"] ?>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td><span class="text-muted">Email</span>
                            <?= $patientinfo[0]["user_email"] ?>
                            </td>
                            
                            <td colspan="2"><span class="text-muted">Ph.No:</span>
                            <?= $patientinfo[0]["ph_num"] ?>
                            </td>                          
                           
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="hosHistory">
            
        </div>
        <!-- <form action="../Controller/updateController.php" method="post" enctype="multipart/form-data">
           

            <img src="../storage/home/benefitsOfCoffee.jpg"  alt="a" id="image" />
            <input type="file" name="upload" onchange="setimg()" id="uploadfile">

            <input type="text" name="username" class="form-control  mt-5" value="<?= $patientinfo[0]["user_name"] ?>" placeholder="name" disabled>
            <input type="text" name="email" class="form-control mt-5" value="<?= $patientinfo[0]["user_email"] ?>" placeholder="email" disabled>
            <input type="text" name="Age" class="form-control mt-5" value="
            <?= $patientinfo[0]["age"] ?>" placeholder="Age" required>
            <input type="text" name="Gender" class="form-control mt-5 " value="<?php if ($patientinfo[0]["gender"] == 0) echo "female";
                                                                                elseif ($patientinfo[0]["gender"] == 1) echo "Male"; ?>" placeholder="gender" required>
            <input type="text" name="date of birth" class="form-control mt-5" value="<?= $patientinfo[0]["date_of_birth"] ?>" placeholder="date of birth" required>
            <input type="hidden" name="id" value="<?= $patientinfo[0]["register_id"] ?>">
            <button type="sumit" class="btn btn-secondary mt-5" name="profile">Update</button>
        </form>

        <button type="sumit" class="btn btn-secondary mt-5" id="history"><a href="../userHistory/userhistory.php">History Page </a></button> -->

    </div>
</body>

</html>