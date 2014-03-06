<?php
// Pick up the form data and assign it to variables
$name = $_POST['name'];
$email= $_POST['email'];
$message = $_POST['message'];


$to = ": igitcsi@gmail.com";
$subject = "Query";
$headers = "From: $email";
mail($to,$subject,$message,$headers);

echo "Your query has been sent.<br>Shall respond as soon as possible<br>Thanks for the query.";
?> 
