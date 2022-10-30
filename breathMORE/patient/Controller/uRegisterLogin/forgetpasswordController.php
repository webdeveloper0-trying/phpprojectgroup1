<?php
include "../../Model/dbConnection.php";
include "../common/mailsender.php";
include "../common/random.php";


if (isset($_POST["forgetpassword"])) {
    $userEmail = $_POST["email"];
    $sql = $pdo->prepare("SELECT  * FROM total_registered_accounts WHERE  user_email=:email");
    $sql->bindValue(":email", $userEmail);
    $sql->execute();
    $userinfo = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($userinfo);
    echo "$userEmail";
    if (count($userinfo) != 0) {
        $newpassword =  getpassword(10);
        echo "$newpassword";

        $sql = $pdo->prepare("UPDATE total_registered_accounts SET user_password = :password WHERE register_id =:id");
        $sql->bindValue(":password",  password_hash($newpassword, PASSWORD_DEFAULT));
        $sql->bindValue(":id", $userinfo[0]["register_id"]);
        $sql->execute();
        $mail = new SendMail();
        $mail->sendMail(
            $userinfo[0]["user_email"],
            "reset password complete",
            "<h1>reset password complete</h1>
                <p>new password is : $newpassword </p>"
        );
    }
    header("location: ../../View/uRegisterLogin/login.php");
}
