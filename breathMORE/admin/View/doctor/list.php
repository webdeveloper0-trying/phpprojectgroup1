<?php
include "../../Controller/doctor/listController.php";
// echo "<pre>";
// print_r($doctorList);

include "../../View/common/adminNavbar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor List</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- css -->
    <link rel="stylesheet" href="../css/doclist_style.css">

    <link rel="stylesheet" href="../common/css/adminNavbar.css">


    <script src="../js/jquery3.6.0.js"></script>
    <script src="../resources/js/doctorsearch.js" <?= time() ?> defer></script>



</head>

<body>

    <div class=" container-fluid p-4">




        <div class="row justify-content-md-center">


            <div class="row m-3">

                <div class="col col-lg-3 col-md-2 col-sm-auto"><input type="text" name="docSearch" id="searchDoctext" class="form-control" placeholder="SearchDoctor"></div>
                <div class="col col-lg-2 col-md-2 col-sm-auto">
                    <button class="btn " id="searchBtn"><span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8a39ab" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="10" cy="10" r="7" />
                                <line x1="21" y1="21" x2="15" y2="15" />
                            </svg></span></button>
                </div>




                <div class="col col-lg-2">
                    <input type="radio" name="category" id="rname" value="name" checked>
                    <label for="rname" class="fw-bold">Name<span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8a39ab" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                            </svg>
                        </span></label>
                </div>
                <div class="col col-lg-2">
                    <input type="radio" name="category" id="rcenter" value="center">
                    <label for="rcenter" class="fw-bold">Center <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8a39ab" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="3" y1="21" x2="21" y2="21" />
                                <line x1="9" y1="8" x2="10" y2="8" />
                                <line x1="9" y1="12" x2="10" y2="12" />
                                <line x1="9" y1="16" x2="10" y2="16" />
                                <line x1="14" y1="8" x2="15" y2="8" />
                                <line x1="14" y1="12" x2="15" y2="12" />
                                <line x1="14" y1="16" x2="15" y2="16" />
                                <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                            </svg>
                        </span></label>
                </div>
                <div class="col col-lg-2">
                    <input type="radio" name="category" id="rphone" value="phone">
                    <label for="rphone" class="fw-bold">Phone <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8a39ab" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                <path d="M15 7a2 2 0 0 1 2 2" />
                                <path d="M15 3a6 6 0 0 1 6 6" />
                            </svg>
                        </span></label>
                </div>


            </div>




            <div class="col col-md-auto col-lg-11 col-sm-6">
                <a href="./add.php"> <input class="btn m-3 mybtn 
                float-lg-end float-sm-end float-md-end" type="submit" value="ADD Doctor"></a>


                <table class="table table align-middle table-bordered text-center ">
                    <thead>
                        <tr>
                            <th scope="col" class="p-3">No.</th>
                            <th scope="col">Doctor_Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Sama</th>
                            <th scope="col">Bachelar</th>
                            <th scope="col">Center</th>
                            <th scope="col">PhoneNo</th>
                            <th scope="col">Duty Day</th>
                            <th scope="col">Duty Time</th>
                            <th colspan="2" scope="col ">Action</th>
                        </tr>
                    </thead>
                    <tbody id="searchresult">
                        <?php $count = 1; ?>
                        <?php foreach ($doctorList as $key => $doctor) { ?>
                            <tr>
                                <td><?= $count++; ?></td>
                                <td>Dr.<?= $doctor["doctor_name"] ?></td>
                                <td><?php
                                    if ($doctor["doctor_gender"] == 0) {
                                        echo "Male";
                                    } else {
                                        echo "Female";
                                    }

                                    ?></td>
                                <td><?= $doctor["doctor_sama"] ?></td>
                                <td><?= $doctor["doctor_bachelar"] ?></td>
                                <td><?= $doctor["center"] ?></td>
                                <td><?= $doctor["ph_num"] ?></td>
                                <td><?= $doctor["day"] ?></td>
                                <td><?= $doctor["start_time"] ?>-<?= $doctor["end_time"] ?></td>


                                <td><a href="../../Controller/doctor/editController.php?id=<?= $doctor["doctor_id"] ?>">Edit</a> </td>
                                <td><a href="../../Controller/doctor/deleteController.php?id=<?= $doctor["doctor_id"] ?>">delete</a></td>


                            </tr>
                        <?php } ?>



                    </tbody>
                </table>
            </div>

        </div>



    </div>



</body>

</html>