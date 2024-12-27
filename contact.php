<?php
// Get data from the form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "guddugaria2002@gmail.com";
$subject = "Contacted From Webpage";

$txt ="Name = ". $name . "\r\n  Email = " 
    . $email . "\r\n Message =" . $message;

if($email != NULL) {
    mail($to, $subject, $txt);
}

// Redirect to
header("Location:last.html");
?>
