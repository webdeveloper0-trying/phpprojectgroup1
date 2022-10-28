<?php
// echo "ok";
session_start();
$labinfo =  $_SESSION["pLabInfo"];
// echo "<pre>";
// print_r($labinfo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lab </title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

    <link rel="stylesheet" href="../css/labAdd.css">
</head>

<body>
    <div class="container-fluid">
        <form action="../../Controller/labreport/update_labController.php" method="post">
            <div class="row justify-content-center ">
                <div class="col col-lg-auto ">
                    <h3 class="m-5">Edit Lab Info</h3>
                </div>
            </div>


            <div class="row justify-content-center ">
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" value="<?php echo $labinfo[0]["patient_id"] ?>" class="form-label">PatientID</label>

                    <input type="text" name="pid" class="form-control" id="exampleFormControlInput1" placeholder="" disabled value="<?php echo $labinfo[0]["patient_id"] ?>">

                </div>
            </div>


            <div class="row justify-content-center ">
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Ref Doc</label>
                    <input type="text" name="refdoc" class="form-control" value="<?php echo $labinfo[0]["ref_doc"] ?>" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">ResultDate</label>
                    <input type="date" name="resDate" class="form-control" value="<?php echo $labinfo[0]["result_date"] ?>" id="exampleFormControlInput1" placeholder="">
                </div>
            </div>

            <div class="row justify-content-center ">
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Test</label>
                    <input type="text" name="test" class="form-control" value="<?php echo $labinfo[0]["test"] ?>" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Result</label>
                    <input type="text" name="res" class="form-control" value="<?php echo $labinfo[0]["result"] ?>" id="exampleFormControlInput1" placeholder="Phone number">
                </div>
            </div>

            <div class="row justify-content-center ">
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Unit</label>
                    <input type="text" name="unit" class="form-control" value="<?php echo $labinfo[0]["unit"] ?>" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Remark</label>
                    <input type="text" name="rem" class="form-control" value="<?php echo $labinfo[0]["remark"] ?>" id="exampleFormControlInput1" placeholder="">
                </div>
            </div>

            <div class="row justify-content-center ">
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">ReportedBy</label>
                    <input type="text" name="repo" class="form-control" value="<?php echo $labinfo[0]["reported_by"] ?>" id="exampleFormControlInput1" placeholder="unit">
                </div>
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Authorised By</label>
                    <input type="text" name="autho" class="form-control" value="<?php echo $labinfo[0]["authorised_by"] ?>" id="exampleFormControlInput1" placeholder="Phone number">
                </div>
            </div>

            <div class="row justify-content-center ">
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Ref Rate</label>
                    <input type="text" name="rfrate" class="form-control" value="<?php echo $labinfo[0]["ref_rate"] ?>" id="exampleFormControlInput1" placeholder="">
                </div>

                <div class="mb-3 col col-lg-3">
                    <button type="button submit" name="updateLab" class="btn btn-secondary mt-4">UPDATE Doctor Info</button>
                </div>

            </div>

            <div class="row justify-content-center">


                <div class="mb-3 col col-lg-3">
                    <!-- <label for="exampleFormControlInput1" class="form-label">ID</label> -->
                    <input type="text" hidden name="upid" class="form-control" value="<?php echo $labinfo[0]["id"] ?>" id="exampleFormControlInput1" placeholder="">
                </div>
            </div>
        </form>
    </div>


</body>

</html>