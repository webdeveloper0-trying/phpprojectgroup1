<?php

session_start();
if (!isset($_SESSION["userId"])) {
    header("Location: ../uRegisterLogin/register.php");
} else {
    $userId = $_SESSION["userId"];
}
include "../../Controller/pharmacy/drugsListController.php";
include "../common/uNavbar/uNavbar.php";
include "../common/uFooter/uFooter.php";

include "../../../patient/Controller/common/aChColorTxtController.php";
include "../../../admin/Controller/adminProfile/aSelectMsgController.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy</title>
    <!-- animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- custom css3 -->
    <link rel="stylesheet" href="../common/css/style.css" />
    <link rel="stylesheet" href="../common/uNavbar/css/uNavbar.css" />
    <link rel="stylesheet" href="../common/uFooter/css/uFooter.css" />
    <link rel="stylesheet" href="./css/pharmacy.css" <?php time(); ?> />

    <script src="../common/jq/jquery-3.6.0.min.js" defer></script>
    <script src="./js/drugs.js" <?php time(); ?> defer></script>
</head>

<body>
    <div class="mx-5">

        <h3 class="title my-5">Pharmacy Near Me
            <span class="titleBar"></span>
        </h3>
        <p>Your can search pharmacies' details of each township in Yangon Region</p>

        <div class="row">
            <div class="townshipSelect col col-6">
                <select class="form-select state" id="state" aria-label="townshiptSelect">
                    <option value="Mingaladon">Mingaladon</option>
                    <option value="Insein">Insein</option>
                    <option value="Hlaingtharyar">Hlaingtharyar</option>
                    <option value="Thanlyin">Thanlyin</option>
                    <option value="Latha">Latha</option>
                    <option value="Lanmadaw">Lanmadaw</option>
                    <option value="Pabedan">Pabedan</option>
                    <option value="Dagon">Dagon</option>
                    <option value="Ahlone">Ahlone</option>
                    <option value="Kyeemyindaing">Kyeemyindaing</option>
                    <option value="SanChaung">SanChaung</option>
                    <option value="South Okkalapa">South Okkalapa</option>
                </select>


            </div>

            <div class="col-2"></div>

            <div class="drugSelect col col-4">
                <div class="col col-4 input-group container d-flex justify-content-end">
                    <div class="form-outline">
                        <input type="text" id="searchtext" class="form-control" placeholder="drugs deal with diseases">
                        <label class="form-label" for="form1">Search</label>
                    </div>
                    <button type="button" id="search" class="btn btn-purple">
                        <i class="fas fa-search"></i>
                    </button>
                </div>


            </div>
        </div>

        <div class="showData row">
            <div id="pharmacy" class="showData d-flex  flex-wrap col col-9"></div>

            <div id="drugResult" class="showData col col-3 shadow-5 mt-5">

                <h4 class="drugSearchBox">
                    Drugs and Disease
                </h4>

                <?php
                foreach ($drugs as $drug) { ?>
                    <h6 class="bg-green fw-bold ps-2 pt-2 pb-2"><?= $drug["disease_names"] ?></h6>
                    <p class="text-muted bg-light pt-2"><?= $drug["medicine_names"] ?></p>

                <?php } ?>

            </div>
        </div>

    </div>


</body>

</html>