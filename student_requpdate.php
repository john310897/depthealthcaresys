<?php
   include("connection.php");
    $u=$_GET['a'];
$d=$_GET['b'];
    $query11="update student_drug set status='delivered',stock=0 where usn='$u' and du='$d'";
    $data11=mysqli_query($con,$query11);
    if($data11){
        ?>
        <script>
alert("Medication Deliverd");
window.location="student_req.php";            
</script>
        <?php
    }else{
        
?>
        <script>
alert("Not Delivered");
            window.location="student_req.php";        
</script>
        
        <?php
    }
?>