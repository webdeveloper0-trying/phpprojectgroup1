<?php
include "../Controller/labreportController.php";
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
    <script src="../js/labreport.js" defer></script>

</head>

<body class="bg">
    <div class="container">
        <div class="head">
            <h3>USER'S HISTORY BOOK</h3>
        </div>
        <p class="profile"><u> Profile </u>/<u> User’s History</u></p>
        <div class="tablebg">
            <table class="table table-bordered" id="lab">
                <thead>
                    <tr class="tablehead">
                        <th>No</th>
                        <th> Reference Doctor</th>
                        <th> ResultDate</th>
                        <th>Test</th>
                        <th>Result</th>
                        <th>RefRange</th>
                        <th>Unit</th>
                        <th>Remark</th>
                        <th>Reported_by</th>
                        <th>Authorised_by</th>

                    </tr>
                </thead>
                <tbody class="tablebody">
                    <?php $count = 1; ?>
                    <?php
                    foreach ($patientHistory as $patient) { ?>
                        <tr>
                            <td><?= $count++ ?></td>
                            <td><?= $patient["ref_doc"] ?></td>
                            <td><?= $patient["result_date"] ?></td>
                            <td><?= $patient["test"] ?></td>
                            <td><?= $patient["result"] ?></td>
                            <td><?= $patient["ref_rate"] ?></td>
                            <td><?= $patient["unit"] ?></td>
                            <td><?= $patient["remark"] ?></td>
                            <td><?= $patient["reported_by"] ?></td>
                            <td><?= $patient["authorised_by"] ?></td>

                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>

        </div>
        <button class="btn btn-primary" id="download">Download All</button>
    </div>
    </div>
</body>

</html>