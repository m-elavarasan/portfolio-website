<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "elasty2019@gmail.com";
$subject = "Mail From ELAVARASAN.ENGINEER";
$txt ="Name : ". $name . "\r\n  Email : " . $email . "\r\n Phone : " . $phone . "\r\n Message :" . $message;
$headers = "From: noreply@elavarasan.engineer" . "\r\n" ;
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>