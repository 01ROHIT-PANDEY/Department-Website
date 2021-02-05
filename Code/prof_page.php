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
        <li><a href="./student.html">Student Corner</a></li>
        <li><a href="Contact_Us.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span>Faculty Login</a></li>
      </ul>
    </div>
    </div>
</nav>

<?php
$con=mysqli_connect('localhost','root','','demo');
if(!$con)
{
	echo"Error in connection" .mysqli_connect_errno();
}
$fname=($_POST["fname"]);
$query="select * from faculty where Name='$fname' ";
$result=mysqli_query($con,$query);
if(!$result)
{
echo"error";
}
else{

	echo"<div class='container' width='50%;'><fieldset><legend>Professor Details</legend>";
	while($row=mysqli_fetch_array($result))
	{
		
		$name=$row["Name"];
		$desig=$row["Designation"];
		$exp=$row["Experience"];
		$qual=$row["Qualification"];
		$achieve=$row["Achievements"];
		$doj=$row["DOJ"];
		$image=$row["Image"];
    $email=$row["email"];
     
     echo"<div class='container'><center><table border='2' width='10%'>";
	echo"<tr><th>EMP NAME</th><th>DESIGNATION</th><th>Experience</th><th>Qualification</th><th>Achievements</th><th>Date of Joining</th><th>Email ID</th></tr>";
		echo"<tr>";
		echo"<td>$name</td>";
		echo"<td>$desig</td>";
		echo"<td>$exp</td>";
		echo"<td>$qual</td>";
		echo"<td>$achieve</td>";
		echo"<td>$doj</td>";
    echo"<td>$email</td>";
		echo"</tr>";
	}
	echo"<img src='$image' height='100px' width='100px'><br><br><center><b><h2>$name</h2></center>";
	echo"</table></center></div></fieldset></div>";
}
mysqli_close($con);
?>

 
<footer class="container-fluid text-center">
  Follow us on : <a href = "#"><img src = "/Images/twitter.png" height= "10px" width = "10px" ></a> <a href = "#">@</a>
  <p>&copy All copyrights reserved to CS/IT Department</p>

</footer>
