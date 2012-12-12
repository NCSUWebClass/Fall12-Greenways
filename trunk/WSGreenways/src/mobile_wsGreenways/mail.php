<?php
	$mail = $_POST['mail'];
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$text = $_POST['text'];
	
 $to = "wilkinsonmarcia@bellsouth.net";
 $message ="You received an email from: $name\n"."Email:$mail\n"."Subject: $subject\n"."Text of the message: $text";

 if(mail($to, $subject,$message)){
	echo "Email sent successfully.";
	
} 
else{ 
	echo "There are some errors. Email not sent";
}
?>