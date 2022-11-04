



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Management</title>

  <?php

session_start();
include "../../../patient/Controller/common/aChColorTxtController.php";
include "../../Controller/adminManagement/aAdminListController.php";

if (isset($_POST['adminname']) && isset($_POST['password'])) {
    $adminname = $_POST['adminname'];
    $password = $_POST['password'];
    $_SESSION["adminname"] = $adminname;
}

if($_SESSION["ismainadmin"]){
    include "../common/adminNavbar.php";
}else{
    include "../common/adminSubNavbar.php";
}

if (!isset($_SESSION["adminname"])) {
    header("Location: ../adminRegisterLogin/aLogin.php");
}


?>

  <!-- custom css -->
  <link rel="stylesheet" href="../common/css/style.css">
  <link rel="stylesheet" href="../common/css/adminNavbar.css" />
  <link rel="stylesheet" href="./css/aManagement.css">
</head>

<body>

  <div class="container-fluid col-12 d-flex justify-content-center align-items-center flex-column">
    <h3 class="header my-5">Admin Update
    </h3>

    <table class="table table-hover container-fluid text-center">
      <thead class="thead">
        <tr>
          <th scope="col">No</th>
          <th scope="col">AdminName</th>
          <th scope="col">Role</th>
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

            <td> <?= ($admin["status"] == 1) ? ("Main Admin") : ("Sub Admin"); ?></td>
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
              <a href="../../Controller/adminManagement/aDeleteAdminController.php?id=<?= $admin["id"] ?>">
                <i class="fa-solid fa-trash-can"></i>
              </a>
            </td>
          </tr>

          <!-- Modal for Update Admin Info -->
          <div class="modal top fade" id="exampleModalUpdate<?= $countId ?>" tabindex="-1" aria-labelledby="adminManagement" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
            <div class="modal-dialog   modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="adminManagement">Edit AdminInfo</h5>
                  <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="../../Controller/adminManagement/aUpdateAdminController.php" method="post" class="">

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                      <input type="text" name="adminname" id="editAdminName<?= $countId ?>" value="<?= $adminInfo[0]['admin_name'] ?>" class="form-control" />
                      <label class="form-label" for="editAdminName<?= $countId ?>">Admin name</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" name="password" id="editAdminPwd<?= $countId ?>" class="form-control" required />
                      <label class="form-label" for="editAdminPwd<?= $countId ?>">Password</label>
                    </div>

                    <!-- Default checkbox -->
                    <div class="form-check mb-4">
                      <input class="form-check-input" type="checkbox" name="role" value="1" id="roleEdit<?= $countId ?>" <?php if($adminInfo[0]['status']==1)echo "checked"?> />
                      <label class="form-check-label" for="roleEdit<?= $countId ?>">Main Admin</label>
                    </div>

                    <input type="hidden" name="id" value="<?= $adminInfo[0]['id'] ?>" />

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mb-4" data-mdb-dismiss="modal">
                        Cancel
                      </button>
                      <!-- Submit button -->
                      <button type="submit" name="updateAdmin" class="btn btn-purple btn-lg mb-4">Update</button>
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
    <button type="button" class="btn btn-purple mt-3" data-mdb-toggle="modal" data-mdb-target="#adminAdd">
      Add Admin
    </button>

  </div>


  <!-- Modal for Add Admin -->
  <div class="modal top fade" id="adminAdd" tabindex="-1" aria-labelledby="adminManagement" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog   modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="adminManagement">Add Admin</h5>
          <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../../Controller/adminManagement/aAddAdminController.php" method="post" class="">

            <!-- Text input -->
            <div class="form-outline mb-4">
              <input type="text" name="adminname" id="addAdminName" class="form-control" />
              <label class="form-label" for="addAdminName">Admin name</label>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
              <input type="password" name="password" id="addAdminPwd" class="form-control" />
              <label class="form-label" for="addAdminPwd">Password</label>
            </div>

            <!-- Default checkbox -->
            <div class="form-check mb-4">
              <input class="form-check-input" type="checkbox" name="role" value="1" id="addAdminRole" />
              <label class="form-check-label" for="addAdminRole">Main Admin</label>
            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-secondary mb-4" data-mdb-dismiss="modal">
                Cancel
              </button>
              <!-- Submit button -->
              <button type="submit" name="addAdmin" class="btn btn-purple btn-lg mb-4">Add</button>
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