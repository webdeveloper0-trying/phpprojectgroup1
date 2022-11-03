<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>

    <?php
    session_start();
    include "../../../patient/Controller/common/aChColorTxtController.php";

    if (isset($_SESSION["docInfo"])) {
        $docInfo = $_SESSION["docInfo"];
    } else {
        header("Location: ./list.php");
    }

    $docInfo = $_SESSION["docInfo"];

    ?>
    <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./docAdd.css">

</head>

<body>

    <div class="container-fluid">



        <form action="../../Controller/doctor/updateController.php" method="post">
            <div class="row justify-content-center ">
                <div class="col col-lg-auto ">
                    <h3 class="m-5">Edit Doctor Info</h3>
                </div>
            </div>


            <div class="row justify-content-center ">
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Doctor Name</label>

                    <input type="text" name="docName" class="form-control" id="exampleFormControlInput1" placeholder="Doctor Name" required value="<?php echo $docInfo[0]["doctor_name"] ?>">



                </div>

                <div class="mb-3 col col-lg-3">
                    <label for="" class="form-label">Gender</label>

                    <div>

                        <input type="radio" name="gender" value="0" <?php if ($docInfo[0]['doctor_gender'] == 0) {
                                                                        echo "checked";
                                                                    } ?>>Male
                        <input type="radio" name="gender" value="1" <?php if ($docInfo[0]['doctor_gender'] == 1) {
                                                                        echo "checked";
                                                                    } ?>>Female
                    </div>

                </div>
            </div>


            <div class="row justify-content-center ">
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">SAMA</label>
                    <input type="text" name="sama" class="form-control" value="<?php echo $docInfo[0]["doctor_sama"] ?>" id="exampleFormControlInput1" placeholder="SAMA">
                </div>
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Bachelar</label>
                    <input type="text" name="bachelar" class="form-control" value="<?php echo $docInfo[0]["doctor_bachelar"] ?>" id="exampleFormControlInput1" placeholder="Bachelar">
                </div>
            </div>

            <div class="row justify-content-center ">
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Center</label>
                    <input type="text" name="center" class="form-control" value="<?php echo $docInfo[0]["center"] ?>" id="exampleFormControlInput1" placeholder="Center">
                </div>
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone No.</label>
                    <input type="text" name="phNum" class="form-control" value="<?php echo $docInfo[0]["ph_num"] ?>" id="exampleFormControlInput1" placeholder="Phone number">
                </div>
            </div>



            <div class="row justify-content-center ">
                <div class="mb-3 col col-lg-6">
                    <label for="exampleFormControlInput1" class="form-label">Duty Date</label>
                    <input type="text" name="dutyDate" class="form-control" value="<?php echo $docInfo[0]["day"] ?>" id="exampleFormControlInput1" placeholder="Duty Date">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Start Time</label>
                    <input type="text" name="stime" class="form-control" value="<?php echo $docInfo[0]["start_time"] ?>" id="exampleFormControlInput1" placeholder="Start time">
                </div>
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">End Time</label>
                    <input type="text" name="etime" class="form-control" id="exampleFormControlInput1" value="<?php echo $docInfo[0]["end_time"] ?>" placeholder="End time">
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="mb-3 col col-lg-3">
                    <input type="text" hidden name="id" class="form-control" value="<?php echo $docInfo[0]["doctor_id"] ?>">
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="mb-3 col col-lg-2">
                    <button type="button submit" name="updateDoctor" class="btn submit-button  ">UPDATE Doctor Info</button>
                </div>
            </div>





        </form>
    </div>

</body>

</html>