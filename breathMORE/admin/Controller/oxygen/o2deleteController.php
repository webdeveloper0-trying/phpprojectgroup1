<?php
include "../../Model/dbConnection.php";
if (isset($_GET["id"])) {
    $o2id = $_GET["id"];

    echo $o2id;

    $sql = $pdo->prepare("
UPDATE oxygen_lists SET del_flg=1
WHERE id=:id
");
    $sql->bindValue(":id", $o2id);
    $sql->execute();

    header("Location: ../../View/oxygen/o2list.php");
}
