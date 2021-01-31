
<?php


    
	// Authorisation details.
	$username = "john310897@gmail.com";
	$hash = "01e50e9d41fd8d62b39c72d7eb498d93eb78b04b28cbbb7dbd97ebf5d1926101";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "918618390387"; // A single number or a comma-seperated list of numbers
	$message = "This is a test message from the PHP API script.";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);

/*$to="john310897@gmail.com";
$from="john310897@gmail.com";
$message="this is a test message";
$headers="From: $from\n";
$p=mail($to,"",$message,$headers);
if($p){
    echo "message sent";
}
else{
    echo "not sent";
}*/
?>