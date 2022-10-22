<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?=time()" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css?=time()" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap?=time()" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css?=time()" rel="stylesheet" />
    <!-- MDB JS1-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

    <link rel="stylesheet" href="../common/css/style.css" <?php time() ?>>
    <link rel="stylesheet" href="./css/adminProfile.css" <?php time() ?>>

    <!-- picker css1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css" <?php time() ?> /> <!-- 'classic' theme -->


</head>

<body>
    <div class="d-flex align-items-center flex-row">
        <div class="adminProfile col-2 me-5">
            <div class="profileHeader"></div>
            <div class="profileCard card rounded-0 py-3">
                <img src="../storage/blogsImg/benefitsOfCoffee.jpg" class="card-img-top" alt="Sunset Over the Sea" />
                <p class="card-text text-center mt-2">
                    Main Admin
                </p>
            </div>

            <div class="adminPath my-3">
                <a href="!#">Emergency</a>
            </div>
            <div class="adminPath my-3">
                <a href="#">Contact Us</a>
            </div>
            <div class="adminPath my-3">
                <a>FAQ</a>
            </div>
            <div class="adminPath my-3">
                <a>Privacy Policy</a>
            </div>
        </div>

        <div class="col-2 me-5"></div>

        <div class="adminSetting col-9 ms-5">
            <div class="profileHeader"></div>
            <nav class="bg-green adminMenuLinks navbar navbar-expand-lg rounded">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Admin Management</a></li>
                            <li class="breadcrumb-item"><a href="#">Total Registered List</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">Total Appointment</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#">Doctors List</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#">Blood Donation</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#">Blood Stocks</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#">Medicine</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#">Lab Reports</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#">Subscribe Letters</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#">Blogs</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </nav>

            <div class="mt-5">
                <form action="../../Controller/adminProfile/aUpColorTxtController.php" method="post">
                    <table class="colorChange table">

                        <tr>
                            <th colspan="2" class="bg-purple text-center">Font and Name Change</th>
                            <th colspan="3" class="bg-purple text-center">Color Change</th>
                        </tr>

                        <tr>
                            <th>Logo Profile: </th>
                            <td>
                                <div class="form-outline">
                                    <input type="text" name="logoImg" id="form12" class="form-control" />
                                </div>
                            </td>
                            <th>Background Color1: </th>
                            <td id="chBgColor1">

                            </td>
                            <td>
                                <div class="color-picker1"></div>
                            </td>
                        </tr>
                        <tr>
                            <th>Website Name: </th>
                            <td>
                                <div class="form-outline">
                                    <input type="text" name="webName" id="form12" class="form-control" />
                                </div>
                            </td>
                            <th>Background Color2: </th>
                            <td id="chBgColor2"></td>
                            <td>
                                <div class="color-picker2"></div>
                            </td>
                        </tr>


                        <tr>
                            <th>Logo Color: </th>
                            <td>
                                <div class="form-outline">
                                    <input type="text" name="logoColor" id="form12" class="form-control" />
                                </div>
                            </td>
                            <th>Background Color3: </th>
                            <td id="chBgColor3"></td>
                            <td>
                                <div class="color-picker3"></div>
                            </td>

                        </tr>
                        <tr>
                            <th>Font-family1: </th>
                            <td>
                                <div class="form-outline">
                                    <input type="text" name="fontOne" id="form12" class="form-control" />
                                </div>
                            </td>
                            <th>Text Color1: </th>
                            <td id="chTxtColor1"></td>
                            <td>
                                <div class="color-picker4"></div>
                            </td>

                        </tr>
                        <tr>
                            <th>Font-family2: </th>
                            <td>
                                <div class="form-outline">
                                    <input type="text" name="fontTwo" id="form12" class="form-control" />
                                </div>
                            </td>
                            <th>Text Color2: </th>
                            <td id="chTxtColor2"></td>
                            <td>
                                <div class="color-picker5"></div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button type="submit" name="change" id="tChange" class="tChange btn btn-purple mt-3">Change</button>
                            </td>
                        </tr>











                    </table>
                </form>

            </div>

            <div class="alertCard card text-center rounded-0 mt-5">
                <div class="h4 header card-header">Today's Alert</div>
                <div class="card-body d-flex align-items-center flex-column">
                    <textarea cols="100" rows="3"></textarea>
                    <a href="#" class="btn btn-purple mt-3">Change</a>
                </div>
            </div>

        </div>
    </div>






    <!-- picker js1 -->
    <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>

    <!-- custom js1 -->
    <script src="./js/aChangeColors.js" <?php time() ?>></script>

</body>

</html>