<?php
$server="localhost";
$username="root";
$password="";
$db="health_care";
$con=mysqli_connect($server,$username,$password,$db);
if($con){
    //echo "connection successful";
}
else{
    echo "connection unsuccessful";
}
?>