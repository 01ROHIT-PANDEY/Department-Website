<?php 
    $dir1 = "../../Events";
    $Events_file = glob($dir1."/*.*");

?>

<?php
    $dir2 = "../../News";
    $News_file = glob($dir2."/*.*");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Department Of CS/IT </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<header><div class="topnav">
  <img src = "./Images/logo.jpg" height = "120" width = "150">
  <div class = "text1">
      <i><b><font size = "15px">Department of<span style="color:red;"> CS/IT</span></font><br>Graphic Era Hill University,Dehradun</b></i>
  </div>
</div></header>
<nav class="navbar navbar-inverse"style="background-color:red;">
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
        <li class="active" id="stud">
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
    <div class="col-sm-2" id="sidebar">
		<h4 style="text-align: center; margin-bottom: 15px">Direct Links</h4>
		<ul id="sidebar-list">
			<li href="#" class="sidebar-item">Erp Login</li>
			<li href="#" class="sidebar-item">GEHU WEBSITE</li>
			<li href="#" class="sidebar-item">other</li>
		</ul>
    </div>
    <div class="col-sm-8 text-left">
      <h1><i>For First Year Students:</i></h1><hr>
      <a><h3></h3></a>
      <ul>
        <li><b><a href="./Announcements.php">Related Announcements and Notifications</a></b></li><br><br>
        <li><b>Lecture Notes</b><br><br>
            <ul>
              <li><a href="./Lect_Subject1.php"><i>Subject 1</i></a></li>
              <li><a href=""><i>Subject 2</i></a></li>
            </ul>
        </li><br><br>
        <li><b>Assignments</b><br><br>
            <ul>
              <li><a href="./Assign_Subject1.php"><i>Subject 1</i></a></li>
              <li><a href=""><i>Subject 2</i></a></li>
            </ul></li>
        </ul>
      </ul>        
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

</body>

</html>