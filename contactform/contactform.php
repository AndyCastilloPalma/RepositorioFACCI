<?php

// CHANGE THE VARIABLES BELOW

$EmailFrom = "anlecap17@gmail.com";
$EmailTo = "anlecap17@gmail.com";
$Subject = "Formulario de contacto";

$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Subject = Trim(stripslashes($_POST['subject'])); 
$Message = Trim(stripslashes($_POST['message'])); 

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $Subject;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
// CHANGE THE URL BELOW TO YOUR "THANK YOU" PAGE

?>