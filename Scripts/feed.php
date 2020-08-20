<?php
$errors = ”;
$myemail = ‘jasoncoleman83k@gmail.com’;//<—–Put Your email address here. 
$name = $_POST[‘firstname’];
$lastname = $_POST[’lastname’];
$message = $_POST[‘message’];

$to = $myemail;
$email_subject = “Contact form submission: $name”;
$email_body = “You have received a new message. “.
” Here are the details:\n Name: $firstname \n “.
“Email: $lastname\n Message \n $message”;
$headers = “From: $myemail\n”;
$headers .= “Reply-To: $myemail”;
mail($to,$email_subject,$email_body,$headers);
//redirect to the ‘thank you’ page
header(‘Location: contact.html’);
?>