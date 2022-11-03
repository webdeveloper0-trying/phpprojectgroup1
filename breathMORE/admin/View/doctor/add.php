<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Doctors</title>

    <?php
    include "../../../patient/Controller/common/aChColorTxtController.php"; ?>
    <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./docAdd.css">
   
</head>

<body>
    <div class="container-fluid">


        <!-- <div class="col col-md-12  col-lg-12  col-sm-auto"> -->
        <form action="../../Controller/doctor/addController.php" method="post">
            <div class="row justify-content-center  
                ">
                <div class="col col-lg-auto ">
                    <h3 class="m-5">Add Doctor Info</h3>
                </div>
            </div>

            <div class="row justify-content-center  ">
                <div class="mb-2 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Doctor Name</label>
                    <input type="text" name="docName" class="form-control" id="exampleFormControlInput1" placeholder="Doctor Name" required>
                </div>

                <div class="mb-2 col col-lg-3">
                    <label for="" class="form-label">Gender</label>
                    <div>
                        <input type="radio" name="gender" value="0">Male
                        <input type="radio" name="gender" value="1">Female

                    </div>

                    <!-- <input type="radio" name="gender" id="">Other -->
                </div>

            </div>

            <div class="row justify-content-center">

                <div class="mb-2 col col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">SAMA</label>
                    <input type="text" name="sama" class="form-control" id="exampleFormControlInput1" placeholder="SAMA" required>
                </div>

                <div class="mb-2 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Bachelar</label>
                    <input type="text" name="bachelar" class="form-control" id="exampleFormControlInput1" placeholder="Bachelar" required>
                </div>

            </div>

            <div class="row justify-content-center">

                <div class="mb-2 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Center</label>
                    <input type="text" name="center" class="form-control" id="exampleFormControlInput1" placeholder="Center" required>
                </div>
                <div class="mb-2 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone No.</label>
                    <input type="text" name="phNum" class="form-control" id="exampleFormControlInput1" placeholder="Phone number" required>
                </div>

            </div>

            <div class="row justify-content-center">
                <div class="mb-2 col col-lg-6">
                    <label for="exampleFormControlInput1" class="form-label">Duty Date</label>
                    <input type="text" name="dutyDate" class="form-control" id="exampleFormControlInput1" placeholder="Duty Date" required>
                </div>
            </div>



            <div class="row  justify-content-center">
                <div class="mb-2 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Start Time</label>
                    <input type="text" name="stime" class="form-control" id="exampleFormControlInput1" placeholder="Start time" required>
                </div>
                <div class="mb-2 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">End Time</label>
                    <input type="text" name="etime" class="form-control" id="exampleFormControlInput1" placeholder="End time" required>
                </div>
            </div>



            <div class="row  justify-content-center">

                <button class="btn submit-button  m-3 col col-lg-2 col-sm-1 col-md-1  btn-secondary " type="button submit" name="addDoctor">ADD</button>


            </div>


        </form>
    </div>

    </div>

    <!-- </div> -->

</body>

</html>