<?php
session_start();
$shop = $_SESSION["shopInfos"];
echo "<pre>";
print_r($shop);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pharmacy Edit</title>

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

    <!-- custom css -->
    <link rel="stylesheet" href="../css/dm.css">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <h3 class="h3 header my-5">Edit Pharmacy</h3>
        <form class="form p-3" action="../../Controller/pharmacy/upShopController.php" method="POST">
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="upharmacyName" value="<?php echo $shop[0]["pharmacy_name"] ?>" id="Pharmacy Name" class="form-control" />
                        <label class="form-label" for="Pharmacy Name">Pharmacy Name</label>
                    </div>
                </div>
                <div class="col">

                    <select class="form-control" name="upharmacyPhoto" id="pharmacyPhoto" aria-label="Default select example">
                        <option value="ph1.jpg" <?php if ($shop[0]['pharmacy_photo'] == 'ph1.jpg') {
                                                    echo "selected";
                                                } ?>>Pharmacy Image1</option>
                        <option value="ph2.jpg" <?php if ($shop[0]['pharmacy_photo'] == 'ph2.jpg') {
                                                    echo "selected";
                                                } ?>>Pharmacy Image2</option>
                        <option value="ph3.jpg" <?php if ($shop[0]['pharmacy_photo'] == 'ph3.jpg') {
                                                    echo "selected";
                                                } ?>>Pharmacy Image3</option>
                        <option value="ph4.jpg" <?php if ($shop[0]['pharmacy_photo'] == 'ph4.jpg') {
                                                    echo "selected";
                                                } ?>>Pharmacy Image4</option>
                        <option value="ph5.jpg" <?php if ($shop[0]['pharmacy_photo'] == 'ph5.jpg') {
                                                    echo "selected";
                                                } ?>>Pharmacy Image5</option>


                    </select>




                </div>


            </div>



            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" name="upharmacyAdd" value="<?php echo $shop[0]["pharmacy_address"] ?>" id="pharmacyAdd" class="form-control" />
                <label class="form-label" for="pharmacyAdd">Address</label>
            </div>




            <!-- Message input -->
            <div class="form-outline mb-4">

                <input type="text" name="uphNum" id="phNum" value="<?php echo $shop[0]["ph_num"] ?>" class="form-control" />
                <label class="form-label" for="phNum">Phone No.</label>
            </div>

            <div class="form-outline mb-4">

                <input type="text" class="form-control" value="<?php echo $shop[0]["township"] ?>" name="utownship" id="township" />
                <label class="form-label" for="township">Township</label>
            </div>
            <div class="form-outline mb-4">

                <input type="text" class="form-control" value="<?php echo $shop[0]["id"] ?>" name="upid" id="" />

            </div>



            <div class="d-flex justify-content-center">
                <button class="btn float-end col-lg-5 submit-button  col btn-secondary " type="submit" name="upPharmacy">Submit</button>
            </div>

        </form>
    </div>
</body>

</html>