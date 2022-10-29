<?php


include "../common/adminNavbar.php";

session_start();

if (isset($_POST['adminname']) && isset($_POST['password'])) {
    $adminname = $_POST['adminname'];
    $password = $_POST['password'];
    $_SESSION["adminname"] = $adminname;
}

if ($_SESSION["ismainadmin"] == 0) {
    header("Location: ../adminRegisterLogin/aLogin.php");
}

include "../../Controller/subscribeNews/aSubscribeNewListController.php";




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe For Events</title>
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
    <link rel="stylesheet" href="../common/css/style.css" <?php time(); ?> />
    <link rel="stylesheet" href="../common/css/adminNavbar.css">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <h3 class="h3 header my-5">Subscribtion List for Events and News</h3>

        <table class="table table-hover">
            <thead class="thead">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                foreach ($subscriberInfos as $subscriberInfo) { ?>
                    <tr>
                        <td><?= ++$count; ?></td>
                        <td><?= $subscriberInfo['user_name'] ?></td>
                        <td><?= $subscriberInfo['user_email'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <form action="../../Controller/subscribeNews/subscribeEmailController.php" method="post">
            <input class="form-control" name="subject"></input>
            <button type="submit" name="sendmail">sendmail<button>
        </form>

    </div>
</body>

</html>