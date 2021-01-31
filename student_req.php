<?php
session_start();
include("bootstrap.php");
include("headers_include.php");
include("connection.php");
$query="select * from student_drug";
//$data=mysqli_query($con,$query);
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);

//$result=mysqli_fetch_array($data);
if($total!=0)
{  
    echo "
    <h3>Student Medication Request</h3><br/><br/><br/><br/>
    <div class=container-fluid>
    <form method=post>
    <table align=center cellspaceing=5 colspaceing=5 class='table table-striped table-dark' id=tab1>
          <tr>
              <th scope=col>Name</th>
              <th scope=col>USN</th>
              <th scope=col>Branch</th>
              <th scope=col>Medications</th>
              <th scope=col>Quantity</th>
              <th colspan=2> Status</th>
          </tr>
          ";
    
    while($result=mysqli_fetch_array($data))
    {
     echo "<tr>
               <td>".$result['name']."</td>
               <td>".$result['usn']."</td>
               <td>".$result['branch']."</td>
               <td>".$result['du']."</td>
               <td>".$result['stock']."</td>
               <td>".$result['status']."</td>
               <td><a href='student_requpdate.php?a=$result[usn]&b=$result[du]' class='btn btn-success' name='deliver'>Deliver</a></td>
               
               "; 
    }

}

else
{
 echo "No records to display";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<style>
    #tab1{
        margin-top: -4%;
    }
    </style>
</head>
<body>
    
</body>
</html>
<?php
if(isset($_GET['deliver'])){

}
?>