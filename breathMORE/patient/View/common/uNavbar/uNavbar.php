<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Menu</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

    <!-- custom css1 -->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="./css/uNavbar.css" <?php time(); ?> />
</head>

<body>
    <!-- Navbar -->
    <nav class="uNavbar col-12 navbar navbar-expand-lg navbar-light bg-green flex-column position-sticky top-0">
        <div class="bg-green hrService">
            24 Hours Service </br>
            09-123456789
        </div>
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-brand mt-2 mt-lg-0">
                    <!-- Navbar brand -->
                    <a class="" href="#">
                        <img src="../storage/home/logo.png" height="35" alt="MDB Logo" loading="lazy" />
                    </a>
                    <span id="logoStitle">Breath<span id="logoEtitle">More</span></span>
                </div>

                <!-- Left links -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-link-active nav-item m-3">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-link-active nav-item m-3">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-link-active nav-item m-3">
                        <a class="nav-link" href="#">Center</a>
                    </li>
                    <li class="nav-link-active nav-item m-3">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->

                <!-- Icon dropdown -->
                <div class="userProfile nav-item me-5 me-lg-0 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-menu me-5" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#">Action</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </div>
           
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

</body>

</html>