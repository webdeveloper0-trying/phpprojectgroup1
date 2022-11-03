<?php

session_start();

include "../../Model/dbConnection.php";

if (isset($_POST['adminname']) && isset($_POST['password'])) {
    $adminname = $_POST['adminname'];
    $password = $_POST['password'];


    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare for Execute
    $sql = $pdo->prepare("SELECT * FROM admin_management
                                WHERE admin_name = :adminname 
                                ");

    $sql->bindValue(":adminname", $adminname);

    // Real Execute
    $sql->execute();

    // Receive Data From MySQL
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (!password_verify($password, $result[0]['password'])) {
        header("Location: ../../View/adminRegisterLogin/aLogin.php");
    } else {

        if ($result[0]['status'] == 1) {
            $GLOBALS['mainadmin'] = 1;
            $_SESSION["ismainadmin"] = $GLOBALS['mainadmin'];
            echo "Main Admin" . $_SESSION["ismainadmin"];
            header("Location: ../../View/adminDashboard/aDashboard.php");

            $GLOBALS['mainadmin'] = true;
        } else {
            $GLOBALS['mainadmin'] = false;
            $_SESSION["ismainadmin"] = $GLOBALS['mainadmin'];
            echo "Main Admin" . $_SESSION["ismainadmin"];
            header("Location: ../../View/adminDashboard/aSubAdminDashboard.php");
        }
        $_SESSION["adminname"] = $adminname;
        
    }
}
