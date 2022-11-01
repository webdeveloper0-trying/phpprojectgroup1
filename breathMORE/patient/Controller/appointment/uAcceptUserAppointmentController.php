<?php

include "../../Model/dbConnection.php";
session_start();

if (isset($_POST["applyAppointment"])) {
    $patientId = $_POST["patientId"];
    $patientName = $_POST["patientName"];
    $patientEmail = $_POST["patientEmail"];
    $patientPhNo = $_POST["patientPhNo"];
    $gender = $_POST["gender"];
    $patientAge = $_POST["patientAge"];
    $patientAddress = $_POST["patientAddress"];
    $patientFeeling = $_POST["patientFeeling"];
    $docId = $_POST["docId"];
    $docDay = $_SESSION["selectedDocDay"];
    $docTime = $_POST["docTime"];
    $docCenter = $_POST["docCenter"];

    echo  $docDay;
    echo "<br/>";
    echo $docTime;
    echo "<br/>";
    echo $docCenter;
    echo "<br/>";
    echo $docId;

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare for Execute
    $sql = $pdo->prepare("
                SELECT
                   date,
                   time,
                   categories,
                   doctor_id
                  
               FROM online_appointments_lists
               WHERE 
                    date = :day AND
                    time = :time AND
                    categories = :center AND
                    doctor_id =:doc_id
                                  
                ");

    $sql->bindValue(':day', $docDay);
    $sql->bindValue(':time', $docTime);
    $sql->bindValue(':center', $docCenter);
    $sql->bindValue(':doc_id', $docId);
   
    // Real Execute
    $sql->execute();


    // Receive Data From MySQL
    $docTakenInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    print_r($docTakenInfo);

    if(count($docTakenInfo) == 0){
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare for Execute
    $sql = $pdo->prepare("
                SELECT
                   date,
                   time,
                   categories,
                   doctor_id,
                   patient_id,
                   ph_no
                  
               FROM online_appointments_lists
               WHERE 
                    date = :day AND
                    time = :time AND
                    categories = :center AND
                    doctor_id =:doc_id AND
                    patient_id = :patient_id AND
                    ph_no = :ph_no 
                                  
                ");

    $sql->bindValue(':day', $docDay);
    $sql->bindValue(':time', $docTime);
    $sql->bindValue(':center', $docCenter);
    $sql->bindValue(':doc_id', $docId);
    $sql->bindValue(':patient_id', $patientId);
    $sql->bindValue(':ph_no', $patientPhNo);
   


    // Real Execute
    $sql->execute();


    // Receive Data From MySQL
    $takenInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    print_r($takenInfo);


    if (count($takenInfo) == 0) {

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare for Execute
        $sql = $pdo->prepare("
                    SELECT
                       appointment_count
                   FROM doctor_dutytime_lists
                   WHERE                        
                        doc_id =:doc_id
                    ");
        $sql->bindValue(':doc_id', $docId);



        // Real Execute
        $sql->execute();


        // Receive Data From MySQL
        $appCount = $sql->fetchAll(PDO::FETCH_ASSOC);

        echo ("COUNT" . $appCount[0]["appointment_count"]);

        $_SESSION["countAppointment"] = 5;

        if ($appCount[0]["appointment_count"] <= $_SESSION["countAppointment"]) {
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare for Execute
        $sql = $pdo->prepare("
                INSERT INTO online_appointments_lists(
                   date,
                   time,
                   categories,
                   doctor_id,
                   patient_id,
                   ph_no,
                   diagnosis,
                   address,
                   created_date
                  
                )
                VALUES
                (
                    :day,
                    :time,
                    :center,
                    :doc_id,
                    :patient_id,
                    :ph_no,
                    :diagnosis,
                    :p_address,
                    :created_date
                             
                )");

        $sql->bindValue(':day', $docDay);
        $sql->bindValue(':time', $docTime);
        $sql->bindValue(':center', $docCenter);
        $sql->bindValue(':doc_id', $docId);
        $sql->bindValue(':patient_id', $patientId);
        $sql->bindValue(':ph_no', $patientPhNo);
        $sql->bindValue(':diagnosis', $patientFeeling);
        $sql->bindValue(':p_address', $patientAddress);
        $sql->bindValue(":created_date", date("Y/m/d"));
       

        // Real Execute
        $sql->execute();


        // Receive Data From MySQL
        $appointmentInfos = $sql->fetchAll(PDO::FETCH_ASSOC);


            $appCount = $appCount[0]["appointment_count"];

            // Prepare for Execute
            $sql = $pdo->prepare("
        UPDATE doctor_dutytime_lists
        SET appointment_count = :appointment_count 
        WHERE 
        doc_id =:doc_id");

            $sql->bindValue(':doc_id', $docId);
            $sql->bindValue(':appointment_count', ++$appCount);

            // Real Execute
            $sql->execute();


            // Receive Data From MySQL
            $appointmentInfos = $sql->fetchAll(PDO::FETCH_ASSOC);

            header("Location: ../../View/appointment/uAppointmentComplete.php");

            // echo "<pre>";

            // print_r($appointmentInfos);
        }else{
            header("Location: ../../View/appointment/uAFailDocCountComplete.php");
        }
    } else {
        header("Location: ../../View/appointment/uAFailSameAppointment.php");
        
    }

    }else{
        header("Location: ../../View/appointment/uAFailTookSameAppointment.php");

    }

   

    
} else {
    echo "Not Received";
}
