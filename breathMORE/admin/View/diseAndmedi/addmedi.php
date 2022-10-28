<?php

include "../../Controller/diseAndmedi/dmlistController.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Medicine & Pharmacy</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/dm.css">


</head>

<body>
    <div class="container-fluid">
        <!-- <div class="d-flex d-lg-flex justify-content-center align-items-center mt-5"> -->

        <form action="../../Controller/diseAndmedi/dmAddController.php" method="post">

            <div class="row justify-content-center  ">
                <div class="col col-lg-auto ">
                    <h3 class="m-5">Add Diseases and Medicines</h3>
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


        <div class="row justify-content-center align-items-center">

            <div class="col-7 mb-3 ">

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
                        <?php foreach ($dAndMList as $key => $dandM) { ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $dandM["disease_names"] ?></td>
                                <td><?= $dandM["medicine_names"] ?></td>

                                <td>
                                    <a href=" ../../Controller/diseAndmedi/dmEditController.php?id=<?= $dandM["id"] ?>">Edit</a>

                                    &nbsp;&nbsp;

                                    <a href=" ../../Controller/diseAndmedi/dmDelController.php?id=<?= $dandM["id"] ?>">DELETE</a>
                                </td>


                            </tr>

                        <?php } ?>
                    </tbody>
                </table>



            </div>
        </div>

    </div>
</body>

</html>