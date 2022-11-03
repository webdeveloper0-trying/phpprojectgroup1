<?php


session_start();
include "../../../patient/Controller/common/aChColorTxtController.php";
include "../../Controller/labreport/list_labController.php";


if (isset($_POST['adminname']) && isset($_POST['password'])) {
    $adminname = $_POST['adminname'];
    $password = $_POST['password'];
    $_SESSION["adminname"] = $adminname;
}


if ($_SESSION["ismainadmin"]) {
    include "../common/adminNavbar.php";
} else {
    include "../common/adminSubNavbar.php";
}
if (!isset($_SESSION["adminname"])) {
    header("Location: ../adminRegisterLogin/aLogin.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabLists</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" /> -->
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>


    <link rel="stylesheet" href="../doctor/docAdd.css">
    <link rel="stylesheet" href="../common/css/style.css">
    <link rel="stylesheet" href="../common/css/adminNavbar.css" />

</head>

<body>

    <div class="mx-5 d-flex justify-content-center align-items-center flex-column">
        <h3 class="header title my-5">Total Lab Lists</h3>



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
                <?php $count = ($page * $rowLimit) - ($rowLimit - 1); ?>
                <?php foreach ($labList  as $key => $lab) { ?>
                    <tr>
                        <td><?= $count++; ?></td>

                        <td><?= $lab["result_date"] ?></td>
                        <td><?= $lab["patient_id"] ?></td>
                        <td><?= $lab["test"] ?></td>


                        <td><a href=" ../../Controller/labreport/edit_labController.php?id=<?= $lab["id"] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            &nbsp;&nbsp;
                            <a href=" ../../Controller/labreport/del_labController.php?id=<?= $lab["id"] ?>"><i class="fa-solid fa-trash-can"></i></a>
                        </td>


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
        <a href="./addlab.php"><button type="button" class="btn  submit-button   m-5 float-lg-end float-sm-end float-md-end" data-mdb-ripple-color="dark">Add Lab Report</button></a>

    </div>


</body>

</html>