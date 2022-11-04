<?php
include "../common/mailSender.php";
include "../../Controller/subscribeNews/aSubscribeNewListController.php";



if (isset($_POST["sendmail"])) {
    $info = $_POST["info"];
    $subject = $_POST["subject"];
    
   
    foreach ($subscriberInfos as $patient) {
        $userEmail = $patient["user_email"];
        // echo "ANS",$userEmail;
        $mail = new SendMail();
        $mail->sendMail(
            $userEmail,
            "About Our Event And Promotion",
            "<h1>$subject !!</h1>
                <p>$info</p>"
        );

        header("Location: ../../View/subscribeNews/aSubscribeNewList.php");
    }

    
}
