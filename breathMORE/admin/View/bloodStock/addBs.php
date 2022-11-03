<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blood Stock</title>

    <?php
    include "../../../patient/Controller/common/aChColorTxtController.php"; ?>
    <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../doctor/docAdd.css">

    <link rel="stylesheet" href="../common/css/style.css">

</head>

<body class="d-flex justify-content-center">
    <div class="container-fluid">

        <form action="../../Controller/bloodStock/addBsController.php" method="post">
            <div class="row justify-content-center align-items-center m-5">

                <div class="row justify-content-center  ">
                    <div class="col col-lg-auto ">
                        <h3 class="m-5 title">Add Blood Stock</h3>
                    </div>

                </div>

                <div class="col-lg-5 col-sm-3 mb-3 ">

                    <label for="exampleFormControlInput1" class="form-label">Date</label>

                    <input id="" type="date" name="bdate" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>

                <div class="col-lg-5 col-sm-3 mb-3 ">

                    <input id="" hidden type="text" name="inB" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>



                <div class="col-lg-5 col-sm-3 mb-3 ">

                    <label for="exampleFormControlInput1" class="form-label">Blood Type</label>
                    
                    <select class="form-select" name="bloodtypes" aria-label="Default select example">
                        <option value="O+" selected>O+</option>
                        <option value="O-">O-</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>

                    </select>


                </div>


                <div class="col-lg-5 col-sm-3 mb-3 ">

                    <label for="exampleFormControlInput1" class="form-label">Today Add Stock</label>

                    <input id="" type="text" name="psB" class="form-control" id="exampleFormControlInput1" placeholder="" required>


                </div>

                <div class="col-lg-5 col-sm-3 mb-3 ">

                    <label for="exampleFormControlInput1" class="form-label">Used</label>

                    <input id="" type="text" name="udB" class="form-control" id="exampleFormControlInput1" placeholder="" required>


                </div>


                <div class="col-lg-5 col-sm-3 mb-3 ">

                    <label for="exampleFormControlInput1" class="form-label">Average </label>

                    <input id="" type="text" name="avg" class="form-control" id="exampleFormControlInput1" placeholder="" required>


                </div>

                <div class="col-lg-5 col-sm-3 align-self-end">
                    <button class="btn float-end col-lg-5 submit-button mysubmit col btn-secondary " type="submit" name="addBstock">Submit</button>
                </div>
            </div>



        </form>

    </div>
</body>

</html>