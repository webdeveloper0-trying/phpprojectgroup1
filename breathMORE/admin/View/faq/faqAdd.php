<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add Frequently Asked Questions</title>

    <?php

    session_start();
    include "../../../patient/Controller/common/aChColorTxtController.php";
    include "../../Controller/faq/faqListController.php";


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


        <form action="../../Controller/faq/faqAddController.php" method="post">

            <div class="row justify-content-center  ">
                <div class="col col-lg-auto ">
                    <h3 class="m-5 text-center title ">Add Frequently Asked Questions</h3>
                </div>

            </div>


            <div class="row justify-content-center">

                <div class="col-4 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Question</label>
                    <!-- <input type="text" name="que" class="form-control" id="exampleFormControlInput1" placeholder="Name"> -->

                    <textarea name="que" class="form-control" id="exampleFormControlInput1" cols="30" rows="5" required></textarea>

                </div>


            </div>


            <div class="row justify-content-center">

                <div class="col-4 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Answer</label>
                    <textarea name="ans" id="exampleFormControlInput1" class="form-control" cols="30" rows="5" required></textarea>

                    <!-- <input type="text" name="ans" class="form-control" id="exampleFormControlInput1" placeholder="Name"> -->

                </div>
            </div>

            <div class="row  justify-content-center ">

                <div class="col-4 mb-3 align-self-end">
                    <button class="btn  float-end col-lg-5 submit-button mysubmit col btn-secondary " type="submit" name="addFaq">Submit</button>
                </div>
            </div>
        </form>

        <div class="row justify-content-center">

            <div class="col-lg-auto mb-3  ">

                <table class="table mytable table align-middle table-bordered text-center ">
                    <thead>
                        <tr>
                            <th scope="col">No</th>

                            <th scope="col">Question</th>
                            <th scope="col">Answers</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = ($page * $rowLimit) - ($rowLimit - 1); ?>
                        <?php foreach ($faqlists as $key => $faq) { ?>
                            <tr>
                                <td><?= $count++; ?></td>
                                <td><?= $faq["question"] ?></td>
                                <td><?= $faq["answer"] ?></td>

                                <td>
                                    <a href=" ../../Controller/faq/faqEditController.php?id=<?= $faq["id"] ?>"><i class="fa-solid fa-pen-to-square"></i></a>

                                    &nbsp;&nbsp;

                                    <a href=" ../../Controller/faq/faqDeleteController.php?id=<?= $faq["id"] ?>"><i class="fa-solid fa-trash-can"></i></a>
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