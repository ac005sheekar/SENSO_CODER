<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
header
{
    background-color:#6666ff ;
	border-radius:0px;
}
.saidur{
	color:white;
}
body{
	background-image: url("back2.jpg");
}

.navbar {
    overflow: hidden;
	border-radius:0px;
    background-color: #ff4d88 ;
    font-family: Arial;
}

.navbar a {
    float: left;
    font-size: 15px;
    color: white;
    text-align: center;
    padding: 10px 14px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
	
}

.dropdown .dropbtn {
    font-size: 13px;    
    border: none;
    outline: none;
    color:white;
    padding: 14px 18px;
    background-color: #ff4d88 ;
	width: 100%;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: OrangeRed  ;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: LightCoral ;
    min-width: 150px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #08f708;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>
<header>
<body style="text-align:center;color:White;"; </body>
  <h3><b>E-Tutorial System for <br>Uttara University</b></h3>
  
<div class="navbar">
  <a href="hhome.php"><b>Home</b></a>
  <div class="dropdown">
    <button class="dropbtn"><b>Tutorials</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="subject.php">Subject Wise</a>
	  <a href="inswise.php">Instructor Wise </a>
	  
	  
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn"><b>Instructors</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="instructor.php">Instructors List</a>
	  
    </div>
  </div> 
  
  
  <div class="dropdown">
    <button class="dropbtn"><b>Feedback</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="feedtuto.php">Feedback for Tutorials</a>
	  <a href="feedtea.php">Feedback for Teachers</a>
	  
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn"><b>Contact Us</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="address.php">Address</a>
	  <a href="social.php">Social Media and TELECOM</a>
	  
	  
    </div>
  </div> 
  
  
  
  
     
	
  
</header>

<style>
.footer {
   
   left: 0;
   bottom: 0;
   width: 100%;
   border-radius:30px;
   background-color: #6666ff  ;
   color: white;
   text-align: center;
}
</style>
</head>
<body>
<h2 class="saidur" >List of the Instructors:</h2>
<div>
<?php
 include 'slide1.php';
 ?>
 
</div>
<h4><b>Computer Science</b></h4><br>
<b>1. MD. SHAFIUL ALAM CHOWDHURY---Associate Professor<br>
2. MST. NAJNIN SULTANA---Assistant Professor<br>
3. DR. MD. AKHTARUZZAMAN---Assistant Professor<br>
4. TANZILLAH WAHID---Senior Lecturer<br>
5. MD. AMANAT ULLAH---Senior Lecturer</b><br><br>

<h4><b>Electrical Engineering</b></h4><br>
<b>1. DR. MOHAMMED SHAHRIAR SABUKTAGIN---Associate Professor<br>
2. MD. DELWAR HOSSEN---Assistant Professor<br>
3. MD. REZAUL KARIM---Assistant Professor<br>
4. MD. JAHIRUL ISLAM---Senior Lecturer<br>
5. SAHAREEN NOOR---Senior Lecturer</b><br><br>

<h4><b>Civil Engineering</b></h4><br>
<b>1. AMIMUL AHSAN---Associate Professor<br>
2. MD. MONUAR HOSSAIN---Senior Lecturer<br>
3. MD. SELIM REZA---Senior Lecturer<br>
4. MD. IMRUL KAYES---Senior Lecturer<br>
5. MST. IRFATWARA SULTANA---Senior Lecturer</b><br><br>

<br><br><br>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script><br><br><br>

<div class="footer">
  <p><b>Copyright :<br>Team Iconic<br>System Analysis and Design<br>Section: Excellent     </b></p>
  
</div>
</body>
</html>
