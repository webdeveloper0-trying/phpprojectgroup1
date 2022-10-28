<?php

include "../common/adminNavbar.php";
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

    <link rel="stylesheet" href="../common/css/style.css">
    <link rel="stylesheet" href="../common/css/adminNavbar.css" <?php time() ?>>
</head>

<body>

    <div class="mx-5">
        <h3 class="header my-5 text-center">Patient History</h3>


        <table class="table  justify-content-center  table-striped">
            <thead class="thead">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Date</th>
                    <th scope="col">PatientID</th>
                    <th scope="col">DoctorName</th>
                    <th scope="col">DocNote</th>
                    <th scope="col">Center</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($patientLists  as $key => $plist) { ?>
                    <tr>
                        <th scope="row">1</th>

                        <td><?= $plist["write_date"] ?></td>
                        <td><?= $plist["patient_id"] ?></td>
                        <td><?= $plist["doctor_name"] ?></td>
                        <td><?= $plist["doctor_note"] ?></td>
                        <td><?= $plist["center"] ?></td>
                    </tr>

                <?php } ?>
            </tbody>


        </table>


        <div class="container-fluid d-flex justify-content-end">
            <a href="./phadd.php">
                <button type="button" class="btn btn-purple  m-5 float-lg-end float-sm-end float-md-end" data-mdb-ripple-color="dark">ADD patient Info</button>
            </a>

        </div>








    </div>
</body>

</html>