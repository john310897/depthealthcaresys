<?php
include("bootstrap.php");
include("userheader.php");
include("connection.php");
$query="select * from drugs";
$data=mysqli_query($con,$query);
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);

//$result=mysqli_fetch_array($data);
if($total!=0)
{  
    echo "
    <h3 align=center>Drugs Available</h3><br/><br/>
    <div class=container-fluid>
    <form method=post>
    <table align=center cellspaceing=5 colspaceing=5 class='table table-striped table-dark' id=tab1>
          <tr>
              <th scope=col>Injury</th>
              <th scope=col>Description</th>
              <th scope=col>Drug used</th>
              <th scope=col>Purpose</th>
              <th scope=col>Stock</th>
              
          </tr>
          ";
    
    while($result=mysqli_fetch_array($data))
    {
     echo "<tr>
               <td>".$result['dt']."</td>
               <td>".$result['description']."</td>
               <td>".$result['drug_used']."</td>
               <td>".$result['purpose']."</td>
               <td>".$result['stock']."</td>";
               
              
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
