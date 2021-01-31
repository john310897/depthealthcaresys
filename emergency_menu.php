<?php
include("headers_include.php");
include("bootstrap.php");
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            color:white;
        }
    </style>
</head>
<body>
    <div class="container">
       <form method="post">
        <h2>Report Your Emergency</h2>
        <input type="text" name="usn" class="form-control"><br>
        <input type="submit" name="report" value="Report" class="btn btn-success" id="button">
        <a href="newreg.php">register ur number for emergency if new</a>
        </form>
        <br/><br/>
       
        </div>
    
</body>
</html>
<?php
if(isset($_POST['report'])){
    $u=$_POST['usn'];
    $n=91;
    $query="select * from student1 where usn='$u'";
    $data=mysqli_query($con,$query);
    if($data){
        $result=mysqli_fetch_array($data);
        $e1=$n.$result['emr1'];
        $e2=$n.$result['emr2'];
        /*echo $e1."<br/>";
        echo $e2;
        */
        //sms code 
	// Authorisation details.
	/*$username = "john.18mca64@cambridge.edu.in";
	$hash = "d25a8b47a7a3f7f2c4b4f46e7a4f0f5367324ca9ccb24966e172b3f816d5ab7f";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $e2; // A single number or a comma-seperated list of numbers
	$message = "your son/daughter is in the medical emergency please contact college";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);*/
        
        
        
        
	// Authorisation details.
	$username = "abhisahani1993@gmail.com";
	$hash = "16abde890ae3bad8559990a8e7b403d57b378fbc2deba57102c2d568c10ee598";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $e2; // A single number or a comma-seperated list of numbers
	$message = "Your son/daughter is in medical emergency please contact college";
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

    
        ?>
    <script>
window.open("https://www.google.com/maps/search/hospital/@12.3270214,76.68019,14z/data=!3m1!4b1!4m8!2m7!3m6!1shospital!2sVisvesvaraya+Technological+University,+Regional+Center+Mysuru,,+Layout,+Hanchya,+Ring+Rd,+Sathagalli+Layout,+Mysuru,+570019!3s0x3baf71ba82d3f275:0x6514deb3594ad9dd!4m2!1d76.6976997!2d12.3269696!5m1!1e1");
</script>
    <?php

        
    }
        
}
?>


<?php
if(isset($_POST['reg1'])){
    header("location:newreg.php");
}
?>