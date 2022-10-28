<?php

// include "../../Model/dbConnection.php";

print_r("a");

if (isset($_POST["alert"])){

    $alert = $_POST["alert"];

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
    // Real Execute
    $sql->execute();
    // Receive Data From MySQL
        session_start();
   $_SESSION["alert"] = $alert;

} else {
    echo "NO01";
}

?>



 
