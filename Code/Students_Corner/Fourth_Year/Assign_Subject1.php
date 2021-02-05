<?php 
    $dir1 = "../../Events";
    $Events_file = glob($dir1."/*.*");

?>

<?php
    $dir2 = "../../News";
    $News_file = glob($dir2."/*.*");
?>

<?php
    $dir = "./Assignments/1/";
    $file = glob($dir."*.*");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Department Of CS/IT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">
  <style type="text/css">
    .x{
      padding: 20px;
    }
  </style>

</head>
<body>
</body><header><div class="topnav">
  <img src = "./Images/logo.jpg" height = "120" width = "150">
  <div class = "text1">
      <i><b><font size = "15px">Department of<span style="color:red;"> CS/IT</span></font><br>Graphic Era Hill University,Dehradun</b></i>
  </div>
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
        <li><a href="../../index.php">Home</a></li>
        <li><a href="../../Prof_info.php">Professor Information</a></li>
        <li class="active">
          <div class="dropdown">
            <button class="dropbtn">Students Corner</button>
            <div class="dropdown-content">
              <a href="../First_Year/Index.php">First Year</a>
              <a href="../Second_Year/Index.php">Second Year</a>
              <a href="../Third_Year/Index.php">Third Year</a>
              <a href="../Fourth_Year/Index.php">Fourth Year</a>
              
            </div>
      </div></li>
        <li><a href="../../Announcements.php">Announcements</a></li>
        <li><a href="../../Join_us.php">Join Us</a></li>
        <li><a href="../../Contact_Us.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../../login.php"><span class="glyphicon glyphicon-log-in"></span>Faculty Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><h4>Direct Links</h4></p>
      <p><a href="#">Erp Login</a></p>
      <p><a href="#">GEHU Main Wbsite</a></p>
      <p><a href="#">Others</a></p>
    </div>
    <div class="col-sm-8 text-left x">
      <h1><i>Assignments:</i></h1><hr>
      <strong><i>Here you can find link to the Assignments for the subject ___ of your course</i></strong><br><br>
        <?php
        foreach($file as $file_value){
                echo '<li><a href="'.$file_value.'">'.basename($file_value).'</a></li>';
                } 
        ?>
    </div><br>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p><h2>Events</h2></p>
        <?php 
          foreach($Events_file as $file_value){
                echo '<p><a href="'.$file_value.'">'.basename($file_value).'</a></p>';
          }
        ?>
      </div>
      <div class="well">
        <p><h2>News</h2></p>
        <?php
          foreach($News_file as $file_value){
                echo '<p><a href="'.$file_value.'">'.basename($file_value).'</a></p>';
          }
        ?>
      </div>
    </div>
  </div>
</div>
<footer class="container-fluid text-center">
  Follow us on : <a href = "#"><img src = "/Images/twitter.png" height= "10px" width = "10px" ></a> <a href = "#">@</a>
  <p>&copy All copyrights reserved to CS/IT Department</p>

</footer>

</body>
</html>
