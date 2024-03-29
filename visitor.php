<?php
   $conn=mysqli_connect("localhost","root","","apartment");
   $query=mysqli_query($conn,"select * FROM visitors");
   ?>
  <html>
        <head>
		      <title>Display page</title>
		</head>
	<body style="background-image: url('img20.jpg');">
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
	<center>
	<div class="topnav">
  <a class="active" href="#home"><i>HOME</i></a>
  <a href="flat details.php">flat Details</a>
  <a href="visitor.php">visitor details</a>
  <a href="adminabout.php">About</a>
  <a href="logoutadmin.php">Logout</a>
</div>
	<center>
	    <table border="2">
		<h1>visitor</h1>
		
		 
		    <tr>
			  <th>flat_no</th>
			  <th>owner_name</th>
			  <th>visitor_name</th>
			   <th>phone_no</th>
			   <th>visiting_address</th>
			 <th>city</th>
			  <th>dated</th>
			  <th>edit</th>
			  <th>delete</th>
			 </tr>
		
	
  
  <?php 
    while($r=mysqli_fetch_array($query))
	{
		$flat_no=$r['flat_no'];
		$owner_name=$r['owner_name'];
		$visitor_name=$r['visitor_name'];
		$phone_no=$r['phone_no'];
		$visiting_address=$r['visiting_address'];
		$city=$r['city'];
		$dated=$r['dated'];
		
		?>
		<tr>
		
		  <td><?php echo $flat_no;?></td>
		  <td><?php echo $owner_name;?></td>
		  <td><?php echo $visitor_name;?></td>
		  <td><?php echo $phone_no;?></td>
		  <td><?php echo $visiting_address;?></td>
		  <td><?php echo $city;?></td>
		 <td><?php echo $dated;?></td>
		 <td><a href="editvisitor.php?flat_no=<?php echo $flat_no;?>">edit</a></td>
		 <td><a href="deletevisitor.php?flat_no=<?php echo $flat_no;?>">delete</a></td>
		</tr>
		
	<?php 
	} 
	?>
	
	</table><br/>
	</center>
	<center>
	<a href="addvisitor.php" class="button" />ADD NEW</a>
	</center>
	</body>
	</html>