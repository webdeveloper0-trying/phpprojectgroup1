<?php

include "../../Model/dbConnection.php";

if (
    isset($_POST["bgcolor1"]) || isset($_POST["bgcolor2"])  || isset($_POST["bgcolor3"])  || isset($_POST["txtColor1"]) 
    || isset($_POST["txtColor2"])  || isset($_POST["logoColor"])  || isset($_POST["logoImg"])  || isset($_POST["webName"]) 
    || isset($_POST["fontOne"])  || isset($_POST["fontTwo"]) )
{
    $backgroundColorOne = $_POST["bgcolor1"];
    $backgroundColorTwo = $_POST["bgcolor2"];
    $backgroundColorThree = $_POST["bgcolor3"];
    $txtColorOne = $_POST["txtColor1"];
    $txtColorTwo = $_POST["txtColor2"];
    $logoColor = $_POST["logoColor"];

    $logoImg = $_POST["logoImg"];
    $webName = $_POST["webName"];
    $fontOne = $_POST["fontOne"];
    $fontTwo = $_POST["fontTwo"];

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare for Execute
    $sql = $pdo->prepare("
                    INSERT INTO adminsetting(
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
                    )
                    VALUES
                    (
                        :backgroundColorOne,
                        :backgroundColorTwo,
                        :backgroundColorThree,
                        :txtColorOne,
                        :txtColorTwo,
                        :logoColor,
                        :fontFamilyOne,
                         :fontFamilyTwo,
                         :websiteName,
                          :logoPic            
                    )");

    $sql->bindValue(':backgroundColorOne', $backgroundColorOne);
    $sql->bindValue(':backgroundColorTwo', $backgroundColorTwo);
    $sql->bindValue(':backgroundColorThree', $backgroundColorThree);
    $sql->bindValue(':txtColorOne', $txtColorOne);
    $sql->bindValue(':logoColor', $logoColor);
    $sql->bindValue(':txtColorTwo', $txtColorTwo);
    $sql->bindValue(':fontFamilyOne', $fontOne);
    $sql->bindValue(':fontFamilyTwo', $fontTwo);
    $sql->bindValue(':websiteName', $webName);
    $sql->bindValue(':logoPic', $logoImg);




    // Real Execute
    $sql->execute();
    // Receive Data From MySQL
    $changeProps = $sql->fetchAll(PDO::FETCH_ASSOC);

    // header("Location: ../../View/adminProfile/adminProfile.php");

} else {
    echo "NO";
}





 
