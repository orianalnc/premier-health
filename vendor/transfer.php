<?php


$to = "info@qubitmarketing.com";

$first = $_POST["first"];
$last = $_POST["last"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$pharmacyName = $_POST["pharmacyName"];
$pharmacyPhone = $_POST["pharmacyPhone"];
$rxNumber = $_POST["rxNumber"];
$drName = $_POST["drName"];
$drPhone = $_POST["drPhone"];
$message = $_POST["message"];

$content = "First Name: " . $first . "\nLast Name:" . $last . "\nE-mail: " .$email . "\nPhone: " . $phone . "\nPharmacy Name: " . $pharmacyName . "\nPharmacy Phone: " . $pharmacyPhone . "\nRx Numbers:" . $rxNumber . "\nDr Name: " . $drName .  "\n Dr Phone: " . $drPhone .  "\nMessage: " .$message;

mail($to, "Contacto desde Transfer Prescription", $content);
header("location: ../index.html");




?>