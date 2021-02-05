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
  <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<header><div class="topnav">
  <img src = "Images/logo.jpg" height = "120" width = "150">
  <div class="container"><div class = "text1">
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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="Prof_info.php">Professor Information</a></li>
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
  
<div class="container-fluid text-center">    
  <div class="row content">
   <div class="col-sm-2" id="sidebar">
		<h4 style="text-align: center; margin-bottom: 15px">Direct Links</h4>
		<ul id="sidebar-list">
			<li  class="sidebar-item"><a href="https://www.student.gehu.ac.in/">Erp Login</a></li>
			<li  class="sidebar-item"><a href="https://www.gehu.ac.in/">GEHU Main Website</a></li>
			<li class="sidebar-item"><a href="#" >others</li>
		</ul>
    </div>
    <div class="col-sm-8 text-left">
              <!-- Slideshow container -->
          <div class="slideshow-container">

          <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="./Images/Dep.jpg" style="width:100%">
            <div class="text">University</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="./Images/Dep2.jpg" style="width:100%">
            <div class="text">Ubuntu Lab</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="./Images/Dep3.jpg" style="width:100%">
            <div class="text">Lab</div>
          </div>

          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>

          <!-- The dots/circles -->
          <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
          </div>
          <script type="text/javascript">
                var slide_Index = 1;
                showSlide(slide_Index);

                // Next/previous controls
                function plusSlides(n) {
                  showSlide(slide_Index += n);
                }

                // Thumbnail image controls
                function currentSlide(n) {
                  showSlide(slide_Index = n);
                }

                function showSlide(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {slide_Index = 1} 
                  if (n < 1) {slide_Index = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none"; 
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slide_Index-1].style.display = "block"; 
                  dots[slide_Index-1].className += " active";
                }
          </script>
          <script type="text/javascript">
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none"; 
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");}
                  slideIndex++;
                  if (slideIndex > slides.length) {slideIndex = 1} 
                  slides[slideIndex-1].style.display = "block"; 
                  dots[slideIndex-1].className += " active";
                  setTimeout(showSlides, 6000); // Change image every 2 seconds
                }
          </script>
      <hr>
      <h2>About</h2>
      <p style="font-family:Times New Roman;font-size:16px;">The Department of Computer Science and Engineering at GEHU aspires to equip its students with the latest technical skills in order to cope well with the trends and the needs of the industry. Our academic curricula is tailored and designed to cater to the requirements of industrial deployment and research activities. Besides the rigorous academic schedule, heavy focus is laid on online courses like MOOC that enable the students to become part of various premiere universities in the world. To encourage research and development among students, sophisticated and State-of-Art labs equipped with latest equipments (hardware and software) are being used hence making them au fait with the latest technical game. By legally collaborating with the industry giants like Sapient Razorfish we make sure that our students are well placed all over in various multinationals. More and more focus is being given to project and lab based learning, seminars, webinars, guest lectures, conferences and regular visits by various industry experts. This not only imparts high class theoretical knowledge but also trains the students with practical scenarios hence facilitating the transition of the students from academics to the industry.

Our aim is to complement students’ formal education with strong technical know-how in emerging technologies in various engineering sectors of the industry thereby helping in the overall development of their personalities as astute professionals. <span id="dots">...</span><span id="more"><br><b>Vision:</b>

To become a center of excellence in the Computer science and engineering discipline with a strong research and teaching environment that adapts swiftly to the challenges of the 21st century.<br>

<b>Mission:</b>

M1) To provide qualitative education and generate new knowledge by engaging in cutting-edge research and by offering state-of-the-art undergraduate, postgraduate and doctoral programs, leading to careers as Computer and IT professionals in the widely diversified domains of industry, government and academia.

M2) To promote a teaching and learning process that yields advancements in state-of-the-art in Computer Science and Information Technology, resulting in integration of research results and innovations into other scientific disciplines leading to new technologies and products.

M3) To harness capital for sustainable competitive edge and social relevance by inculcating the philosophy of continuous learning and innovation in Computer Science.</span>
      <button onclick="myFunction()" id="myBtn">Read more</button><br><br>
      <script>
      function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read more"; 
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Read less"; 
          moreText.style.display = "inline";
        }
      }
      </script>
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
<footer class="container-fluid text-center">
  Follow us on : <a href = "#"><img src = "./Images/twitter.png" height= "30px" width = "50px" ></a> <a href = "#">@</a>
  <p>&copy All copyrights reserved to CS/IT Department</p>

</footer>

</body>
</html>