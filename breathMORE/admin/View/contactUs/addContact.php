<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact us</title>
    <?php

    session_start();
    include "../../../patient/Controller/common/aChColorTxtController.php";

    include "../../Controller/contact/conListController.php";

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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../doctor/docAdd.css">

    <link rel="stylesheet" href="../common/css/style.css">

    <link rel="stylesheet" href="../common/css/adminNavbar.css" />

</head>

<body>
    <div class="container-fluid">

        <form action="../../Controller/contact/conAddController.php" method="post">
            <div class="row justify-content-center align-items-center m-5">

                <div class="row justify-content-center  ">
                    <div class="col col-lg-auto ">
                        <h3 class="m-5 title">Add Contact Us</h3>
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



        <div class="row justify-content-center">

            <div class="col-lg-auto mb-3 ">

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
                        <?php 
                        $count = 0;
                        foreach ($conList as $key => $contact) { ?>
                            <tr>
                                <th scope="row"><?= ++$count; ?></th>
                                <td class="text-wrap"><?= $contact["website_phno"] ?></td>
                                <td class="text-wrap"><?= $contact["facebook"] ?></td>
                                <td class="text-wrap"><?= $contact["youtube"] ?></td>
                                <td class="text-wrap"><?= $contact["telegram"] ?></td>

                                <td>
                                    <!-- <a href=" ../../Controller/contact/conEditController.php?id=<?= $contact["id"] ?>"><i class="fa-solid fa-pen-to-square"></i></a> -->

                                    <!-- &nbsp;&nbsp; -->

                                    <a href=" ../../Controller/contact/conDeleteController.php?id=<?= $contact["id"] ?>"><i class="fa-solid fa-trash-can"></i></a>
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