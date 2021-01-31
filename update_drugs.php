<?php include("bootstrap.php");
include("userheader.php");
include("connection.php");
$x=$_GET['a'];
$query="select * from drugs where dt='$x'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_array($data);
if($data){
    echo "error";
}
else{
    echo "hi";
}
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
        <h4 align="center">UPDATE DRUG</h4><br/>
    <div class="container">
    <form class="form-group" method="post">
        <input type="text" class="form-control" placeholder="INJURY" name="inj" required value="<?php echo $result['dt']; ?>"><br/>
        <textarea class="form-control" placeholder="Add Discription About The Injury" name="injd" required ><?php echo $result['description']; ?></textarea><br/>
        <input type="text" class="form-control" placeholder="Drug Used" name="du" required value="<?php echo $_GET['c'] ?>"><br/>
        <textarea class="form-control" placeholder="Purpose of the Drug" name="pod" required ><?php echo $result['purpose']; ?></textarea><br/>
        <input type="number" class="form-control" placeholder="Quantity" name="stock" required value="<?php echo $_GET['e'] ?>"><br/>
        <br/>
        <input type="submit" value="Update" class="btn btn-success" id="text" name="update">
        <input type="reset" value="Reset" class="btn btn-primary" id="text">
        
    </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['update'])){
    echo "hello";
    $dt=$_POST['inj'];
    $d=$_POST['injd'];
    $du=$_POST['du'];
    $pod=$_POST['pod'];
    $s=$_POST['stock'];
    $query2="update drugs set drug_used='$du',purpose='$pod',description='$d',stock=stock+'$s' where dt='$dt'";
    $data=mysqli_query($con,$query2);
    if($data){
        ?>
        <script src="jquery/jquery-3.3.1.min.js"></script>
        <script>
$(document).ready(function(){
    alert("drug updated successfully");
    $(location).attr('href',"view_drugs.php");
});


</script>
        
        
        <?php
        
    }
}

?>