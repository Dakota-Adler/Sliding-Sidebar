<?php

//$to = "Terry@poshpatio.ca"; // required
$to = "zeketiki@gmail.com"; // required
$from = "From: Contact@PoshPatio.com";
$subject = "Free Quote"; // required
$Name = $_POST['Name']; // required
$Email = $_POST['Email']; // required
$Phone = $_POST['PhoneNumber']; // not required
$email_message = $_POST['Message']; // required

$Subject_message = "Form details below.\n\n";
$Subject_message .= "Name: " . $Name . "\n";
$Subject_message .= "Email: " . $Email . "\n";
$Subject_message .= "Phone Number: " . $Phone . "\n";
$Subject_message .= "Message: \n" . $email_message . "\n";

if (mail($to, $subject, $Subject_message, $from)) {
    mail($Email, 'Thank you for contacting support!', "We've successfully received your message regarding. \n We'll do our best to answer your question to the best of our ability. \n Thank you for contacting us!", $from);
    header("Location: index.html?sent=true");
} else {
    header("Location: index.html");
}
