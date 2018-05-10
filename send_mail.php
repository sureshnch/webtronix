<?php
	$to = "jdrendon@imaginacionweb.net,jmartinez@imaginacionweb.net"; /*Your Email*/
	$subject = "Demo from Real State Template"; /*Issue*/
	$date = date ("l, F jS, Y"); 
	$time = date ("h:i A"); 	
	$Email=$_REQUEST['Email'];

	$msg="
	Name: $_REQUEST[Name]
	Email: $_REQUEST[Email]
	Phone: $_REQUEST[Phone]	
	
	Message sent from website on date  $date, hour: $time.\n

	Message:
	$_REQUEST[message]";

	if ($Email=="") {
		echo "Please enter your email";
	}
	else{
		mail($to, $subject, $msg, "From: $_REQUEST[Email]");
		echo "Thank you for your message....";	
	}
	
?>
