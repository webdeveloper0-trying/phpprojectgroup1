<?php
include "../../Controller/userProfile/profileController.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./js/profile.js" defer></script>
</head>

<body>
    <div class="container">
        <form action="../../Controller/userProfile/updateController.php" method="post" enctype="multipart/form-data">
            <h6 class="display-4 ms-3 fw-bold  escape">Your Profile</h6>

            <img src="../storage/home/<?= $userInfo[0]["patient_profile"] ?>" class="rounded mx-auto d-block" alt="" width="200" height="200" id="image" style="border-radius:50% !important">
            <input type="file" name="upload" onchange="setimg()" id="uploadfile">

            <input type="text" name="username" class="form-control  mt-5" value="<?= $userInfo[0]["user_name"] ?>" placeholder="name" disabled>
            <input type="text" name="email" class="form-control mt-5" value="<?= $userInfo[0]["user_email"] ?>" placeholder="email" disabled>
            <input type="text" name="Age" class="form-control mt-5" value="
            <?= $userInfo[0]["age"] ?>" placeholder="Age" required>
            <input type="text" name="Gender" class="form-control mt-5 " value="<?php if ($userInfo[0]["gender"] == 0) echo "female";
                                                                                elseif ($userInfo[0]["gender"] == 1) echo "Male"; ?>" placeholder="gender" required>
            <input type="text" name="date of birth" class="form-control mt-5" value="<?= $userInfo[0]["date_of_birth"] ?>" placeholder="date of birth" required>
            <input type="hidden" name="id" value="<?= $userInfo[0]["register_id"] ?>">
            <button type="sumit" class="btn btn-secondary mt-5" name="profile">Update</button>
        </form>

        <button type="sumit" class="btn btn-secondary mt-5" id="history"><a href="../View/userhistory.php">History Page </a></button>

    </div>
</body>

</html>