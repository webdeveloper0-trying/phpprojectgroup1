<?php

// include "../../Model/dbConnection.php";

print_r("a");

if (isset($_POST["alert"])){

    $alert = $_POST["alert"];

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare for Execute
    // $sql = $pdo->prepare("
    //                 INSERT INTO adminsetting(
    //                     backgroundColorOne,
    //                 )
    //                 VALUES
    //                 (
    //                     :backgroundColorOne,          
    //                 )");

    // $sql->bindValue(':backgroundColorOne', $backgroundColorOne);
   
    // Real Execute
    $sql->execute();
    // Receive Data From MySQL
    // $alert = $sql->fetchAll(PDO::FETCH_ASSOC);
        session_start();
   $_SESSION["alert"] = $alert;

} else {
    echo "NO01";
}

?>



 
