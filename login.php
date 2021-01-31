   <?php include("header.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   
   
        <meta charset="UTF-8">
    <title>Document</title>

    
<style>
    body{
        margin: 0;
        padding: 0;
        background-image: url(images/1.jpg);
        background-size: auto;
        background-repeat: no-repeat;
    }
    #row1{
        
        background-color: grey;
 
        
    }
    ul li{
        text-decoration: none;
        float: left;
        display: block;
        margin-left: 5px;
    }
    
    #img1{
        margin-left: 0;
        padding: 0;
        margin-top: -7px;
        height: 600px;
        
    }
    #textbox{
        max-width: 40%;
        margin-left: 30%;
        height: 50px;
        
    }
    #log{
        margin-top: 15%;
        
    }
    #link{
        max-width: 40%;
        margin-left: 40%;
        height: 50px;
        
    }
    #text{
        width: 40%;
        margin-left: 30%;
    }
   
    #d{
        
        background-color: red;
        
        
    }
    form{
        display: none;
    }
   
    </style>
<script src="jquery/jquery-3.3.1.min.js"></script>
 <script>
    $(document).ready(function(){
        //alert("hello");
        //$(".abc").fadeIn("slow");
        //$("form").css("background-color","green");
        $("form").hide().fadeIn(1000);
    });
    </script>
    
</head>
<body> 
       <div class="container" width="0" id="log">
          <form method="post" action="">
           <input type="text" class="form-control" placeholder="enter your USN" name="uname" id="textbox" required>
           <br/><br/>
           <input type="password" class="form-control" placeholder="enter your password" name="up" id="textbox" required>
           <br/>
           <input type="submit" value="LOGIN" class="btn btn-success" id="text" name="login">
           <a href="register.php" id="link">New user?click here to register</a>
           </form>
   </div>
    
    
</body>
</html>

<?php
if(isset($_POST['login'])){
 //   echo "hello";
    include("connection.php");
$n=$_POST['uname'];
$p=$_POST['up'];
    $query1="select * from student where usn='$n' and password='$p'";
$result=mysqli_query($con,"select * from student where usn='$n' and password='$p'")or
    die("unable to query");
    
$data=mysqli_query($con,$query1);
$total=mysqli_num_rows($data);
$result1=mysqli_fetch_array($data);

  
    //$row=mysqli_fetch_array($result1);
    
if($result1['usn']==$n && $result1['password']==$p){
    session_start();
    $_SESSION['person']="user";
    $_SESSION["usn"]=$n;
    $n1=$result1['name'];
    $_SESSION['user']=$n1;
    //echo "login successfull welcome".$_SESSION['username'];
   ?>
   <script>
window.location="index.php";

</script>
   <?php
}
    
    else{
    //echo "invalide username and password";
    ?>
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function(){
            alert("Invalid Username/Password");
        });
</script>
    
    
    <?php
}
}
?>
