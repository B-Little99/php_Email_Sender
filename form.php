<?php

$name = $_POST['name'];
$userEmail = $_POST['email'];
$userMessage = $_POST['message'];

$emailFrom = "CompanyName@hotmail.com";
$emailSubject = "Form submission";
$emailBody = "Username: $name \nUser email: $userEmail \nUser message: $userMessage";

$sendTo = "brandonlittle2406@gmail.com";

$headers = "From: $emailFrom \r\nReply to: $userEmail";

mail($sendTo, $emailSubject, $emailBody, $headers);

header("Location: index.html")

?>