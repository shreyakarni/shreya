<html>
<head>
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
</head>
<body bgcolor="silver">

<form method="POST" style="border:1px solid #ccc">
  <div class="container">
    <center><h1><i><u><font color="darkblue">Sign Up for User</font></u></i></h1></center>
    <p>Please fill in this form to create an account.</p>
    <hr>
   <label for="user name"><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name" name="f1" required>
	
	<label for="mobile number"><b>Mobile Number</b></label><br />
	<input type="number" pattern="[789][0-9]{9}" maxlength="10" placeholder="Enter mobile number" name="f2" required><br /><br />
	
    <label for="email"><b>Email</b></label><br />
    <input type="email" placeholder="Enter Email" name="f3" required><br /><br />

     <label for="postal address"><b>Postal Address</b></label>
    <input type="text" placeholder="Enter address" name="f4" required>
	
	<label for="city"><b>City</b></label>
    <input type="text" placeholder="Enter City" name="f5" required>
	
	

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="f5" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Repeat Password" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
     <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="add">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
	 
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
	  
	$query=mysqli_query($conn,"INSERT INTO user_details  VALUES('$v1','$v2','$v3','$v4','$v5','$v6','$v7')");
	if(($query))
	{
		echo"<script>alert('Account Created Successfully');
		window.location.href=('user_login2.php');
		</script>";
	}
	else
	{
		echo"<script>alert('signup failed');
		window.location.href=('user_sign2up.php');
		</script>";
	}
	}
?>