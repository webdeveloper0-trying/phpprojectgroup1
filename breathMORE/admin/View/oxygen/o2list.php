<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O2Lists</title>

    <?php

    session_start();
    include "../../../patient/Controller/common/aChColorTxtController.php";
    include "../../Controller/oxygen/o2listController.php";


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

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
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
        <h3 class="header title my-5">Total Oxygen Lists</h3>


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
                <?php $count = ($page * $rowLimit) - ($rowLimit - 1); ?>
                <?php foreach ($oxygenList as $key => $oxygen) { ?>
                    <tr>
                        <th scope="row"><?= $count++; ?></th>
                        <td><?= $oxygen["date"] ?></td>
                        <td><?= $oxygen["name"] ?></td>
                        <td><?= $oxygen["ph_num"] ?></td>
                        <td><?= $oxygen["address"] ?></td>
                        <td><?= $oxygen["type_of_service"] ?></td>


                        <td><a href=" ../../Controller/oxygen/o2editController.php?id=<?= $oxygen["id"] ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>

                        <td><a href=" ../../Controller/oxygen/o2deleteController.php?id=<?= $oxygen["id"] ?>"><i class="fa-solid fa-trash-can"></i></a></td>
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
        <a href="./o2add.php"><button type="button" class="btn  submit-button   m-5 float-lg-end float-sm-end float-md-end" data-mdb-ripple-color="dark">Add Oxygen</button></a>

    </div>


</body>

</html>