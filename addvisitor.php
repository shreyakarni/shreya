 <html>
     <head>
	   <style>
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
html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body style="background-image: url('img17.jpg');">
  <center>
  <h1><i>**Apartment Management system**</i></h1>

  <br /><br />
  <h3><marquee>Developed by:Surekha G Y</marquee></h3>
<div class="topnav">
  <a class="active" href="#home"><i>HOME</i></a>
  <a href="flatdetails.php">flat Details</a>
  <a href="visitor.php">visitor</a>
  <a href="adminabout.php">About</a>
  <a href="logoutadmin.php">Logout</a>
</div>
	<br /><br />
	 		 
<form method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>Adding New Details</h1>
    <p>Please fill in this form to Add New details.</p>
    <hr>
   <label for="flat_no"><b>Flat number</b></label>
    <input type="text" placeholder="Enter Flat Number" name="f1" required><br/>
	
	<label for=" owner_name"><b>Owner Name</b></label>
    <input type="text" placeholder="Enter Owner Name" name="f2" required><br/>
	
	<label for=" visitor_name"><b>Visitor Name</b></label>
    <input type="text" placeholder="Enter visitor Name" name="f3" required><br/>
	
	<label for="phone_no"><b>Phone number</b></label>
    <input type="number" maxlength="10" placeholder="Enter Phone number" name="f4" required><br/><br/>
	
	<label for="visiting_adress"><b>Visiting_address</b></label>
    <input type="text" placeholder="Enter visiting adress" name="f5" required><br/>
	
	<label for="city"><b>City</b></label>
	<input type="text"  placeholder="Enter Name of the City" name="f6" required><br/>
	
    <label for=" dated"><b>Date</b></label>
    <input type="text" placeholder="Enter Date" name="f7" required><br/>
	
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="add">ADD</button>
    </div>
  </div>
</form>

</body>
</html>
</style>
</head>

		<?php
    $conn=mysqli_connect("localhost","root","","apartment");
    if(isset($_POST['add']))
    {
      $v1=$_POST['f1'];
      $v2=$_POST['f2'];
	  $v3=$_POST['f3'];
      $v4=$_POST['f4'];
	  $v5=$_POST['f5'];
	  $v6=$_POST['f6'];
	  $v7=$_POST['f7'];
	$query=mysqli_query($conn,"INSERT INTO visitors VALUES('$v1','$v2','$v3','$v4','$v5','$v6','$v7')");
	if(($query))
	{
		echo"<script>alert('Data added Successfully');
		window.location.href=('visitor.php');
		</script>";
	}
	else
	{
		echo"<script>alert('Data insertion failed');
		window.location.href=('addvisitor.php');
		</script>";
	}
	}
?>