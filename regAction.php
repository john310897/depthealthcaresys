<?php
include("connection.php");
?>
<?php
$usn=$_POST['usn'];
$n=$_POST['uname'];
$dob=$_POST['dob'];
$bg=$_POST['bg'];
$cp=$_POST['cp'];
$b=$_POST['b'];

$query="insert into student values('$usn','$cp','$n','$b','$dob','$bg')";
$data=mysqli_query($con,$query);
if($data)
{
    header("location:login.php");
}
else
{
  echo "not able to insert data";
}
?>
