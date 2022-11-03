<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor List</title>

    <?php

    session_start();
    include "../../../patient/Controller/common/aChColorTxtController.php";
    include "../../Controller/doctor/listController.php";

    include "../../Controller/doctor/aDocCountListController.php";

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

    ?>

    <link rel="stylesheet" href="../common/css/style.css">
    <link rel="stylesheet" href="../common/css/adminNavbar.css" />


    <script src="./js/jquery3.6.0.js" defer></script>
    <script src="./js/appointmentCount.js" defer></script>
    <script src="./js/doctorsearch.js" <?= time() ?> defer></script>

</head>

<body>

    <div class="mx-5 d-flex justify-content-center align-items-center flex-column">
        <h3 class="header my-5"> Doctor Lists</h3>

        <?php if (count($docCountLists) != 0) { ?> <table class="table mb-3">
                <thead class="thead">
                    <tr>
                        <th>No</th>
                        <th scope="col" colspan="2">Doctor Name</th>
                        <th scope="col" colspan="2">Center</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $noCount = 0;
                    //    print_r($docCountLists);
                    foreach ($docCountLists as $docCountList) { ?>
                        <tr>
                            <td><?= ++$noCount; ?></td>
                            <td colspan="2">
                                <input type="hidden" name="docId" class="doctorId" value="<?= $docCountList['doc_id'] ?>" />
                                <?= $docCountList["doctor_name"] ?>
                            </td>
                            <td colspan="2"><?= $docCountList["center"] ?></td>
                        </tr>
                        <tr>

                        <th scope="col">Alert:</th>
                        <td>
                            <span id="totalACount" class="text-danger">       
                            You can only change between 1 and 5 to update Appointments for each Doctor.
                            </span>
                        </td><?php } ?>
                    

                        <th scope="col">Update Appointment</th>
                        <td>
                            <div class="form-outline">
                                <input type="number" id="typeCount" class="form-control" value="" />
                            </div>
                        </td>
                        <td>
                            <a href="#" id="docSubmitCount" class="btn btn-purple">
                                Update
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>



            <nav aria-label="Page navigation example" class="mb-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item <?php if ($dpage <= 1) {
                                                echo "disabled";
                                            } ?>">
                        <a class="page-link" href="?dpage=<?= $dpage - 1 ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>


                    <?php for ($i = 1; $i <= $dtotalPages; $i++) { ?>
                        <li class="page-item 
                            <?php
                            if ($dpage == $i) {
                                echo "active";
                            }
                            ?>
                            "><a class="page-link" href="?dpage=<?= $i ?>"><?= $i ?></a></li><?php } ?>

                    <li class="page-item 
                        <?php if ($dpage >= $dtotalPages) {
                            echo "disabled";
                        } ?>">
                        <a class="page-link" href="?dpage=<?= $dpage + 1 ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav> <?php } ?>



        <table class="table">
            <thead class="thead">
                <tr>
                    <th colspan="11">

                        <div class="input-group d-flex justify-content-center align-items-center flex-row">
                            <select class="selectBox form-select form-select-sm py-1" aria-label="select">
                                <option id="rname" value="name">With Name</option>
                                <option id="rcenter" value="center">With Center</option>
                                <option id="rphone" value="phone">With Ph.No</option>
                            </select>
                            <input type="text" name="docSearch" id="searchDoctext" class="inputBox form-control py-2 m-2" placeholder="Search With Category" />
                            <button type="button" class="btn btn-purple" id="searchBtn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="10" cy="10" r="7" />
                                    <line x1="21" y1="21" x2="15" y2="15" />
                                </svg>
                            </button>

                        </div>

                    </th>
                </tr>

                <tr>
                    <th scope="col" class="p-3">No.</th>
                    <th scope="col">Doctor_Name</th>
                    <th class="db" scope="col">Gender</th>
                    <th class="db" scope="col">Sama</th>
                    <th class="db" scope="col">Bachelar</th>
                    <th scope="col">Center</th>
                    <th scope="col">PhoneNo</th>
                    <th class="db" scope="col">Duty Day</th>
                    <th class="db" scope="col">Duty Time</th>
                    <th class="db" colspan="2" scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="searchresult">
                <?php $count = ($page * $rowLimit) - ($rowLimit - 1); ?>
                <?php foreach ($doctorList as $key => $doctor) { ?>
                    <tr>
                        <td><?= $count++; ?></td>
                        <td>Dr.<?= $doctor["doctor_name"] ?></td>
                        <td class="db"><?php
                                        if ($doctor["doctor_gender"] == 0) {
                                            echo "Male";
                                        } else {
                                            echo "Female";
                                        }

                                        ?></td>
                        <td class="db"><?= $doctor["doctor_sama"] ?></td>
                        <td class="db"><?= $doctor["doctor_bachelar"] ?></td>
                        <td><?= $doctor["center"] ?></td>
                        <td><?= $doctor["ph_num"] ?></td>
                        <td class="db"><?= $doctor["day"] ?></td>
                        <td class="db"><?= $doctor["start_time"] ?>-<?= $doctor["end_time"] ?></td>
                        <td><a href="../../Controller/doctor/editController.php?id=<?= $doctor["doctor_id"] ?>">
                                <i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href="../../Controller/doctor/deleteController.php?id=<?= $doctor["doctor_id"] ?>"><i class="fa-solid fa-trash-can"></i></a></td>

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

        <a href="./add.php"> <input class="btn btn-purple mt-3 mb-5 
                float-lg-end float-sm-end float-md-end" type="submit" value="ADD Doctor"></a>

    </div>
</body>

</html>