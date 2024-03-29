<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.6s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
<meta name="viewport" content="width=device-width, initial-scale=1">
body {
  margin: 10;
  font-family: Arial;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: silver;
  text-align: center;
  padding: 30px 50px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color:#00FF00;
  color: black;
}

.topnav a.active {
  background-color: limegreen;
  color: blue;
}
</style>
</head>
<body bgcolor="Azure">
  <center>
  <h1><i>**Apartment management system**</i></h1><br /><br />
  <h3><marquee>Developed by:Surekha G Y and Shreya A.K</marquee></h3>
<div class="topnav">
  <a class="active" href="#home"><i>HOME</i></a>
  <a href="flatdetails.php">flat Details</a>
  <a href="visitor.php">visitor details</a>
  <a href="adminabout.php">About</a>
  <a href="logoutadmin.php">Logout</a>
</div>
<br /><br /><br />
<h2><i>Apartment management system:</i></h2>
<p><font color="black">
 This communicates information on fill levels and <br />
 ensures collection only when the bin is full. Fewer collection<br />
 visits reduce congestion and traffic interruption, resulting <br />
 also in cleaner and safer streets. Traffic reduction due to <br />
 fewer collection visits helps reduce carbon dioxide and other<br />
 emissions.</font></p>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img1.jpg" style="width:40%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img4.png" style="width:40%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img3.jpg" style="width:70%" width="10" height="390">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<p><h3> The responsibilities of an apartment property manager</h3></p>
<p>Image result for application of apartment management</p>
<p>Property manager responsibilities include setting and collecting rent,</p>
<p>handling maintenance requests, filling vacant units and potentially setting the budget for the property.</p>
<p>Property managers often take care of property that real estate investors either do not live near or do not wish to personally manage.</p>
  <h2>Advantages <br/></h2>
  <p> ->Maintenance and Management Tracking<br/>
   ->Tenant Applications and screenings<br/>
   -> Contact management<br/>
   ->Financial Management<br/>
   </p>
  
	<h4>Apartment Uses</h4>
	<p>Apartment Management System is used to help people in the apartment to pay bills such as maintenance bills</p>
<p> water bills, make a complaint and update tenants' information.</p>
</center>
</body>
</html>