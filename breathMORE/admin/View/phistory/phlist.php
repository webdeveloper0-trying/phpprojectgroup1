<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient History Lists</title>

    <?php


    session_start();
    include "../../../patient/Controller/common/aChColorTxtController.php";
    include "../../Controller/phistory/phlistController.php";


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



    <link rel="stylesheet" href="../common/css/style.css">
    <link rel="stylesheet" href="../doctor/docAdd.css">
    <link rel="stylesheet" href="../common/css/adminNavbar.css" <?php time() ?>>


    <!-- js link -->
    <script src="../common/jq/jquery-3.6.0.min.js"></script>
    <script src="./pList.js" <?= time() ?> defer></script>

</head>

<body>

    <div class="mx-5 d-flex justify-content-center align-items-center flex-column">
        <h3 class="header title my-5">Patient History Lists</h3>


        <table class="table">
            <thead class="thead">
                <tr>
                <tr>
                    <th colspan="7">
                        <input id="searchpid" type="text" name="pid" class="form-control" id="exampleFormControlInput1" placeholder="">

                        <button class="btn" id="searchBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-search" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#f2f4f1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="7" r="4" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h1" />
                                <circle cx="16.5" cy="17.5" r="2.5" />
                                <path d="M18.5 19.5l2.5 2.5" />
                            </svg>
                        </button>
                    </th>
                </tr>

                <th scope="col">No</th>
                <th scope="col">Date</th>
                <th scope="col">PatientID</th>
                <th scope="col">DoctorName</th>
                <th scope="col">DocNote</th>
                <th scope="col">Center</th>
                </tr>
            </thead>


            <tbody id="searchresult">

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











    </div>
</body>

</html>