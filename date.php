

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="submit" value="request" name="req">
    </form>
</body>
</html>




<?php
if(isset($_POST['req']))
{

date_default_timezone_set('Asia/Kolkata');
echo date("h:i:s:A");
    
    
if(date("h")<10){
    echo "please come and collect it in a tea break";
    $username = "john310897@gmail.com";
	$hash = "01e50e9d41fd8d62b39c72d7eb498d93eb78b04b28cbbb7dbd97ebf5d1926101";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "918618390387"; // A single number or a comma-seperated list of numbers
	$message = "please come and collect it in a tea break";
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
    
    
    
    
    
    
    
}else if(date("h")>10){
    echo "please come and collect in lunch break";
    echo "please come and collect it in a tea break";
    $username = "john310897@gmail.com";
	$hash = "01e50e9d41fd8d62b39c72d7eb498d93eb78b04b28cbbb7dbd97ebf5d1926101";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "918618390387"; // A single number or a comma-seperated list of numbers
	$message = "please come and collect in lunch break";
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
    
        
    
}
else{
    echo "come and collect it after 4:30";
    
    echo "please come and collect after 4:30";
    echo "please come and collect it in a tea break";
    $username = "john310897@gmail.com";
	$hash = "01e50e9d41fd8d62b39c72d7eb498d93eb78b04b28cbbb7dbd97ebf5d1926101";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "918618390387"; // A single number or a comma-seperated list of numbers
	$message = "please come and collect after 4:30";
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
}
?>