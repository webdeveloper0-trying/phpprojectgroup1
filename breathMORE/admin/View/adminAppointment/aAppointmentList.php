<?php
include "../../Controller/adminAppointment/aAppointmentListController.php";

include "../common/adminNavbar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppointmentList</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?=time()" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css?=time()" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap?=time()" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css?=time()" rel="stylesheet" />

    <!-- custom css files 2 -->
    <link rel="stylesheet" href="../common/css/style.css" <?php time(); ?>>
    <link rel="stylesheet" href="../common/css/adminNavbar.css" <?php time(); ?>>


    <script src="https://cdn.jsdelivr.net/npm/chart.js" defer></script>
</head>

<body>
    <div class="col col-10 col-md-auto d-flex justify-content-center align-items-center flex-column">
        <h3 class="h3 header my-5">Total Appointment List</h3>
        <table class="table">
            <thead class="thead">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Patient Name</th>
                    <th scope="col">Patient Gender</th>
                    <th scope="col">Patient Ph.NO</th>
                    <th scope="col">Patient Email</th>
                    <th scope="col">Patient Age</th>
                    <th scope="col">Patient Address</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Appointment Day</th>
                    <th scope="col">Appointment Time</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $count = 0; 
            foreach($appointments1 as $appointment){?> 
                <tr>
                    <th scope="row"><?= ++$count?></th>
                    <td><?= $appointment["user_name"] ?></td>
                    <td><?= $appointment["gender"]?></td>
                    <td><?= $appointment["ph_num"] ?></td>
                    <td><?= $appointment["user_email"]?></td>
                    <td><?= $appointment["age"] ?></td>
                    <td><?= $appointment["address"] ?></td>
                    <td><?= $appointments2[$count++]["doctor_name"]?></td>
                    <td><?= $appointment["date"]?></td>
                    <td><?= $appointment["time"]?></td>
                </tr><?php } ?>
               
               
            </tbody>
        </table>
    </div>
</body>

</html>