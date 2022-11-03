<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy ADD</title>

    <?php
    session_start();
    include "../../../patient/Controller/common/aChColorTxtController.php";

    ?>
    <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />

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
    <link rel="stylesheet" href="../doctor/docAdd.css">
    <link rel="stylesheet" href="../common/css/style.css">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <h3 class="h3 header my-5 title">Pharmacy ADD</h3>
        <form class="form p-3" action="../../Controller/pharmacy/addPharmacyController.php" method="POST">
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="pharmacyName" id="Pharmacy Name" class="form-control" />
                        <label class="form-label" for="Pharmacy Name">Pharmacy Name</label>
                    </div>
                </div>
                <div class="col">
                    <!-- <div class="form-outline"> -->
                    <!-- <input type="text" name="pharmacyPhoto" id="pharmacyPhoto" class="form-control" /> -->
                    <!-- <label class="form-label" for="pharmacyPhoto">pharmacyPhoto</label> -->
                    <select class="form-control" name="pharmacyPhoto" id="pharmacyPhoto" aria-label="Default select example">
                        <option value="ph1.jpg" selected>Pharmacy Image1</option>
                        <option value="ph2.jpg">Pharmacy Image2</option>
                        <option value="ph3.jpg">Pharmacy Image3</option>
                        <option value="ph4.jpg">Pharmacy Image4</option>
                        <option value="ph5.jpg">Pharmacy Image5</option>

                        <option value="ph6.jpg">Pharmacy Image6</option>
                        <option value="ph7.jpg">Pharmacy Image7</option>
                        <option value="ph8.jpg">Pharmacy Image8</option>
                        <option value="ph9.jpg">Pharmacy Image9</option>
                        <option value="ph10.jpg">Pharmacy Image10</option>


                    </select>



                    <!-- </div> -->
                </div>


            </div>



            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" name="pharmacyAdd" id="pharmacyAdd" class="form-control" />
                <label class="form-label" for="pharmacyAdd">Address</label>
            </div>




            <!-- Message input -->
            <div class="form-outline mb-4">

                <input type="text" name="phNum" id="phNum" class="form-control" />
                <label class="form-label" for="phNum">Phone No.</label>
            </div>

            <div class="col mb-4">

                <!-- <input type="text" class="form-control" name="township" id="township" />
                <label class="form-label" for="township">Township</label> -->


                <select class="form-control" id="township" name="township" aria-label="Default select example">
                    <option>Township</option>
                    <option value="Mingaladon">Mingaladon</option>
                    <option value="Insein">Insein</option>
                    <option value="Hlaingtharyar">Hlaingtharyar</option>
                    <option value="Thanlyin">Thanlyin</option>
                    <option value="Latha">Latha</option>
                    <option value="Lanmadaw">Lanmadaw</option>
                    <option value="Pabedan">Pabedan</option>
                    <option value="Dagon">Dagon</option>
                    <option value="Ahlone">Ahlone</option>
                    <option value="Kyeemyindaing">Kyeemyindaing</option>
                    <option value="SanChaung">SanChaung</option>
                    <option value="South Okkalapa">South Okkalapa</option>
                </select>
            </div>



            <div class="d-flex justify-content-center">
                <button class="btn float-end col-lg-5 submit-button  col btn-secondary " type="submit" name="addPharmacy">Submit</button>
            </div>

        </form>
    </div>
</body>

</html>