
<?php 
include "../../../patient/Controller/common/aChColorTxtController.php";
?>


<div class="logoBox d-flex justify-content-center align-items-center rounded-circle m-5 p-2">
    <a href="../main/main.php" class="d-flex justify-content-center align-items-center flex-column">
    
    <?php
        $webName = explode("/", $webName);
        $fName = $webName[0];
        $lName = $webName[1];
        ?>
        <img src="../storage/home/<?=$logoPic ?>" alt="Logo" class="logoImg">
        <h3 class="header h3 fw-bold">
          <?= $fName ?><br /><span><?= $lName ?></span></h3>
    </a>
</div>
