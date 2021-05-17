<?php
// Before using $_POST['value'] 
if(isset($_POST['date']) && isset($_POST['company']) && isset($_POST['name']) && isset($_POST['address']) && isset($_POST['zipcode']) && isset($_POST['state']) && isset($_POST['state']) && isset($_POST['call']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['recycle']) && isset($_POST['message']) && isset($_POST['problems']) && isset($_POST['warranty']) && isset($_POST['comments']))

{
$date = $_POST['date'];
$company = $_POST['company'];
$name = $_POST['name'];
$address = $_POST['address'];
$zipcode = $_POST['zipcode'];
$state = $_POST['state'];
$call = $_POST['call'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$recycle = $_POST['recycle'];
$computer_specs = $_POST['message'];
$formcontent="From: $name \n Message: $computer_specs";
$computer_prob = $_POST['problems'];
$formcontent2="From: $name \n Message: $computer_prob";
$warranty = $_POST['warranty'];
$comments = $_POST['comments'];
$formcontent3="From: $name \n Message: $comments";

// Who the form answers are sent to (Obsolete, JS used into Google Sheets)
$recipient = "zaden.connell@gmail.com";

// The subject
$subject = "Contact Form";

// Who the answers are from
$mailheader = "From: $email \r\n";

// Declare and mail the items
mail($recipient, $subject, $mailheader, $date, $company, $name, $address, $zipcode, $state, $call, $phone, $email, $recycle, $computer_specs, $formcontent, $computer_prob, $formcontent2, $warranty, $comments, $formcontent3) or die("Error!");
}

// After submit
echo "Thank You! Your response has been submitted."
?>