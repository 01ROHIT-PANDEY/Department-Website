<?php 
    $dir1 = "./Events";
    $Events_file = glob($dir1."/*.*");

?>

<?php
    $dir2 = "./News";
    $News_file = glob($dir2."/*.*");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Department Of CS/IT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Spectral:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Patrick+Hand&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="./jquery/jquery.js"></script>
  <script src="./jquery/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fuse.js/3.4.5/fuse.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">
  <script type="text/javascript" src="./Prof_data.js"></script>
  <style type="text/css">
    fieldset{
      border-radius: 20px;
      border:2px;
      padding: 20px;
      margin-bottom: 20px
    }

    .search_prof_heading
    {
      text-align: center;
      font-family: 'Spectral', serif;
      font-weight:bold;
      font-size: 2vw;
      color: black;
    }
    #search
    {
      margin-left:5%;
      width: 25%;
      height: 2.2vw;
      border-radius: 2vw;
      border-style: solid;
      font-family: 'Spectral', serif;
      font-size: 1.4vw;
      font-weight:100;
      text-align: center;
      background-color: aliceblue;
    }
  
  </style>

</head>
<body>
</body>
  <header><div class="topnav">
  <img src = "Images/logo.jpg" height = "120" width = "150">
  <div class="contaier"><div class = "text1">
      <i><b><font size = "15px">Department of<span style="color:red;"> CS/IT</span></font><br>Graphic Era Hill University,Dehradun</b></i>
  </div></div>
</div></header>
<nav class="navbar navbar-inverse" style="background-color:red;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="#">Professor Information</a></li>
        <li><a href="./Announcements.php">Announcements</a></li>
        <li><a href="./Join_us.php">Join Us</a></li>
         <li><a href="Students_Corner/login.php">Student Corner</a></li>
        <li><a href="Contact_Us.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span>Faculty Login</a></li>
      </ul>
    </div>
    </div>
</nav>

    <?php
// Database connection parameters.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
$con=mysqli_connect($servername,$username,$password,$dbname) or die('sorry unable to connect');  
    mysqli_select_db($con,"demo") or die("cannot select DB");

$query="select Name from faculty";
$result=mysqli_query($con,$query);
if(!$result)
{
echo"<script>window.prompt('No Faculty');";

}

else{

  echo"<div class='container-fluid' style='background-color:#363663;padding:2%;width:100%;'>";
   echo"<marquee style='font-size:30px;font-weight:bold;color:YELLOW'>Professor Information</marquee>";
  echo"<div class='container'><img src='./Images/logo.jpg' style='border-radius:100px;margin-left:43%;'height:50px;width:50px;></div>";
  echo"<center><h2>";
  echo"<br><div class='container'><span style='color:white;'><strong>CHOOSE FACULTY NAME</strong></span></div></h1>";
  echo'<form action="prof_page.php" method="post">';
  echo'<select name="fname" id="search" style="width:20%;text-align:center;">';
  echo'<option value="#">CHOOSE';

  while($row=mysqli_fetch_array($result))
  {
    $fname=$row["Name"];
    echo"<option value='$fname'>".$fname;

  }
  echo"</select>";
  echo'&nbsp;&nbsp;&nbsp;<span style="font-size:14px;"><input style="background-color:lightgreen;width:80px;border-radius:20px;" type="submit" value="Get"></span>';
 
}
 
  echo"</form>";
  echo"</center>";
  echo"</div>";

?>

<footer style="margin:0px;"class="container-fluid text-center">
  Follow us on : <a href = "#"><img src = "/Images/twitter.png" height= "10px" width = "10px" ></a> <a href = "#">@</a>
  <p>&copy All copyrights reserved to CS/IT Department</p>

</footer>

</body>
</html>
