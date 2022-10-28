<?php

include "../../Controller/contact/conListController.php";
// echo "<pre>";
// print_r($conList);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact us</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/dm.css">
</head>

<body class="d-flex justify-content-center">
    <div class="container-fluid">

        <form action="../../Controller/contact/conAddController.php" method="post">
            <div class="row justify-content-center align-items-center m-5">

                <div class="row justify-content-center  ">
                    <div class="col col-lg-auto ">
                        <h3 class="m-5">Add Contact Us</h3>
                    </div>

                </div>
                <div class="col-lg-5 col-sm-3 mb-3 ">

                    <label for="exampleFormControlInput1" class="form-label">24/7 Phone Number</label>

                    <input id="" type="text" name="phnum" class="form-control" id="exampleFormControlInput1" placeholder="phNo.">


                </div>



                <div class="col-lg-5 col-sm-3 mb-3 ">

                    <label for="exampleFormControlInput1" class="form-label">FaceBook</label>

                    <input id="" type="text" name="fb" class="form-control" id="exampleFormControlInput1" placeholder="fblink">


                </div>


                <div class="col-lg-5 col-sm-3 mb-3 ">

                    <label for="exampleFormControlInput1" class="form-label">Youtube</label>

                    <input id="" type="text" name="yt" class="form-control" id="exampleFormControlInput1" placeholder="ytlink">


                </div>

                <div class="col-lg-5 col-sm-3 mb-3 ">

                    <label for="exampleFormControlInput1" class="form-label">Telegram</label>

                    <input id="" type="text" name="tele" class="form-control" id="exampleFormControlInput1" placeholder="teleLink">


                </div>
                <!-- <div class="row  justify-content-center "> -->

                <div class="col-lg-5 col-sm-3 align-self-end">
                    <button class="btn float-end col-lg-5 submit-button mysubmit col btn-secondary " type="submit" name="addContactUs">Submit</button>
                </div>
            </div>



        </form>



        <div class="row justify-content-center align-items-center">

            <div class="col-7 mb-3 ">

                <table class="table mytable table align-middle table-bordered text-center  ">
                    <thead class="mytable">
                        <tr>
                            <th scope="col">No</th>

                            <th scope="col">PhNo.</th>
                            <th scope="col">Facebook</th>
                            <th scope="col">Youtube</th>
                            <th scope="col">Telegram</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody class="my-word-break">
                        <?php foreach ($conList as $key => $contact) { ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $contact["website_phno"] ?></td>
                                <td><?= $contact["facebook"] ?></td>
                                <td><?= $contact["youtube"] ?></td>
                                <td><?= $contact["telegram"] ?></td>

                                <td>
                                    <a href=" ../../Controller/contact/conEditController.php?id=<?= $contact["id"] ?>">Edit</a>

                                    &nbsp;&nbsp;

                                    <a href=" ../../Controller/contact/conDeleteController.php?id=<?= $contact["id"] ?>">DELETE</a>
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