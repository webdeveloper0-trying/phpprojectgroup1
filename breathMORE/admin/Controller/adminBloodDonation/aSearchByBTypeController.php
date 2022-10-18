<?php



if (isset($_POST["searchBlood"])) {
    $search = $_POST["searchBlood"];

    include "../../Model/dbConnection.php";

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $pdo->prepare(" SELECT user_name,user_email,ph_num,date_of_birth,gender,blood_type,rhd 
    FROM blood_donar_lists
    LEFT JOIN total_registered_accounts
    ON blood_donar_lists.register_id = total_registered_accounts.register_id 
    WHERE blood_donar_lists.blood_type LIKE :name");

    $sql->bindValue(":name", "%" . $search . "%");
    $sql->execute();
    $bloodList = $sql->fetchAll(PDO::FETCH_ASSOC);

    // php to jsonString
    echo json_encode($bloodList);
}else{
    echo "NO";
}
