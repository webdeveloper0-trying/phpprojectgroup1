<?php

include "../../Model/dbConnection.php";


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Prepare for Execute
$sql = $pdo->prepare("
                    SELECT
                        backgroundColorOne,
                        backgroundColorTwo,
                        backgroundColorThree,
                        txtColorOne,
                        txtColorTwo,
                        logoColor,
                        fontFamilyOne,
                        fontFamilyTwo,
                        websiteName,
                        logoPic
                    FROM adminsetting
                    ORDER BY id DESC
LIMIT 1;");

// Real Execute
$sql->execute();
// Receive Data From MySQL
$defaultProps = $sql->fetchAll(PDO::FETCH_ASSOC);

