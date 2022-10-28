<?php

session_start();

$gotfaq = $_SESSION["faqRes"];

// echo "<pre>";
// print_r($gotfaq);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add Frequently Asked Questions</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/dm.css">


</head>

<body>
    <div class="container-fluid">
        <!-- <div class="d-flex d-lg-flex justify-content-center align-items-center mt-5"> -->

        <form action="../../Controller/faq/faqUpdateController.php" method="post">

            <div class="row justify-content-center  ">
                <div class="col col-lg-auto ">
                    <h3 class="m-5 text-center my-header ">Edit Frequently Asked Questions</h3>
                </div>

            </div>


            <div class="row justify-content-center">

                <div class="col-4 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Question</label>
                    <input type="text" name="upque" value="<?php echo $gotfaq[0]["question"] ?>" class="form-control" id="exampleFormControlInput1" placeholder="Name" cols="30" rows="5">

                    <!-- <textarea name="upque" class="form-control" value="<?php echo $gotfaq[0]["question"] ?>" id="exampleFormControlInput1" cols="30" rows="5"></textarea> -->

                </div>

            </div>


            <div class="row justify-content-center">

                <div class="col-4 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Answer</label>
                    <textarea name="upans" value="<?php echo $gotfaq[0]["answer"] ?>" id="exampleFormControlInput1" class="form-control" cols="30" rows="5"></textarea>

                    <!-- <input type="text" name="ans" class="form-control" id="exampleFormControlInput1" placeholder="Name"> -->

                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-4 mb-3">

                    <input type="text" name="upid" value="<?php echo $gotfaq[0]["id"] ?>" class="form-control" id="exampleFormControlInput1" placeholder="id">

                </div>
            </div>


            <div class="row  justify-content-center ">

                <div class="col-4 mb-3 align-self-end">
                    <button class="btn  float-end col-lg-5 submit-button mysubmit col btn-secondary " type="submit" name="upFaq">Update</button>
                </div>
            </div>
        </form>





    </div>
    </div>

    </div>
</body>

</html>