<?php

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";///your smtp host 
$mail->Port =465; // or 587
$mail->IsHTML(true);
$mail->Username = "support@abhiandroid.com";////your username
$mail->Password = "Andabhi@143";//your password
$mail->isHTML(true);
$mail->SetFrom("support@abhiandroid.com","FOOD ORDERING APP");

$mail->Body = "$message";

?>
