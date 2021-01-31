<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <style>
     html {
          scroll-behavior: smooth;
}
        body{
            margin: 0;
            margin-top: 0;
            
        }

        .header{
            background-color: cadetblue;
            height: 60px;
            color: white;
            margin-top: -1%;
            overflow: hidden;
            z-index: 100000;
            position: fixed;
            width: 100%;
            
        }
        .contact{
            color: white;
            margin-left: 85%;
            margin-top: -3%;
        }
        .header1{
            background-color: whitesmoke;
            margin-top: 3%;
            height: 50px;
            overflow: hidden;
            position: fixed;
            width: 100%;
            z-index: 100000;
        }
        a{
            text-decoration: none;
            color: black;
        }
        ul li{
            list-style: none;
            float: left;
            display: block;
            margin-left: 40px;
        }
        .navigation{
            margin-left: 59%;
            margin-top: -3%;
            font-weight: bold;
        }
        ul li:hover{
            cursor: pointer;
            border-bottom-style: solid;
            border-bottom-color: aqua;
        }
        .logo{
            margin-top: -2%;
        }
    </style>
</head>
<body>
    <div id="myHeader" class="header">
        <div class="titleh">
            <h2>HEALTH CARE AND AWARENESS SYSTEM</h2>
        </div>
        <div class="contact">
            <h2>789879879987</h2>
        </div>
    </div>
    <div id="myheader1" class="header1">
        <div class="logo">
            <h1>PHC</h1>
        </div>
        <!--<div class="navigation">
            <ul>
                <li><a href="phcHome.php" id="home">Home</a></li>
                <li><a href="diseasesInfo.php">Diseases info</a></li>
                <li><a href="newsFeed.php">Newsfeed</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="logout.php" >Logout</a></li>
            </ul>
        </div>
-->    </div>
</body>
</html>