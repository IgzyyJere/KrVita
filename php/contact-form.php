<?php
// Information to be modified
$to_email = "info@curavita24.com"; // email address to which the form data will be sent
$subject = "Contact Request"; // subject of the email that is sent
$thanks_page = "index.html"; // path to the thank you page following successful form submission
$contact_page = "index.html"; // path to the HTML contact page where the form appears


$nam = strip_tags($_POST["contact_name"]);
$ema = strip_tags($_POST["contact_email"]);
$pho = strip_tags($_POST["contact_phone"]);
$com = strip_tags($_POST["contact_message"]);

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: <' .$ema. '>' . "\r\n";
$headers .= "Reply-To: ".$ema."\r\n";

$email_body = 
	"<strong>Ime i prezime: </strong>" . $nam . "<br />
	<strong>Email: </strong>" . $ema . "<br />	
	<strong>Telefon: </strong>" . $pho . "<br />	
	<strong>Vaša poruka: </strong>" . $com;
	

// Assuming there's no error, send the email and redirect to Thank You page
if( mail($to_email, $subject, $email_body, $headers) ) {		$msg_array = array( 'status' => 'true', 'data' => '<i class="glyphicon glyphicon-ok"></i> Hvala Vam ' .$nam. '. Vaš email je usješno poslan!' );   	echo json_encode($msg_array);	} else {		$msg_array = array( 'status' => 'true', 'data' => '<i class="glyphicon glyphicon-remove"></i> Oprostite ' .$nam. '. Vaš email nije poslan. Molimo vas pošaljite opet..' );   	echo json_encode($msg_array);	}