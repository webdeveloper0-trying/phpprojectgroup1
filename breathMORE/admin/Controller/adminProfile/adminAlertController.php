<?php

include "../../Model/dbConnection.php";


if (isset($_POST["dailyMsg"])){

    $msg = $_POST["dailyMsg"];

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $pdo->prepare("
    INSERT INTO daily_msg
    (
       message
    )
    VALUES
    (
        :msg
       
    )
    ");
    $sql->bindValue(":msg", $msg);
   
    // Real Execute
    $sql->execute();

    header("Location: ../../View/adminProfile/adminProfile.php");
   

} else {
    echo "NO";
}

?>



 
