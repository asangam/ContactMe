<?php

$EmailFrom="san.adh2010@gmail.com";
$EmailTo="san.adh2010@gmail.com";
$Subject="Email from the Contact Form";
$Name=Trim(stripslashes($_POST['Name']));
$Email=Trim(stripslashes($_POST['Email']));
$Message=Trim(stripslashes($_POST['Message']));

// simple way to validate the form
$ValidationOk=true;
if ($Name == "") $ValidationOk=false;
	if (!$ValidationOk) {
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=ContactMe\error.html\">";
		exit;
	}
		
		// preparing the body of the email 
	$Body="";
	$Body.="Name: ";
	$Body.=$Name;
	$Body.="\n";

	$Body.="Email: ";
	$Body.=$Email;
	$Body.="\n";

	$Body.="Message: ";
	$Body.=$Message;
	$Body.="\n";

	//sending the email now
	$success=mail($EmailTo, $Subject, $Body,"From: <$EmailFrom>");

	//redirect after mail send 
	if ($success) {
 
       print "<meta http-equiv=\"refresh\" content=\"0;URL=send.html\">";

	}
	else {

		print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";

	}
?>