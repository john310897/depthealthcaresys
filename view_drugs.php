<?php
session_start();
include("bootstrap.php");
include("headers_include.php");
include("connection.php");
$query="select * from drugs";
$data=mysqli_query($con,$query);
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);

//$result=mysqli_fetch_array($data);
if($total!=0)
{  
    echo "
    <h3 align=center>Update/Delete Drugs</h3>
    <div class=container-fluid>
    <form method=post>
    <table align=center cellspaceing=5 colspaceing=5 class='table table-striped table-dark' id=tab1>
          <tr>
              <th scope=col>Injury</th>
              <th scope=col>Description</th>
              <th scope=col>Drug used</th>
              <th scope=col>Purpose</th>
              <th scope=col>Stock</th>
              <th colspan=2> Operations</th>
          </tr>
          ";
    
    while($result=mysqli_fetch_array($data))
    {
     echo "<tr>
               <td>".$result['dt']."</td>
               <td>".$result['description']."</td>
               <td>".$result['drug_used']."</td>
               <td>".$result['purpose']."</td>
               <td>".$result['stock']."</td>
               
               
               <td><form method=post><a href='update_drugs.php?a=$result[dt] &b=$result[description] &c=$result[drug_used] &d=$result[purpose] &e=$result[stock]'>Update</a></form></td>
               
               <td><a href=delete_drug.php?a=$result[dt] name=delete>Delete</a></td>
               </tr>"."<br></form>"; 
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
