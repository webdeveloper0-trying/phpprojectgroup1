<?php

include "../../Controller/pharmacy/listPharmacyController.php";

// echo "<pre>";
// print_r($shopLists);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListsPharmacy</title>

    <!-- Bootstrap css1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrap js1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?=time()" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css?=time()" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap?=time()" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css?=time()" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js" defer></script>

    <link rel="stylesheet" href="../doctor/docAdd.css">



</head>

<body class="container_fluid">



    <h3 class="h3 text-center mt-5">Pharmacy Lists</h3>

    <div class="d-flex justify-content-center p-5">


        <table class="table mt-5 align-middle table-bordered  ">
            <thead class="">
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Ph No.</th>
                    <th>Township</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($shopLists as $shop) { ?>
                    <tr>
                        <td>1</td>
                        <td>
                            <!-- <div class="d-flex align-items-center"> -->
                            <img src="./pharmacyImg/<?= $shop["pharmacy_photo"] ?>" alt="" style="width:50px; height: 50px" class="blogImg rounded-circle" />
                            <!-- </div> -->
                        </td>
                        <td><?= $shop["pharmacy_name"] ?></td>
                        <td><?= $shop["pharmacy_address"] ?>
                        <td><?= $shop["ph_num"] ?></td>
                        <td><?= $shop["township"] ?></td>
                        <td>
                            <a href="../../Controller/pharmacy/editPshopController.php?id=<?= $shop["id"] ?>">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            &nbsp; &nbsp;
                            <a href=" ../../Controller/pharmacy/deleteShopController.php?id=<?= $shop["id"] ?>">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>

                        </td>
                    </tr>
                <?php } ?>

            </tbody>


        </table>

        <!-- Submit button -->


    </div>

    <a href="./addPharmacy.php"><button type="button" class="btn btn-outline-success  m-5 float-lg-end float-sm-end float-md-end" data-mdb-ripple-color="dark">Add Pharmacy</button></a>





</body>

</html>