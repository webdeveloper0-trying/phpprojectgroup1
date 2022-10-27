
<?php 
include "../../../patient/Controller/common/aChColorTxtController.php";
?>

<div class="logoBox m-5">
    <a href="../main/home.php">
    <img src="../storage/home/logo.png" alt="Logo" class="logoImg">
    <?php
        $webName = explode("/", $webName);
        $fName = $webName[0];
        $lName = $webName[1];
        ?>
        <h3 class="header h3 fw-bold">
          <?= $fName ?><span><?= $lName ?></span></h3>
    </a>
</div>