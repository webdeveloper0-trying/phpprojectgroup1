<?php
// echo "OK";
// include "../../Controller/phistory/phaddController.php";

include "../../Controller/phistory/phlistController.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient History Lists</title>

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

    <link rel="stylesheet" href="../doctor/docAdd.css">
    <link rel="stylesheet" href="../common/css/adminNavbar.css">
</head>

<body class="d-flex justify-content-center">

    <div class=" container-fluid">


        <div class="row justify-content-center   myheader">
            <div class="col col-lg-auto ">
                <h3 class="m-5"> Patient History Records</h3>
            </div>
        </div>

        <div class="col col-md-auto col-lg-auto col-sm-auto ">

            <table class="table align-middle table-bordered text-center ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th class="db" scope="col">Date</th>
                        <th scope="col">PatientID</th>
                        <th class="db" scope="col">DoctorName</th>
                        <th scope="col">DocNote</th>
                        <th class="db" scope="col">Center</th>

                        <!-- <th scope="col" colspan="2">Action</th> -->

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($patientLists  as $key => $plist) { ?>
                        <tr>
                            <th scope="row">1</th>
                            <td class="db"><?= $plist["write_date"] ?></td>
                            <td><?= $plist["patient_id"] ?></td>
                            <td class="db"><?= $plist["doctor_name"] ?></td>
                            <td><?= $plist["doctor_note"] ?></td>
                            <td class="db"><?= $plist["center"] ?></td>
                            <!-- 
                    <td><a href=" ../../Controller/labreport/edit_labController.php?id=<?= $lab["id"] ?>">Edit</a>
                        &nbsp;&nbsp;
                        <a href=" ../../Controller/labreport/del_labController.php?id=<?= $lab["id"] ?>">DELETE</a>
                    </td> -->


                        </tr>

                    <?php } ?>
                </tbody>


            </table>

            <a href="./phadd.php"><button type="button" class="btn submit-button m-5 float-lg-end float-sm-end float-md-end" data-mdb-ripple-color="dark">ADD patient Info</button></a>
        </div>

    </div>
</body>

</html>