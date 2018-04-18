<?php


$to = "info@qubitmarketing.com";

$first = $_POST["first"];
$last = $_POST["last"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$rxNumber = $_POST["rxNumber"];
$message = $_POST["message"];

$content = "First Name: " . $first . "\nLast Name:" . $last . "\nE-mail: " .$email . "\nPhone: " . $phone .  "\nRx Numbers : " . $rxNumber . "\nMessage: " .$message;

mail($to, "Contacto desde Refill Prescription", $content);
header("location: ../index.html");



?>