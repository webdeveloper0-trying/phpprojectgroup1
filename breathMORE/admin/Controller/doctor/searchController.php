<?php
//in Controller first step to connect db
include "../../Model/dbConnection.php";

//first search key is contained or not from doctorsearch.js using ajax
if (isset($_POST["searchText"])) {
    $search = $_POST["searchText"];

    if ($_POST["searchType"] == "name") {

        $sql = $pdo->prepare(" 
        SELECT * FROM doctor_lists
        INNER JOIN  doctor_dutytime_lists
        ON doctor_lists.doctor_id=doctor_dutytime_lists.doc_id WHERE doctor_lists.doctor_name LIKE :docname");
        $sql->bindValue(":docname", "%" . $search . "%");
    } elseif ($_POST["searchType"] == "center") {
        $sql = $pdo->prepare(" 
        SELECT * FROM doctor_lists
        INNER JOIN  doctor_dutytime_lists
        ON doctor_lists.doctor_id=doctor_dutytime_lists.doc_id WHERE doctor_lists.center LIKE :center");
        $sql->bindValue(":center", "%" . $search . "%");
    } else {
        $sql = $pdo->prepare("
         SELECT * FROM doctor_lists
        INNER JOIN  doctor_dutytime_lists
        ON doctor_lists.doctor_id=doctor_dutytime_lists.doc_id WHERE doctor_lists.ph_num LIKE :ph");
        $sql->bindValue(":ph", "%" . $search . "%");
    }

    $sql->execute();

    $doctorList = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($doctorList);
}
