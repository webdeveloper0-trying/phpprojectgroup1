<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Medicine & Pharmacy</title>

    <?php

    session_start();
    include "../../../patient/Controller/common/aChColorTxtController.php";

    include "../../Controller/diseAndmedi/dmlistController.php";

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

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="../doctor/docAdd.css">

    <link rel="stylesheet" href="../common/css/style.css">

    <link rel="stylesheet" href="../common/css/adminNavbar.css" />
    <!-- <link rel="stylesheet" href="./css/aDoctorlist.css" <?php time(); ?> /> -->


</head>

<body>
    <div class="container-fluid">


        <form action="../../Controller/diseAndmedi/dmAddController.php" method="post">

            <div class="row justify-content-center  ">
                <div class="col col-lg-auto ">
                    <h3 class="m-5 title">Add Diseases and Medicines</h3>
                </div>

            </div>


            <div class="row justify-content-center">

                <div class="col-4 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Disease</label>
                    <input id="" type="text" name="disname" class="form-control" id="exampleFormControlInput1" placeholder="Name">

                </div>


            </div>


            <div class="row justify-content-center">

                <div class="col-4 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Medicine</label>

                    <input id="" type="text" name="medname" class="form-control" id="exampleFormControlInput1" placeholder="Name">

                </div>
            </div>

            <div class="row  justify-content-center ">

                <div class="col-4 mb-3 align-self-end">
                    <button class="btn float-end col-lg-5 submit-button mysubmit col btn-secondary " type="submit" name="addDiseAndmedi">Submit</button>
                </div>
            </div>
        </form>


        <div class="row justify-content-center">

            <div class="col-lg-auto mb-3">

                <table class="table mytable table align-middle table-bordered text-center ">
                    <thead class="mytable">
                        <tr>
                            <th scope="col">No</th>

                            <th scope="col">Disease</th>
                            <th scope="col">Medicine</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = ($page * $rowLimit) - ($rowLimit - 1); ?>
                        <?php foreach ($dAndMList as $key => $dandM) { ?>
                            <tr>
                                <td><?= $count++; ?></td>
                                <td><?= $dandM["disease_names"] ?></td>
                                <td><?= $dandM["medicine_names"] ?></td>

                                <td>
                                    <a href=" ../../Controller/diseAndmedi/dmEditController.php?id=<?= $dandM["id"] ?>"><i class="fa-solid fa-pen-to-square"></i></a>

                                    &nbsp;&nbsp;

                                    <a href=" ../../Controller/diseAndmedi/dmDelController.php?id=<?= $dandM["id"] ?>"><i class="fa-solid fa-trash-can"></i></a>
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




            </div>
        </div>

    </div>

</body>

</html>