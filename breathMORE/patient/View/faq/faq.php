<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ</title>

    <?php
    session_start();
    if (!isset($_SESSION["userId"])) {
        header("Location: ../uRegisterLogin/register.php");
    } else {
        $userId = $_SESSION["userId"];
    }

    include "../common/uNavbar/uNavbar.php";
    include "../common/uFooter/uFooter.php";

    include "../../../patient/Controller/common/aChColorTxtController.php";
    include "../../../admin/Controller/adminProfile/aSelectMsgController.php";
    include "../../Controller/faq/faqListController.php";


    ?>

    <link rel="stylesheet" href="../common/css/style.css" />
    <link rel="stylesheet" href="../common/uNavbar/css/uNavbar.css" />
    <link rel="stylesheet" href="../common/uFooter/css/uFooter.css" />
</head>

<body>
    <div class="mx-5">
        <h3 class="header my-5">
            Frequently Asked Questions
        </h3>
        <div class="faq">
            <div class="row">


                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="col-12 mx-auto ">
                        <?php
                        $count = 0;
                        foreach ($faqs as $faq) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading<?= $count; ?>">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#flush-collapse<?= $count; ?>" aria-expanded="false" aria-controls="flush-collapse<?= $count; ?>">
                                        <?= $faq["question"] ?>
                                    </button>
                                </h2>
                                <div id="flush-collapse<?= $count; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?= $count; ?>" data-mdb-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <?= $faq["answer"] ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $count++;
                        } ?>

                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
</body>

</html>