<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<style>
    
    .mu{
        
            color: white;
            border-bottom: 2px solid yellow;
       }
    #tab1{
        margin-top: -5%;
    }
    </style>
</head>
<body>

</body>
</html>
<?php
session_start();

include("headers_include.php");
include("connection.php");

error_reporting(0);
?>
<?php
$u=$_SESSION["usn"];
$a=$_SESSION['user'];
$query="select * from student_drug where usn='$u'";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);

//$result=mysqli_fetch_array($data);
if($total!=0)
{  
    echo "<h3 align=center>Medications Added</h3><br/><div class=container><table align=center cellspaceing=5 colspaceing=5 class='table table-striped table-dark' id=tab1>
          <tr>
              <th scope=col>Name</th>
              <th scope=col>USN</th>
              <th scope=col>Branch</th>
              <th scope=col>Medication's</th>
              <th scope=col>Medications used</th>
              <th scope=col>Status</th>
              
              
          </tr>";
    while($result=mysqli_fetch_array($data))
    {
     echo "<tr>
               <td>".$result['name']."</td>
               <td>".$result['usn']."</td>
               <td>".$result['branch']."</td>
               <td>".$result['du']."</td>
               <td>".$result['stock']."</td>
               <td>".$result['status']."</td>
               
               
 
          </tr>"."<br><div>"; 
    }

}
else
{
 echo "No records to display";
}

?>