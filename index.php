<?php session_start();
include("headers_include.php");
include("connection.php");
$query="select * from drugs";
$data=mysqli_query($con,$query);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
       <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    -->
      <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            color:lightblue;
        }
        ul li{
            float: left;
            margin:5px;
            text-decoration: none;
            list-style: none;
            display: block;
        
            
        }
        #nav{
            background-color: darkslategrey;
            margin-top: -8px;
            color: white;
            font-weight:;
            height: 50px;
            
        }
        .report{
            font-weight: bold;
            
        }
       li a{
            text-decoration: none;
            color: white;
        }
         ul li a:hover{
            cursor: pointer;
            color: white;
            border-bottom: 2px solid yellow;
            
        }
        .active{
        
            color: white;
            border-bottom: 2px solid yellow;
       }
        
        #ds,#mu,#pu{
            display: none;
        }
       /* #ds{
            background-color:lightgreen;
            color: black;
            opacity: 0.7;
        }
        #mu{
            background-color:lightcoral;
            color: black;
            opacity: 0.7;
            
        }
        #pu{
            background-color:lightgreen;
            color: black;
            opacity: 0.7;
        }*/
    </style>
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#ds').fadeIn("slow");
        $('#mu').fadeIn(2000);
        $('#pu').fadeIn(3000);
    })
    </script>
    
</head>
<body>
   
   
   <!--<nav class="navbar navbar-inverse navbar-fixed-top" id="nav">
       <div class="container-fluid">
          <div class="headertxt">
              <h4><span class="glyphicon glyphicon-user"></span>   ></h4>
          </div>
          <ul>
                <li class="active"><a href="index.php">First-aid</a></li>
              <li><a href="medication_added.php" class="mu">Medications-added</a></li>
              <li><a href="profile.php" class="p">Profile</a></li>
              <li><a href="login.php">Logout</a></li>
          </ul>
           
       </div>
   </nav>
   -->
   <div class="container">
      <form method="post">
          <h2 style="color:white">Welcome to the first aid menu</h2><br/>
       Select your injury
      <select class=form-control name="injuries" style="background-color:gray;color:white;opacity:0.8">
         <?php
          while($result=mysqli_fetch_array($data)){
              echo "
       
           <option value=".$result['dt'].">".$result['dt']."</option>
       
          "; }?>
          </select>
       <br/><button class="btn btn-primary" name="button1">Get Report</button>
       
       </form>
   </div>
   

</body>
</html>
<?php
if(isset($_POST['button1'])){
   include("connection.php");
    //session_start();
    error_reporting(0);
    // echo "button is pressed";
    $inj=$_POST['injuries'];
$query="select * from drugs where dt ='$inj'";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_array($data);
$_SESSION["drug"]=$result['drug_used'];
if($result){
    ?>
    <br/><br/><br/>
    <div class="report">
    <div class="container" id="ds">
       <h2>Description</h2>
        <p><?php echo $result['description']; ?></p>
    </div><br/>
    
    <div class="container" id="mu">
       <h2>Medication used</h2>
        <p><?php echo $result['drug_used']; ?></p>
    </div><br/>
    
    <div class="container" id="pu">
       <h2>Purpose</h2>
        <p><?php echo $result['purpose']; ?></p>
        <form method="post">
    <button class="btn btn-success" name="get">Get</button>
        </form>
    </div><br/>
    
</div>
    <?php
}
    
}
    if(isset($_POST['get'])){
        include("connection.php");
        //session_start();
        error_reporting(0);
        $u=$_SESSION['usn'];
        $du=$_SESSION['drug'];
        
        $query="select * from student where usn='$u'";
        $queryA="select * from drugs where drug_used='$du'";
        $data=mysqli_query($con,$query);    
        $total=mysqli_num_rows($data);
        $result=mysqli_fetch_array($data);
        
        $dataD=mysqli_query($con,$queryA);    
        $totalD=mysqli_num_rows($dataD);
        $resultD=mysqli_fetch_array($dataD);
        $drug_stock=$resultD['stock'];
        
        $n=$result['name'];
        $u1=$result['usn'];
        $b=$result['branch'];
        
        if($drug_stock>0){
        
            $result=mysqli_query($con,"select * from student_drug where usn='$u1' and du='$du'")or
            die("unable to query");
            $row=mysqli_fetch_array($result);
                if($row['usn']==$u1 && $row['du']==$du){
                    $update="update student_drug set stock=stock+1,status='requested' where usn='$u1' and du='$du'";
                     $query2="update drugs set stock=stock-1 where drug_used='$du'";
                    $d=mysqli_query($con,$update);
                        if($d){
                             ?>
        <script src="jquery/jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function(){
                alert("drug added to your cart");
            });
            

</script>
        
        <?php
            $data1=mysqli_query($con,$query2);
        if($data1){
            ?>
        <script src="jquery/jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function(){
                alert("Stock Updated");
            });
            

</script>
        
        <?php
            
        }
        else{
            
            ?>
        <script src="jquery/jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function(){
                alert("stock not updated");
            });
            

</script>
        
        <?php
            
        }
                            
                        }
                }else{
                    
                    
                    $query1="insert into student_drug values('$n','$u1','$b','$du',1,'requested')";
                    $query2="update drugs set stock=stock-1 where drug_used='$du'";
                    $data=mysqli_query($con,$query1);
                    if($data)
                    {
        ?>
        <script src="jquery/jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function(){
                alert("drug added to your cart");
            });
            

</script>
        
        <?php
            $data1=mysqli_query($con,$query2);
        if($data1){
            echo "stock updated";
            
        }
        else{
            echo "stock not updated";
        }
        }
        else
        {
        echo "not able to insert data".$du.mysqli_error($con);
        }
        
        }
                    
                }
                

            
    else{
            ?>
            <script src="jquery/jquery-3.3.1.min.js"></script>
            <script>
            $(document).ready(function(){
                alert("drug out of stock");
            });

</script>
            
            
            <?php
        }
    }
?>
    
    



