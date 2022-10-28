<?php
// echo "ok";

include "../../Model/dbConnection.php";
if (isset($_POST["addContactUs"])) {
    $fb = $_POST["fb"];
    $yt = $_POST["yt"];
    $tele = $_POST["tele"];
    $ph = $_POST["phnum"];

    $sql = $pdo->prepare("
    INSERT INTO contact_us
    (
        website_phno,
        facebook,
        youtube,
        telegram,
        created_date
    )
    VALUES
    (
        :website_phno,
        :facebook,
        :youtube,
        :telegram,
        :created_date
    )
    ");
    $sql->bindValue(":website_phno", $ph);
    $sql->bindValue(":facebook", $fb);
    $sql->bindValue(":youtube", $yt);
    $sql->bindValue(":telegram", $tele);
    $sql->bindValue(":created_date", date("Y/m/d"));


    $sql->execute();

    header("Location: ../../View/contactUs/addContact.php");
} else {
    echo "Err";
}
