<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Complete</title>

    <?php

    session_start();
    if (!isset($_SESSION["userId"])) {
        header("Location: ../uRegisterLogin/register.php");
    } else {
        $userId = $_SESSION["userId"];
    }


    include "../../../patient/Controller/common/aChColorTxtController.php";
    include "../../../admin/Controller/adminProfile/aSelectMsgController.php";


    ?>
    <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?=time()" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css?=time()" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap?=time()" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css?=time()" rel="stylesheet" />


    <!-- custom css files 2 -->
    <link rel="stylesheet" href="../common/css/style.css">
    <link rel="stylesheet" href="./css/uAppointmentComplete.css">


</head>

<body>

    <div tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="btn-green modal-content">
                <div class="modal-body text-center">
                    Your Appointment Complete..
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-purple">
                        <a href="../main/main.php" class="text-light">Go to HomePage</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>