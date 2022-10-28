<?php
include "../../Controller/userHistory/historyController.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <script src="../js/jquery3.6.0.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="../js/history.js" defer></script>

</head>

<body class="bg">
    <div class="container">
        <div class="head">
            <h3>USER'S HISTORY BOOK</h3>
        </div>
        <p class="profile"><u> Profile </u>/<u> User’s History</u></p>
        <table class="table table-bordered" id="lab">
            <thead>
                <tr class="tablehead">
                    <th>No</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>categories</th>
                    <th>doctor_id</th>
                    <th>patient_id</th>
                    <th>ph_no</th>
                    <th>diagnosis</th>
                </tr>
            </thead>
            <tbody class="tablebody">
                <?php $count = 1; ?>
                <?php
                foreach ($patientHistory as $patient) { ?>
                    <tr>
                        <td><?= $count++ ?></td>
                        <td><?= $patient["date"] ?></td>
                        <td><?= $patient["time"] ?></td>
                        <td><?= $patient["categories"] ?></td>
                        <td><?= $patient["doctor_id"] ?></td>
                        <td><?= $patient["patient_id"] ?></td>
                        <td><?= $patient["ph_no"] ?></td>
                        <td><?= $patient["diagnosis"] ?></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
        <button type="button" id="download">Download</button>
    </div>
    </div>
</body>

</html>