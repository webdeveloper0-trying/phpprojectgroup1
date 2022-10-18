<?php

session_start();

if (isset($_POST['adminname']) && isset($_POST['password'])) {
  $adminname = $_POST['adminname'];
  $password = $_POST['password'];
  $_SESSION["adminname"] = $adminname;
}

if ($_SESSION["ismainadmin"] == 0) {
  header("Location: ../adminRegisterLogin/aLogin.php");
}

include "../../Controller/adminManagement/aAdminListController.php";

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?=time()" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css?=time()" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap?=time()" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css?=time()" rel="stylesheet" />

  <!-- custom css -->
  <link rel="stylesheet" href="../common/css/style.css">
  <link rel="stylesheet" href="./css/aManagement.css">
</head>

<body>

  <div class="container-fluid col-12 d-flex justify-content-center align-items-center flex-column">
    <h3 class="header my-5">Admin Update
    </h3>

    <table class="table container-fluid text-center">
      <thead class="thead">
        <tr>
          <th scope="col">No</th>
          <th scope="col">AdminName</th>
          <th scope="col">Password</th>
          <th scope="col">Control</th>
        </tr>
      </thead>
      <tbody class="tbody">

        <!-- Edit Controller for Admin -->
        <?php
        $count = 0;
        $countId = 0;
        foreach ($admins as $admin) { ?>
          <tr>
            <td scope="row"><?= ++$count ?>
            </td>
            <td><?= $admin["admin_name"] ?></td>
            <td><?= $admin["password"] ?></td>
            <td>

              <?php
              if (isset($admin["id"])) {


                $sql = $pdo->prepare("
                        SELECT * FROM admin_management
                        WHERE id = :id");

                $sql->bindValue(':id', $admin["id"]);
                $sql->execute();

                $adminInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
              } ?>

              <?php ++$countId ?>

              <i class="fa-solid fa-pen-to-square" data-mdb-toggle="modal" data-mdb-target="#exampleModalUpdate<?= $countId ?>"></i>
              &nbsp; &nbsp;
              <a href="../../Controller/adminManagement/aDeleteAdminController.php?id=<?=$admin["id"] ?>">
              <i class="fa-solid fa-trash-can"></i>
              </a>
            </td>
          </tr>

          <!-- Modal for Update Admin Info -->
          <div class="modal top fade" id="exampleModalUpdate<?= $countId ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
            <div class="modal-dialog   modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="../../Controller/adminManagement/aUpdateAdminController.php" method="post" class="">

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                      <input type="text" name="adminname" id="form6Example3" value="<?= $adminInfo[0]['admin_name'] ?>" class="form-control" />
                      <label class="form-label" for="form6Example3">Admin name</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" name="password" id="form6Example4" value="<?= $adminInfo[0]['password'] ?>" class="form-control" />
                      <label class="form-label" for="form6Example4">Password</label>
                    </div>

                    <input type="hidden" name="id" value="<?= $adminInfo[0]['id'] ?>" />

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mb-4" data-mdb-dismiss="modal">
                        Cancel
                      </button>
                      <!-- Submit button -->
                      <button type="submit" name="updateAdmin" class="btn btn-primary btn-lg mb-4">Update</button>
                    </div>


                  </form>
                </div>

              </div>
            </div>
          </div>

        <?php } ?>
      </tbody>
    </table>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mt-3" data-mdb-toggle="modal" data-mdb-target="#exampleModalAdd">
      Add Admin
    </button>

  </div>


  <!-- Modal for Add Admin -->
  <div class="modal top fade" id="exampleModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog   modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../../Controller/adminManagement/aAddAdminController.php" method="post" class="">

            <!-- Text input -->
            <div class="form-outline mb-4">
              <input type="text" name="adminname" id="form6Example3" class="form-control" />
              <label class="form-label" for="form6Example3">Admin name</label>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
              <input type="password" name="password" id="form6Example4" class="form-control" />
              <label class="form-label" for="form6Example4">Password</label>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary mb-4" data-mdb-dismiss="modal">
                Cancel
              </button>
              <!-- Submit button -->
              <button type="submit" name="addAdmin" class="btn btn-primary btn-lg mb-4">Add</button>
            </div>


          </form>
        </div>

      </div>
    </div>
  </div>


  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
</body>

</html>