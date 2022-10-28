<?php
// echo "OK";
include "../../Controller/oxygen/o2listController.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O2Lists</title>
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

<body class="d-flex justify-content-center align-items-center flex-column">
    <div class="d-flex justify-content-center align-items-center flex-column">

        <a href="./o2add.php"><button type="button" class="btn btn-outline-success  m-5 float-lg-end float-sm-end float-md-end" data-mdb-ripple-color="dark">Add Oxygen</button></a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Date</th>
                    <th scope="col">Name</th>
                    <th scope="col">Ph.No</th>
                    <th scope="col">Address</th>
                    <th scope="col">Service Type</th>
                    <th scope="col" colspan="2">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($oxygenList as $key => $oxygen) { ?>
                    <tr>
                        <th scope="row">1</th>
                        <td><?= $oxygen["date"] ?></td>
                        <td><?= $oxygen["name"] ?></td>
                        <td><?= $oxygen["ph_num"] ?></td>
                        <td><?= $oxygen["address"] ?></td>
                        <td><?= $oxygen["type_of_service"] ?></td>


                        <td><a href=" ../../Controller/oxygen/o2editController.php?id=<?= $oxygen["id"] ?>">Edit</a></td>

                        <td><a href=" ../../Controller/oxygen/o2deleteController.php?id=<?= $oxygen["id"] ?>">DELETE</a></td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>

    </div>


</body>

</html>