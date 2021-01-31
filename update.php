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

$query="update student set password='$cp',name='$n',branch='$b',dob='$dob',bg='$bg' where usn='$usn'";
$data=mysqli_query($con,$query);
if($data)
{
    echo "updated";
}
else
{
  echo "not able to insert data";
}
?>
