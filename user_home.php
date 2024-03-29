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
<body style="background-image: url('img16.jpg');">
  <center>
  <h1><i>**Apartment management system**</i></h1><br /><br />
  <h3><marquee>Developed by:Surekha G Y and Shreya A.K</marquee></h3>
<div class="topnav">
  <a class="active" href="#home"><i>HOME</i></a>
  <a href="flat details.php">flat Details</a>
  <a href="visitoruser.php">visitor details</a>
  <a href="userabout.php">About</a>
  <a href="logoutuser.php">Logout</a>
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
  <img src="apart1.jpg" style="width:70%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="apart2.jpg" style="width:70%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="apart3.jpg" style="width:70%">
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
<h2><b>Existing System</h2></b>
The existing records were manually manged by the resources of the construction company. It was a huge task as they had to maintain a large database of customers who have bought the flats along with their dates, amount paid etc. They also had to manage the data related to the maintenance activities of all the flat owners. It required lot of time and resources. There was no way to find easily when the customer had to pay the installment for maintenance, etc details. The user had to manually search for all the records pertaining to each apartment and then prepare a report of all the outstanding payments.</p>
<h2><b>Proposal system</h2></b>
<p>This is a simple user interface developed using .net technology. The interface helps the user to login through the system and add the details regarding the apartment. The interface takes as input the name of the customer, Phone number, address, the apartment number, Area of the house, Amount per square foot etc. These details are stored in the database. If the apartment is sold to the customer, then these details are stored in the sales tables. It will have a unique sale deed number generated for each of the flats. The interface also has maintenance panel. This panel holds information such as name of the owner, the date of purchase, the maintenance charges to be paid, quarterly or annually, Mode of payment etc. These details are stored in the maintenance tables in the database. The user can query on the database and fetch this information very easily. This interface helps the user to make all these payments regarding maintenance and purchase of flats etc.</p>


</center>
</body>
</html>