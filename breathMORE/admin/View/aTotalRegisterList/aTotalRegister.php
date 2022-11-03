<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Register List</title>

    <?php

    session_start();
    include "../../../patient/Controller/common/aChColorTxtController.php";

    include "../../Controller/aUserTotalRegister/aURegisterListController.php";

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

    <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />

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
        <h3 class="h3 header my-5">Total Registration List</h3>
        <table class="table">
            <thead class="thead">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ph.NO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = ($page * $rowLimit) - ($rowLimit - 1);
                $id = 0;
                foreach ($regLists as $regList) { ?>
                    <tr>
                        <th scope="row"><?= $count++ ?></th>
                        <td><?= $regList["user_name"] ?></td>
                        <td><?= $regList["gender"] ?></td>
                        <td><?= $regList["age"] ?></td>
                        <td><?= $regList["user_email"] ?></td>
                        <td><?= $regList["ph_num"] ?></td>
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