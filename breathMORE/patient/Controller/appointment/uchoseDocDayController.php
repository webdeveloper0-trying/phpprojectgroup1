<?php

if (isset($_POST["searchText"])) {
    $docDay = $_POST["searchText"];

    include "../../Model/dbConnection.php";

    echo "docDay1 ".$docDay;


   session_start();
   $_SESSION["selectedDocDay"] = $docDay;
}
