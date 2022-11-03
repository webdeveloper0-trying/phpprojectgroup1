<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact us</title>

    <?php
    session_start();
    include "../../../patient/Controller/common/aChColorTxtController.php";
    $contList = $_SESSION["contactS"];
    // echo "<pre>";
    // print_r($contList);
    ?>
    <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />


    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../doctor/docAdd.css">
    <link rel="stylesheet" href="../common/css/style.css">
</head>

<body class="d-flex justify-content-center">



    <form action="../../Controller/contact/conUpdateController.php" method="post">
        <div class="row justify-content-center align-items-center m-5">

            <div class="row justify-content-center  ">
                <div class="col col-lg-auto ">
                    <h3 class="m-5 title">Edit Contact Us</h3>
                </div>

            </div>
            <div class="col-lg-5 col-sm-3 mb-3 ">

                <label for="exampleFormControlInput1" class="form-label">24/7 Phone Number</label>

                <input id="" type="text" name="uPhnum" value="<?php echo $contList[0]["website_phno"] ?>" class="form-control" id="exampleFormControlInput1" placeholder="phNo.">


            </div>



            <div class="col-lg-5 col-sm-3 mb-3 ">

                <label for="exampleFormControlInput1" class="form-label">FaceBook</label>

                <input id="" type="text" name="ufb" value="<?php echo $contList[0]["facebook"] ?>" class="form-control" id="exampleFormControlInput1" placeholder="fblink">


            </div>


            <div class="col-lg-5 col-sm-3 mb-3 ">

                <label for="exampleFormControlInput1" class="form-label">Youtube</label>

                <input id="" type="text" name="uyt" value="<?php echo $contList[0]["youtube"] ?>" class="form-control" id="exampleFormControlInput1" placeholder="ytlink">


            </div>

            <div class="col-lg-5 col-sm-3 mb-3 ">

                <label for="exampleFormControlInput1" class="form-label">Telegram</label>

                <input id="" type="text" name="utele" value="<?php echo $contList[0]["telegram"] ?>" class="form-control" id="exampleFormControlInput1" placeholder="teleLink">


            </div>

            <div class="col-lg-5 col-sm-3 mb-3 ">



                <input id="" hidden type="text" name="uID" class="form-control" value="<?php echo $contList[0]["id"] ?>" id="exampleFormControlInput1" placeholder="">


            </div>


            <div class="col-lg-5 col-sm-3 align-self-end">
                <button class="btn float-end col-lg-5 submit-button mysubmit col btn-secondary " type="submit" name="upContactUs">Update</button>
            </div>
        </div>
    </form>


</body>

</html>