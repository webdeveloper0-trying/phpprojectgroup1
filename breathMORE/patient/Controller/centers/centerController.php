<?php
include "../../Model/dbConnection.php";

if (isset($_POST["centerName"])) {
    $clicked = $_POST["centerName"];
    $sql = $pdo->prepare("SELECT * FROM doctor_lists WHERE center LIKE :center");
    $sql->bindValue(":center", "%" . $clicked . "%");
    $sql->execute();
    $centerresult = $sql->fetchAll(PDO::FETCH_ASSOC);
    print_r(json_encode($centerresult));
}
