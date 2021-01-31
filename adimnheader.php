<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
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
        /*.report{
            font-weight: bold;
            
        }*/
       li a{
            text-decoration: none;
            color: white;
        
           
        }
        ul li a:hover{
            cursor: pointer;
            color: white;
            border-bottom: 2px solid yellow;
            
        }
    </style>
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#description').fadeIn("slow");
    })
    </script>
    
</head>
<body>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <?php include("header.php") ?>
   
   <nav class="navbar navbar-inverse navbar-fixed-top" id="nav">
       <div class="container-fluid">
          <div class="headertxt">
              HCA
          </div>
          <ul>
              <li class="active"><a href="index.php">First-aid</a></li>
              <li><a href="medication_added.php" class="mu">Medications-added</a></li>
              <li><a href="profile.php" class="p">Profile</a></li>
              <li><a href="view_drugs.php" class="">View Drugs</a></li>
              <li><a href="add_drug.php" class="">Add drug</a></li>
                 <li><a href="student_req.php" class="">Student request</a></li>
                 <li><a href="emergency_menu.php" class="em">Report Emergency</a></li>
                 
                 
              <li><a href="login.php">Logout</a></li>
          </ul>
           
       </div>
   </nav>
   