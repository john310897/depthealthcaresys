<?php
session_start();
include("bootstrap.php");
include("headers_include.php");
include("connection.php");
$query="select * from drugs";
$data=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="container">
      <form method="post" action="">
          <h2>Welcome to the first aid menu</h2><br/>
       Select your injury
      <select class=form-control name="d">
         <?php
          while($result=mysqli_fetch_array($data)){
              echo "
       
            <option value='$result[drug_used]'>$result[drug_used]</option>
          "; }?>
          </select>
       <br/>
       <input type="submit" value="request" name="button1" class="btn btn-primary">
    </form>
   </div>
   

</body>
</html>
<?php
if(isset($_POST['button1'])){
    $drug=$_POST['d'];
    echo $drug;
    $query="select * from drugs where drug_used='$drug'";
    $data1=mysqli_query($con,$query);
    $result1=mysqli_fetch_array($data1);
    if($result1['stock']>0){
        echo "drug available :".$result1['stock']."<br/>";
        date_default_timezone_set("Asia/Kolkata");
        $dateTime = new DateTime();
        echo $dateTime->format('d-m-Y H:i:s');
        mail("+918618390387@textlocal.in","from submission","hello world","john310897@gmail.com");s
    }
    else{
        echo "drug not available";
    }
}
?>