<?php
include "../common/mailSender.php";
include "../../Controller/subscribeNews/aSubscribeNewListController.php";



if (isset($_POST["sendmail"])) {

    $subject = $_POST["subject"];
    echo $subject;
    print_r($subscriberInfos[0]["user_email"]);
    foreach ($subscriberInfos as $patient) {
        $userEmail = $patient["user_email"];
        // echo "ANS",$userEmail;
        $mail = new SendMail();
        $mail->sendMail(
            $userEmail,
            "About Our Event And Promotion",
            "<h1>Our Event !!</h1>
                <p>$subject</p>"
        );
    }

    header("Location: ../../View/subscribeNews/aSubscribeNewList.php");
}
