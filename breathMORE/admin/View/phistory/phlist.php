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
    <link rel="stylesheet" href="../doctor/docAdd.css">
    <link rel="stylesheet" href="../common/css/adminNavbar.css" <?php time() ?>>
</head>

<body>

    <div class="mx-5 d-flex justify-content-center align-items-center flex-column">
        <h3 class="header title my-5">Patient History Lists</h3>


        <table class="table">
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
                <?php $count = ($page * $rowLimit) - ($rowLimit - 1); ?>
                <?php foreach ($patientLists  as $key => $plist) { ?>
                    <tr>
                        <td><?= $count++; ?></td>

                        <td><?= $plist["write_date"] ?></td>
                        <td><?= $plist["patient_id"] ?></td>
                        <td><?= $plist["doctor_name"] ?></td>
                        <td><?= $plist["doctor_note"] ?></td>
                        <td><?= $plist["center"] ?></td>
                    </tr>

                <?php } ?>
            </tbody>


        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item <?php if ($page <= 1) {
                                            echo "disabled";
                                        } ?>">
                    <a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>


                <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                    <li class="page-item 
                            <?php
                            if ($page == $i) {
                                echo "active";
                            }
                            ?>
                            "><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li><?php } ?>

                <li class="page-item 
                        <?php if ($page >= $totalPages) {
                            echo "disabled";
                        } ?>">
                    <a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>

        <a href="./phadd.php"><button type="button" class="btn  submit-button   m-5 float-lg-end float-sm-end float-md-end" data-mdb-ripple-color="dark">ADD patient Info</button></a>


        <!-- <div class="container-fluid d-flex justify-content-end">
            <a href="./phadd.php">
                <button type="button" class="btn submit-button m-5 float-lg-end float-sm-end float-md-end" data-mdb-ripple-color="dark">ADD patient Info</button>
            </a>

        </div> -->








    </div>
</body>

</html>