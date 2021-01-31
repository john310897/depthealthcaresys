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
$e1=$_POST['e1'];
$e2=$_POST['e2'];

$query="insert into student1 values('$usn','$cp','$n','$b','$dob','$bg','$e1','$e2')";
$data=mysqli_query($con,$query);
if($data)
{
    header("location:emergency_menu.php");
}
else
{
  echo "not able to insert data";
}
?>
