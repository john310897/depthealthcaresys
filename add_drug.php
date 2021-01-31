<?php
session_start();
include("bootstrap.php");
//include("header.php");
include("headers_include.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        #text{
            width: 550px;
            height: 50px;
        }
        body{
            background-color: cornsilk;
        }
    </style>
</head>
<body>
    <h4 align="center">ADD DRUG</h4><br/>
    <div class="container">
    <form class="form-group" method="post">
        <input type="text" class="form-control" placeholder="INJURY" name="inj" required><br/>
        <textarea class="form-control" placeholder="Add Discription About The Injury" name="injd" required></textarea><br/>
        <input type="text" class="form-control" placeholder="Drug Used" name="du" required><br/>
        <textarea class="form-control" placeholder="Purpose of the Drug" name="pod" required></textarea><br/>
        <input type="number" class="form-control" placeholder="Quantity" name="stock" required><br/>
        <br/>
        <input type="submit" value="Add Drug" class="btn btn-success" id="text" name="add_drug">
        <input type="reset" value="Reset" class="btn btn-primary" id="text">
        
    </form>
    </div>
</body>
</html>
<?php
include("connection.php");
if(isset($_POST['add_drug'])){
    echo "hello";
    $inj=$_POST['inj'];
    $injd=$_POST['injd'];
    $du=$_POST['du'];
    $pod=$_POST['pod'];
    $s=$_POST['stock'];
    
    $query="select * from drugs where dt='$inj'";
    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_array($data);
    if($inj==$result['dt']){
        $query2="update drugs set drug_used='$du',purpose='$pod',description='$injd',stock=stock+'$s' where dt='$inj'";
        $data2=mysqli_query($con,$query2);
        if($data2){
            echo "drug updated successfully";
        }
        else{
            echo "unable to update the drug";
        }
        
    }
    else{
        $query3="insert into drugs values('$inj','$du','$pod','$injd','$s')";
        $data3=mysqli_query($con,$query3);
        if($data3){
            echo "updated";
        }
        else{
            echo "not inserted";
        }
    }
    
}
?>