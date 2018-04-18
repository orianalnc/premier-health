<?php


$to = "info@qubitmarketing.com";

$first = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

$content = " Name: " . $name . "\nLast Name:" . $last . "\nE-mail: " .$email . "\nPhone: " . $phone . "\nMessage: " .$message;

mail($to, "Contacto desde Contacts Form Premier Pharmacy Health", $content);
header("location: ../index.html");


?>