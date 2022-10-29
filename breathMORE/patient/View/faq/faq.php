<?php
include "../../Controller/faq/faqListController.php";
include "../common/uNavbar/uNavbar.php";
include "../common/uFooter/uFooter.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>FAQ</title>
    
   

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
            <div class="col-12 mx-auto ">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <?php foreach ($faqs as $faq) { ?>



                        <div class="accordion-item">
                            <h2 class="accordion-header " id="flush-headingOne">
                                <button class="accordion-button collapsed faqTitle" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <?php echo $faq["question"] ?>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body faqTitleAccordation"><?php echo $faq["answer"] ?></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>



            </div>

        </div>
    </div>
    </div>
    </div>
</body>

</html>