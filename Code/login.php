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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="./login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header><div class="topnav">
  <img src = "Images/logo.jpg" height = "120" width = "150">
  <div class="contaier"><div class = "text1">
      <i><b><font size = "15px">Department of<span style="color:red;"> CS/IT</span></font><br>Graphic Era Hill University,Dehradun</b></i>
  </div></div>
</div></header>
<nav class="navbar navbar-inverse">
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
        <li><a href="Prof_info.php">Professor Information</a></li>
        <li><a href="./Announcements.php">Announcements</a></li>
        <li><a href="./Join_us.php">Join Us</a></li>
        <li><a href="Students_Corner/login.php">Student Corner</a></li>
        <li><a href="Contact_Us.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span>Faculty Login</a></li>
      </ul>
    </div>
    </div>
</nav>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2" id="sidebar">
		<h4 style="text-align: center; margin-bottom: 15px">Direct Links</h4>
		<ul id="sidebar-list">
			<li href="#" class="sidebar-item">ERP Login</li>
			<li href="#" class="sidebar-item">GEHU Main Website</li>
			<li href="#" class="sidebar-item"></li>
		</ul>
    </div>
    <div class="col-sm-8 text-left">
      <div class = "container">
        <img src="Images/logo.jpg" height="60px" width="90px" style="margin-top:5px;">
          <form action = "login_check.php" method = "POST">
              <fieldset><center><legend><h3 style="color:red;font-weight:bold;">PLEASE LOGIN TO CONTINUE</h3></legend></center>
              <div class = "form_input">
                <table><tbody><tr><td>Username</td>
                <td><input type = "text" name = "Username" placeholder = "Enter your username"></td></tr></tbody></table>
              </div>
              <div class = "form_input">
                <table><tbody><tr><td>Password</td>
                <td><input type="password" name="Password" placeholder="Enter your password"></td></tr></tbody></table>
              </div><br>
              <input type = "submit" name = "submit" value = "Login" class = "btn-login"><br><br>
            </fieldset>
          </form>
         
      </div><br><br><br></div>
<div class="col-sm-2 sidenav" style="background-color:lightblue;">
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
  

<footer class="container-fluid text-center">
  Follow us on : <a href = "https://www.google.com" class = "fa fa-twitter"></a>  <a href = "https://facebook.com" class = "fa fa-facebook"></a>
  <p>&copy All copyrights reserved to CS/IT</p>
</footer>
</body>
</html>
