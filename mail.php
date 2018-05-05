<?php
include 'core.inc.php';
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/OAuth.php';
require 'PHPMailer/src/POP3.php';
require 'autoloader.php';
$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host='smtp.gmail.com';
$mail->Port='465';
$mail->isHTML();
$mail->Username='amazoneonlineshopcart@gmail.com';
$mail->Password='amazone123123123';
$mail->SetFrom('no-reply@howcode.org');
$mail->Subject='Amount To Pay';
$mail->Body='<p><h1>It is out for delievery and will arrive within one week  You have to pay Rs '.$_SESSION['amount'].'<br>All taxes and charges are included</h1></p>';
$mail->AddAddress($_SESSION['emailid']);
if($mail->Send()){
header('Location: home.html');
}
else{
	echo 'Failed to send Message';
	}
?>