<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditBLood Stock</title>

    <?php
    session_start();
    include "../../../patient/Controller/common/aChColorTxtController.php";
    $typeStock = $_SESSION["bloodInfos"];
    // echo "<pre>";
    // print_r($typeStock);
    ?>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- css -->
    <link rel="stylesheet" href="../doctor/docAdd.css">
    <link rel="stylesheet" href="../common/css/style.css">
    <link rel="stylesheet" href="../common/css/adminNavbar.css">
</head>


<body class="d-flex justify-content-center">
    <div class="container-fluid">

        <form action="../../Controller/bloodStock/updateBsController.php" method="post">
            <div class="row justify-content-center align-items-center m-5">

                <div class="row justify-content-center  ">
                    <div class="col col-lg-auto">
                        <h3 class="m-5 title">Edit Blood Stock</h3>
                    </div>
                </div>

                <div class="col-lg-5 col-sm-3 mb-3 ">
                    <label for="exampleFormControlInput1" class="form-label">Date</label>
                    <input id="" type="date" name="upbdate" class="form-control" value="<?php echo $typeStock[0]["blood_date"] ?>" id="exampleFormControlInput1" placeholder="">
                </div>

                <div class="col-lg-5 col-sm-3 mb-3 ">
                    <label readonly for="exampleFormControlInput1" class="form-label">Instock Now</label>
                    <input readonly id="" type="text" name="upBinstock" value="<?php echo $typeStock[0]["instock_now"] ?>" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>

                <div class="col-lg-5 col-sm-3 mb-3 ">
                    <label for="exampleFormControlInput1" class="form-label">Blood Type</label>
                    <select class="form-select" name="upbloodtypes" aria-label="Default select example">
                        <option value="O+" <?php if ($typeStock[0]['blood_type'] == 'O+') {
                                                echo "selected";
                                            } ?>>O+
                        </option>
                        <option value="O-" <?php if ($typeStock[0]['blood_type'] == 'O-') {
                                                echo "selected";
                                            } ?>>O-</option>
                        <option value="A+" <?php if ($typeStock[0]['blood_type'] == 'A+') {
                                                echo "selected";
                                            } ?>>A+</option>
                        <option value="A-" <?php if ($typeStock[0]['blood_type'] == 'A-') {
                                                echo "selected";
                                            } ?>>A-</option>
                        <option value="B+" <?php if ($typeStock[0]['blood_type'] == 'B+') {
                                                echo "selected";
                                            } ?>>B+</option>
                        <option value="B-" <?php if ($typeStock[0]['blood_type'] == 'B-') {
                                                echo "selected";
                                            } ?>>B-</option>
                        <option value="AB+" <?php if ($typeStock[0]['blood_type'] == 'AB+') {
                                                echo "selected";
                                            } ?>>AB+</option>
                        <option value="AB-" <?php if ($typeStock[0]['blood_type'] == 'AB-') {
                                                echo "selected";
                                            } ?>>AB-</option>
                    </select>
                </div>


                <div class="col-lg-5 col-sm-3 mb-3 ">
                    <label for="exampleFormControlInput1" class="form-label">Previous Stock</label>
                    <input id="" type="text" name="upPre" class="form-control" value="<?php echo $typeStock[0]["previous_stock"] ?>" id="exampleFormControlInput1" placeholder="">
                </div>

                <div class="col-lg-5 col-sm-3 mb-3 ">
                    <label for="exampleFormControlInput1" class="form-label">Used </label>
                    <input type="hidden" name="preUsed" value="<?php echo $typeStock[0]["used_quantity"] ?>" />
                    <input id="" type="text" name="upUsed" value="<?php echo $typeStock[0]["used_quantity"] ?>" class="form-control" id="exampleFormControlInput1" placeholder="Current Used">
                </div>


                <div class="col-lg-5 col-sm-3 mb-3 ">
                    <label for="exampleFormControlInput1" class="form-label">Average </label>
                    <input id="" type="text" name="upAvg" value="<?php echo $typeStock[0]["average_range"] ?>" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>

                <div class="col-lg-5 col-sm-3 mb-3 ">
                    <input id="" hidden type="text" name="upId" class="form-control" value="<?php echo $typeStock[0]["id"] ?>" id="exampleFormControlInput1" placeholder="">
                </div>

                <div class="col-lg-5 col-sm-3 align-self-end">
                    <button class="btn float-end col-lg-5 submit-button mysubmit col btn-secondary " type="submit" name="updateBstock">Update</button>
                </div>
            </div>
        </form>

    </div>
</body>



</html>