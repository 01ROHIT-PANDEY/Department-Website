<?php
          session_start();
// Database connection parameters.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
$con=mysqli_connect($servername,$username,$password,$dbname) or die('sorry unable to connect');  
    mysqli_select_db($con,"demo") or die("cannot select DB");

if (isset($_POST['Username']))
{
$user=$_POST['Username'];  
$pass=($_POST['Password']); 
#echo $user.$pass; 
#echo $con; 
$query=mysqli_query($con,"SELECT * FROM loginform WHERE User='$user'and Password='$pass'");  
    $numrows=mysqli_num_rows($query);  
#echo $numrows;
if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
        $dbusername=$row['User'];  
        $dbpassword=$row['Password']; 
        $_SESSION['Username']= $row['User'];
    }
    #echo $dbusername.$dbpassword;
    if($user == $dbusername && $pass == $dbpassword)  
    {  
        echo "<script>window.location.assign('Dash.php');</script>";  
    } else {  
        echo "Invalid Username or password!";  
    } 
    }
else
  {
    echo "Sorry some Error happened!!!!!!!";
  }
}

?>