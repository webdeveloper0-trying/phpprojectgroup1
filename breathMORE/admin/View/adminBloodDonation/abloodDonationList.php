<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation</title>

    <?php

    session_start();
    include "../../../patient/Controller/common/aChColorTxtController.php";

    include "../../Controller/adminBloodDonation/aBloodDonationController.php";

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?=time()" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css?=time()" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap?=time()" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css?=time()" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js?=time()"></script>

    <!-- navbar custom css1 -->
    <link rel="stylesheet" href="../common/css/adminNavbar.css">


    <!-- custom css files 2 -->
    <link rel="stylesheet" href="../common/css/style.css">
    <link rel="stylesheet" href="./css/aBloodDonationList.css">

    <!-- jq 1 -->
    <script src="../common/jq/jquery-3.6.0.min.js" <?php time() ?> defer></script>

    <!-- custom js file -->
    <script src="./js/aBloodDonation.js" <?php time() ?> defer></script>


</head>

<body>


    <div class="d-flex align-items-center flex-column">
        <h3 class="header h3 my-5">Blood Donation List</h3>

        <table class="table">
            <thead class="thead">
                <tr>
                    <th colspan="9">

                        <div class="searchbox input-group d-flex justify-content-center align-items-center flex-row">
                            <input type="search" class="form-control rounded" id="searchBloodType" placeholder="Search By BloodType" aria-label="Search" aria-describedby="search-addon" />
                            <button type="button" class="btn btn-green" id="searchBloodIcon">
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
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ph.No</th>
                    <th scope="col">Dob</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Blood Type</th>
                    <th scope="col">RhD</th>
                </tr>
            </thead>
            <tbody id="searchResultByBlood">


                <?php
                $count = 0;
                foreach ($donatorInfos as $donatorInfo) {
                ?>
                    <tr>
                        <th scope='row'>1</th>
                        <td><?= $donatorInfo["user_name"] ?></td>
                        <td><?= $donatorInfo["user_email"] ?></td>
                        <td><?= $donatorInfo["ph_num"] ?></td>
                        <td><?= $donatorInfo["date_of_birth"] ?></td>
                        <td><?= $donatorInfo["gender"] ?></td>
                        <td><?= $donations[$count]["blood_type"] ?></td>
                        <td><?= $donations[$count++]["rhd"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>