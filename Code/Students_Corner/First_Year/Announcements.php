<?php 
    $dir1 = "../../Events";
    $Events_file = glob($dir1."/*.*");

?>

<?php
    $dir2 = "../../News";
    $News_file = glob($dir2."/*.*");
?>



<?php

  $dir = "./Announcements/";
  $file = glob($dir."/*.*");
  $subfile = glob($dir."/*/*.*");



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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fuse.js/3.4.5/fuse.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../../main.css">
  <link rel="stylesheet" type="text/css" href="./Announcements.css">

</head>
<body>
</body><header><div class="topnav">
  <img src = "./Images/logo.jpg" height = "120" width = "150">
  <div class = "text1">
      <i><b><font size = "15px">Department of<span style="color:red;"> CS/IT</span></font><br>Graphic Era Hill University,Dehradun</b></i>
  </div>
</div></header>
<nav class="navbar navbar-inverse" style="background-color: red;">
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
        <li><a href="../../Index.php">Home</a></li>
        <li><a href="../../Prof_info.php">Professor Information</a></li>
        <li><a href="../../student.html">Professor Information</a></li>
        <li><a href="../../Announcements.php">Announcements</a></li>
        <li><a href="../../Join_us.php">Join Us</a></li>
        <li><a href="../../Contact_us.php">Contact Us</a></li>
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
    <div class="col-sm-8 text-left">
      <fieldset>
        <legend><h2>Related Announcements and Notifications</h2></legend>
        <b><i>All these Announcements are specifically related to first year students</i></b><br><br>
        

        <?php
        
        if (sizeof($file)!=0||sizeof($subfile)!=0){
              echo "<ul>";
        foreach($file as $file_value){
                echo '<li><a href="'.$file_value.'">'.basename($file_value).'</a></li>';
              }
        foreach($subfile as $file_value){
                echo '<li><a href="'.$file_value.'">'.basename($file_value).'</a></li>';
              }

                echo "</ul>";
          
        }
        else 
          echo "Sorry No Announcements yet!!!";
        ?>
      </fieldset>

    </div>
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