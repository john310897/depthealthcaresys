<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script>
    $(document).ready(function(){
                    
                      $("#tab").fadeOut("slow");
                      });
    
    </script>
   <style>
    body{
        background-image: url(images/1.jpg);
        color: white;
    }
    #head1{
        background-color: cadetblue;
    }
    #button{
        width: 500px;
        height: 50px;
    }
    table{
        margin-top: 10%;
        font-weight: bold;
        color: white;
        
    }
    </style>
</head>
<body>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<?php include("header.php"); ?>
   <div class="container">
       <div class="form-group">
           <form method="post" action="regAction.php">
              <table cellpadding="10" colspacing="10" width="1000" align="center" id="tab">
               <tr>
                   <td>USN</td>
                   <td><input type="text" class="form-control" name="usn"></td>
                   <td>Name</td>
                   <td><input type="text" class="form-control" name="uname"></td>
               </tr>
               <tr>
                   <td>Date of birth</td>
                   <td><input type="date" class="form-control" name="dob"></td>
                   <td>blood group</td>
                   <td>
                       <select name="bg" class="form-control">
                           <option value="A+">A+</option>
                           <option value="A-">A-</option>
                           <option value="B+">B+</option>
                           <option value="B-">B-</option>
                           <option value="O+">O+</option>
                           <option value="O-">O-</option>
                           <option value="AB+">AB+</option>
                           <option value="AB-">AB-</option>
                       </select>
                   </td>
               </tr>
               <tr>
                   <td>Branch</td>
                   <td><input type="text" class="form-control" name="b"></td>
                   <td>Create password</td>
                   <td><input type="password" class="form-control" name="cp"></td>
               </tr>
               

           </table>
           <table align="center">
               <tr>
                   <td><button type="submit" class="btn btn-success" id="button">Register</button></td>
                   <td><button type="reset" class="btn btn-primary" id="button">Reset</button></td>
               </tr>
           </table>
           </form>
       </div>
   </div>
    
</body>
</html>
