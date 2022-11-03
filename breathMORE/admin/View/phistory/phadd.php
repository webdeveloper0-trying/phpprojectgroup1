<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient History</title>

    <?php
    session_start();
    include "../../../patient/Controller/common/aChColorTxtController.php";

    ?>
    <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

    <link rel="stylesheet" href="../common/css/style.css">


    <!-- <script src="../common/jq/jquery-3.6.0.min.js" defer></script>
    <script src="./js/phadd.js" defer <?= time() ?>></script> -->

    <link rel="stylesheet" href="../doctor/docAdd.css">
    <link rel="stylesheet" href="../common/css/style.css">
    <script src="../common/jq/jquery-3.6.0.min.js"></script>
    <script src="./phadd.js" <?= time() ?> defer></script>


</head>

<body>

    <div class="mx-5 d-flex justify-content-center align-items-center flex-column">

        <form action="../../Controller/phistory/phaddController.php" method="post">

            <div class="row justify-content-center mt-3">
                <div class="col col-lg-5 text-center">
                    <h3 class="m-3 title">Patient History Record </h3>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="mb-2 col  col-lg-3">
                    <label for="">Type Patient ID</label>
                    <input id="searchpid" type="text" name="pid" class="form-control" id="exampleFormControlInput1" placeholder="">

                    <button class="btn" id="searchBtn"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-search" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#6f32be" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="7" r="4" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h1" />
                            <circle cx="16.5" cy="17.5" r="2.5" />
                            <path d="M18.5 19.5l2.5 2.5" />
                        </svg></button>
                </div>


            </div>

            <div class=" justify-content-center align-items-center flex-column">
                <table class="table  align-middle table-bordered text-center ">
                    <thead>
                        <tr>

                            <th scope="col col-lg-2">Patient Name</th>
                            <th scope="col col-lg-2">diagnosis</th>

                            <th scope="col col-lg-2">Center</th>
                            <th scope="col col-lg-2">Doc Id</th>
                            <!-- <th scope="col"> <input type="text" value="Doctor ID"></th> -->


                        </tr>
                    </thead>
                    <tbody id="searchresult">
                        <!-- <tr>
                            <td name="pid"> </td>
                            <td name="diag"></td>
                            <td name="cen"></td>
                           
                        </tr> -->

                    </tbody>
                </table>
            </div>




            <div class="row justify-content-center  ">

                <div class="mb-2 col col-lg-6">
                    <label for="exampleFormControlInput1" class="form-label">Doctor Note</label>
                    <textarea required name="dnote" class="form-control" id="" cols="30" rows="8" id="exampleFormControlInput1" placeholder=""></textarea>
                </div>


            </div>

            <div class="row justify-content-center mt-3  ">

                <div class="mb-2 col col-lg-3" id="pname">


                    <input type="date" name="date" class="form-control" id="exampleFormControlInput1" placeholder="">


                </div>

                <div class="mb-2 col col col-lg-3" id="">


                    <input type="text" name="typeIDdoc" class="form-control" id="exampleFormControlInput1" placeholder="reportedID">
                </div>
                <div class="mb-2 col col col-lg-3" id="">


                    <button class="btn submit-button col btn-secondary " type="submit" name="addPatientReport">Submit</button>
                </div>
            </div>

        </form>


    </div>




</body>

</html>