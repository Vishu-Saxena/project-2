<?php
//get data from form  
$fname = $_POST['firstname'];
$email= $_POST['email'];
//$message= $_POST['message'];
$to = "mansisaxena670@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $fname . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thanks.html");
?>