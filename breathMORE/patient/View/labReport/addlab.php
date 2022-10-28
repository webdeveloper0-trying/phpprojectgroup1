<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Lab Report</title>
    <!-- Font Awesome -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" /> -->
    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" /> -->
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

    <link rel="stylesheet" href="../css/labAdd.css">
    <script src="../js/jquery3.6.0.js"></script>

    <script src="../js/labsearch.js" <?= time() ?> defer></script>

</head>

<body>

    <div class="container-fluid">

        <form action="../../Controller/labreport/add_labController.php" method="post">

            <div class="row justify-content-center">
                <div class="col col-lg-auto ">
                    <h3 class="m-5">Add Lab Report</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="mb-2 col col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Patient ID</label>
                    <input id="patientID" type="text" name="pid" class="form-control" id="exampleFormControlInput1" placeholder="PatientID">

                    <!-- <button class="btn" id="searchidBtn"><span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8a39ab" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="10" cy="10" r="7" />
                                <line x1="21" y1="21" x2="15" y2="15" />
                            </svg></span></button> -->
                </div>

                <div class="mb-2 col col-lg-3" id="pname">
                    <label for="exampleFormControlInput1" class="form-label">Patient Name</label>
                    <div name="pname"></div>
                    <!-- <input type="text" name="pname" class="form-control" id="exampleFormControlInput1" placeholder="Name"> -->
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="mb-2 col col-lg-3" id="phno">
                    <label for="exampleFormControlInput1" class="form-label">Ph.No</label>
                    <div name="phnum"></div>
                    <!-- <input type="text" name="phnum" class="form-control" id="exampleFormControlInput1" placeholder=""> -->

                </div>

                <div class="mb-2 col col-lg-3" id="age">
                    <label for="exampleFormControlInput1" class="form-label">Age</label>
                    <!-- <input type="text" name="age" class="form-control" id="exampleFormControlInput1" placeholder="age"> -->
                    <div name="age"></div>
                </div>
            </div>

            <div class="row justify-content-center  ">

                <div class="mb-2 col col col-lg-3 ">
                    <label for="exampleFormControlInput1" class="form-label">Ref Doctor</label>
                    <input type="text" name="refDoc" class="form-control" id="exampleFormControlInput1" placeholder="">

                </div>

                <div class="mb-2 col col col-lg-3" id="gender">
                    <label for="exampleFormControlInput1" class="form-label">Gender</label>
                    <div name="gender"></div>
                </div>
            </div>

            <br>


            <div class="row justify-content-center">
                <div class="mb-2 col col-lg-2">
                    <div class="form-outline">

                        <input type="text" name="test" id="form8Example2" class="form-control" />
                        <label class="form-label" for="form8Example2">Test</label>

                    </div>

                </div>
                <div class="mb-2 col col-lg-2">
                    <div class="form-outline">
                        <input type="text" name="result" id="form8Example2" class="form-control" />
                        <label class="form-label" for="form8Example2">result</label>
                    </div>
                </div>
                <div class="mb-2 col col-lg-2">
                    <div class="form-outline">
                        <input type="text" name="range" id="form8Example2" class="form-control" />
                        <label class="form-label" for="form8Example2">Range</label>
                    </div>
                </div>
                <div class="mb-2 col col-lg-2">
                    <div class="form-outline">
                        <input type="text" name="unit" id="form8Example2" class="form-control" />
                        <label class="form-label" for="form8Example2">Unit</label>
                    </div>
                </div>
                <div class="mb-2 col col-lg-2">
                    <div class="form-outline">
                        <input type="text" name="remark" id="form8Example2" class="form-control" />
                        <label class="form-label" for="form8Example2">Remark</label>
                    </div>
                </div>


            </div>

            <div class="row justify-content-center  ">

                <div class="mb-2 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Reported By</label>
                    <input type="text" name="repBy" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                </div>

                <div class="mb-2 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Authuorised By</label>
                    <input type="text" name="autBy" class="form-control" id="exampleFormControlInput1" placeholder="Name" required>
                </div>


            </div>

            <div class="row  justify-content-center">

                <div class="mb-4 col col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Result Date</label>
                    <input type="date" name="resdate" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>

                <div class="mt-4 col col col-lg-3">
                    <!-- <input type="reset" class="btn mb-1 submit-button col btn-secondary " value="reset"> -->
                    <input type="button" value="Refresh Button" onClick="window.location.reload()">
                    <button class="btn submit-button col btn-secondary " type="submit" name="addLabReport">Submit</button>
                </div>


            </div>
        </form>

    </div>







</body>

</html>