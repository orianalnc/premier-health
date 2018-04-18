<?php


    $to = "info@qubitmarketing.com";

    $first = $_POST["first"];
    $last = $_POST["last"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $drName = $_POST["drName"];
    $drPhone = $_POST["drPhone"];
    $medication = $_POST["medication"];
    $message = $_POST["message"];

    $content = "First Name: " . $first . "\nLast Name:" . $last . "\nE-mail: " .$email . "\nPhone: " . $phone . "\nDr Name: " . $drName .  "\n Dr Phone: " . $drPhone . "\nMedication : " . $medication . "\nMessage: " .$message;

    mail($to, "Contacto desde New Prescription", $content);
    header("location: ../index.html");


?>