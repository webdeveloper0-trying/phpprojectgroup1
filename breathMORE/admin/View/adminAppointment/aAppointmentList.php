<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppointmentList</title>

    <?php
    session_start();


    if (isset($_POST['adminname']) && isset($_POST['password'])) {
        $adminname = $_POST['adminname'];
        $password = $_POST['password'];
        $_SESSION["adminname"] = $adminname;
    }


    include "../../../patient/Controller/common/aChColorTxtController.php";
    include "../../Controller/adminAppointment/aAppointmentListController.php";
    if ($_SESSION["ismainadmin"]) {
        include "../common/adminNavbar.php";
    } else {
        include "../common/adminSubNavbar.php";
    }




    ?>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?=time()" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css?=time()" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap?=time()" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css?=time()" rel="stylesheet" />

    <!-- custom css files 2 -->
    <link rel="stylesheet" href="../common/css/style.css" <?php time(); ?>>
    <link rel="stylesheet" href="../common/css/adminNavbar.css" <?php time(); ?>>


    <script src="https://cdn.jsdelivr.net/npm/chart.js" defer></script>
</head>

<body>
    <div class="col col-10 col-md-auto d-flex justify-content-center align-items-center flex-column">
        <h3 class="h3 header my-5">Total Appointment List</h3>

        <table class="table">
            <thead class="thead">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Patient Name</th>
                    <th scope="col">Patient Gender</th>
                    <th scope="col">Patient Ph.NO</th>
                    <th scope="col">Patient Email</th>
                    <th scope="col">Patient Age</th>
                    <th scope="col">Patient Address</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Appointment Day</th>
                    <th scope="col">Appointment Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = ($page * $rowLimit) - ($rowLimit - 1);
                $id = 0;
                foreach ($appointments1 as $appointment) { ?>
                    <tr>
                        <th scope="row"><?= $count++ ?></th>
                        <td><?= $appointment["user_name"] ?></td>
                        <td><?= $appointment["gender"] ?></td>
                        <td><?= $appointment["ph_num"] ?></td>
                        <td><?= $appointment["user_email"] ?></td>
                        <td><?= $appointment["age"] ?></td>
                        <td><?= $appointment["address"] ?></td>
                        <td><?= $appointments2[$id]["doctor_name"] ?></td>
                        <?php $id++; ?>
                        <td><?= $appointment["date"] ?></td>
                        <td><?= $appointment["time"] ?></td>
                    </tr><?php } ?>


            </tbody>
        </table>

        <nav aria-label="Page navigation example" class="mb-5">
            <ul class="pagination">
                <li class="page-item 
                    <?php if ($page <= 1) {
                        echo "disabled";
                    }  ?>
                    ">
                    <a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                        <span aria-hidden="true">Previous</span>
                    </a>
                </li>

                <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                    <li class="page-item 
                        <?php
                        if ($page == $i) {
                            echo "active";
                        }
                        ?>
                        "><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                <?php } ?>


                <li class="page-item 
                     <?php if ($page >= $totalPages) {
                            echo "disabled";
                        }  ?>">
                    <a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next">
                        <span aria-hidden="true">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</body>

</html>