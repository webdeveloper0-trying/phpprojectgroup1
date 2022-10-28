<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddOxygen</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="../css/o2.css" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <!-- <div class="d-flex d-lg-flex justify-content-center align-items-center mt-5"> -->

        <form action="../../Controller/oxygen/o2addController.php" method="post">

            <div class="row justify-content-center  ">
                <div class="col col-lg-auto ">
                    <h3 class="m-5">Add Oxygen</h3>
                </div>

            </div>


            <div class="row justify-content-center">

                <div class="col-4 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input id="" type="text" name="oname" class="form-control" id="exampleFormControlInput1" placeholder="Name">

                </div>
                <div class="col-4 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date</label>

                    <input type="date" name="odate" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>


            </div>




            <div class="row justify-content-center">
                <div class="col-4 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                    <input type="text" name="ophnum" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="col-4 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Available Type</label>
                    <input type="text" name="otype" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>


            </div>



            <div class="row justify-content-center">

                <div class="col-4 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <textarea name="oaddre" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                </div>
                <div class="col-4">

                </div>


            </div>



            <div class="row  justify-content-center ">

                <div class="col-4 mb-3 align-self-end">
                    <button class="btn float-end col-lg-5 submit-button col btn-secondary " type="submit" name="addOxygen">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>