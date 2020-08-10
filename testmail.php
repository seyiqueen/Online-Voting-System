<?php
$reciepient = 'megoseni0569@gmail.com';
$subject = "This is the subject of the mail";
$mail = "This is the mail";
$header = "From: sodiposeyi@gmail.com";
 //mail($reciepient, $subject, $mail, $header);

 if(mail($reciepient, $subject, $mail, $header)){
     echo "It has sent";
 }else {
     echo "Could not send the mail";
 }
?>