<?php
include('smtp/PHPMailerAutoload.php');
$html='Here is the application form to be filled for recruitmemt at the company: https://docs.google.com/forms/d/e/1FAIpQLSfBLrwoAku3c6kcJAuJwJ-sy5yiOXiJO34Z8sNE37pQgm07gg/viewform?usp=sf_link';
echo smtp_mailer('nayaktripti0@gmail.com','subject',$html);
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "nehapattankar@gmail.com";
	/* Put your gmail password here*/
	$mail->Password = "Password";
	$mail->SetFrom("nehapattankar@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		
		header("Location: SE.php");
		return 'Sent';
		
	}
}
?>
