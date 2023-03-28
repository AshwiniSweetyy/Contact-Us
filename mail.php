<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$phone= $_POST['phone'];
$company= $_POST['ompany'];
$to = "natikarashwini@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt);
}
//redirect
header("Location:thankyou.html");
?>