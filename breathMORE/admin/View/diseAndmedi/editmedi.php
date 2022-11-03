<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit MEDI </title>

    <?php

    session_start();
    include "../../../patient/Controller/common/aChColorTxtController.php";
    $mediList =  $_SESSION["dAndmeInfos"];
    // echo "<pre>";
    // print_r($mediList);
    ?>

    <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../doctor/docAdd.css">

    <link rel="stylesheet" href="../common/css/style.css">


    <link rel="stylesheet" href="./css/aDoctorlist.css" <?php time(); ?> />
</head>

<body>
    <div class="container_fluid">
        <form action="../../Controller/diseAndmedi/dmUpdateController.php" method="post">

            <div class="row justify-content-center  ">
                <div class="col col-lg-auto text-center ">
                    <h3 class="m-5">UPDATE Diseases and Medicines</h3>
                </div>

            </div>


            <div class="row justify-content-center">

                <div class="col-4 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Disease</label>
                    <input id="" type="text" name="updname" class="form-control" value="<?php echo $mediList[0]["disease_names"] ?>" id="exampleFormControlInput1" placeholder="">

                </div>


            </div>


            <div class="row justify-content-center">

                <div class="col-4 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Medicine</label>

                    <input id="" type="text" name="upmedname" value="<?php echo $mediList[0]["medicine_names"] ?>" class="form-control" id="exampleFormControlInput1" placeholder="">

                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-4 mb-3">
                    <input id="" type="text" name="upId" value="<?php echo $mediList[0]["id"] ?>" class="form-control" id="exampleFormControlInput1" placeholder="" hidden>

                </div>
            </div>

            <div class="row  justify-content-center ">

                <div class="col-4 mb-3 align-self-end">
                    <button class="btn float-end col-lg-5 submit-button mysubmit col btn-secondary " type="submit" name="updateDiseAndmedi">Update</button>
                </div>
            </div>


        </form>

    </div>

</body>

</html>