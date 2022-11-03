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
    $docId = $_POST["doctorID"];
    $docDay = $_SESSION["selectedDocDay"];
    $docTime = $_POST["docTime"];
    $docCenter = $_POST["docCenter"];

   

    echo "GET DOCTOR".$docId." Type ".gettype($docId)."<br/>";

    

  

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare for Execute
    $sql = $pdo->prepare("
                SELECT
                  *
               FROM online_appointments_lists 
               WHERE 
                   date = :day AND
                   categories = :center AND
                   doctor_id = :doc_id AND
                   patient_id = :pid
                ");

    $sql->bindValue(':day', $docDay);
    $sql->bindValue(':center', $docCenter);
    $sql->bindValue(':doc_id', $docId);
    $sql->bindValue(':pid', $patientId);

    // Real Execute
    $sql->execute();


    // Receive Data From MySQL
    $docTakenInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "S";
    echo "<pre>";
    print_r($docTakenInfo);
    echo "E";

 
    if (count($docTakenInfo) == 0) {



        // Prepare for Execute
        $sql = $pdo->prepare("
                    SELECT
                       appointment_count
                   FROM doctor_dutytime_lists
                   WHERE                        
                        doc_id = :doc_id
                    ");
        $sql->bindValue(':doc_id', $docId);



        // Real Execute
        $sql->execute();


        // Receive Data From MySQL
        $appCount = $sql->fetchAll(PDO::FETCH_ASSOC);

       

        $_SESSION["countAppointment"] = 5;

        echo "<br/>Get doctorId" . $docId;

        if (count($appCount) == 0) {
          

            echo "<br/>Before Insert doctorId" . $docId;

            // Prepare for Execute
            $sql = $pdo->prepare(
                "INSERT INTO online_appointments_lists(
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
                );");

                echo "<br/>After Insert doctorId" . $docId;

            $sql->bindValue(':day', $docDay);
            $sql->bindValue(':time', $docTime);
            $sql->bindValue(':center', $docCenter);
            $sql->bindValue(':doc_id', $docId);
            $sql->bindValue(':patient_id', $patientId);
            $sql->bindValue(':ph_no', $patientPhNo);
            $sql->bindValue(':diagnosis', $patientFeeling);
            $sql->bindValue(':p_address', $patientAddress);
            $sql->bindValue(":created_date", date("Y/m/d"));

            echo "<br/>After Bind doctorId2" . $docId;


            // Real Execute
            $sql->execute();


            

            $appCount1 = 0;

            // Prepare for Execute
            $sql = $pdo->prepare("
        UPDATE doctor_dutytime_lists
        SET appointment_count = :appointment_count 
        WHERE 
        doc_id =:doc_id1");

            $sql->bindValue(':doc_id1', $docId);
            $sql->bindValue(':appointment_count', ++$appCount1);

            // Real Execute
            $sql->execute();


           
            header("Location: ../../View/appointment/uAppointmentComplete.php");

           
        }else if ($appCount[0]["appointment_count"] < $_SESSION["countAppointment"]) {
            echo "<br />Before Insert2 doctorId3" . $docId;
          

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

                echo "After Insert2 doctorId" . $docId;


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


            
            header("Location: ../../View/appointment/uAppointmentComplete.php");

            // echo "<pre>";

           
        } else {
            header("Location: ../../View/appointment/uAFailDocCountComplete.php");
        }
    } else {
        header("Location: ../../View/appointment/uAFailSameAppointment.php");

    }
} else {
    echo "Not Received";
}
