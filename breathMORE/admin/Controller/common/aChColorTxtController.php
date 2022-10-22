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
$changedProps = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($changedProps);

$bgColorOne = $changedProps[0]["backgroundColorOne"];
$bgColorTwo = $changedProps[0]["backgroundColorTwo"];
$bgColorThree = $changedProps[0]["backgroundColorThree"];
$txtColorOne = $changedProps[0]["txtColorOne"];
$txtColorTwo = $changedProps[0]["txtColorTwo"];
$logoColor = $changedProps[0]["logoColor"];
$fontOne = $changedProps[0]["fontFamilyOne"];
$fontTwo = $changedProps[0]["fontFamilyTwo"];
$webName = $changedProps[0]["websiteName"];
$logoPic = $changedProps[0]["logoPic"];
?>

<script>
document.documentElement.style.setProperty('--firstColor', `<?= $bgColorOne ?>`);
document.documentElement.style.setProperty('--secondaryColor', `<?= $bgColorTwo ?>`);
document.documentElement.style.setProperty('--thirdColor', `<?= $bgColorThree ?>`);
document.documentElement.style.setProperty('--textColorOne', `<?= $txtColorOne ?>`);
document.documentElement.style.setProperty('--textColorTwo', `<?= $txtColorTwo ?>`);
document.documentElement.style.setProperty('--logoColor', `<?= $logoColor ?>`);
document.documentElement.style.setProperty('--fontOne', `<?= $fontOne ?>`);
document.documentElement.style.setProperty('--fontTwo', `<?= $fontTwo ?>`);



</script>
