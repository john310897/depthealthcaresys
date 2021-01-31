<?php
include("connection.php");
$n=$_POST['uname'];
$p=$_POST['up'];
$result=mysqli_query($con,"select * from student where usn='$n' and password='$p'")or
    die("unable to query");

$row=mysqli_fetch_array($result);
if($row['usn']==$n && $row['password']==$p){
    session_start();
    $_SESSION["usn"]=$n;
    //echo "login successfull welcome".$_SESSION['username'];
    header("location:index.php");
}
else{
    echo "invalide username and password";
}

?>