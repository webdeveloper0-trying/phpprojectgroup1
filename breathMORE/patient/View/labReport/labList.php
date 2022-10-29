<?php
// echo "OK";
include "../../Controller/labReport/labreportController.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabLists</title>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

</head>

<body>

    <a href="./addlab.php"><button type="button" class="btn btn-outline-success  m-5 float-lg-end float-sm-end float-md-end" data-mdb-ripple-color="dark">Lab Infos</button></a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Date</th>
                <th scope="col">PatientID</th>

                <th scope="col">Test</th>

                <th scope="col" colspan="2">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($labList  as $key => $lab) { ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $lab["result_date"] ?></td>
                    <td><?= $lab["patient_id"] ?></td>
                    <td><?= $lab["test"] ?></td>


                    <td><a href=" ../../Controller/labreport/edit_labController.php?id=<?= $lab["id"] ?>">Edit</a>
                        &nbsp;&nbsp;
                        <a href=" ../../Controller/labreport/del_labController.php?id=<?= $lab["id"] ?>">DELETE</a>
                    </td>


                </tr>

            <?php } ?>
        </tbody>
    </table>



</body>

</html>