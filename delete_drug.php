<?php
include("bootstrap.php");
include("connection.php");
//include("userheader.php");
$a=$_GET['a'];
echo $a;
$query="delete from drugs where dt='$a'";
$data=mysqli_query($con,$query);
if($data){
    header("location:view_drugs.php");
}
else{
    echo "unable to delete";
}
?>