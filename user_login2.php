<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body bgcolor="silver">
<center>
<h1>Login For User</h1>
</center>
<form method="post">


  <div class="container">
    <label for="uname"><b>User name</b></label>
    <input type="text" placeholder="Enter User name" name="f1" required>

    <label for="psw"><b>Passward</b></label>
    <input type="password" placeholder="Enter Password" name="f2" required>
        
    <button type="submit" name="login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>   
  
  </div>
  <p>Don't have an account??
 <a href="user_sign2up.php"> Create New Account</a></p>
			 
</form>
</body>
</html>

			   
			 
<?php
    $conn=mysqli_connect("localhost","root","","apartment");
    if(isset($_POST['login']))
    {
      $v1=$_POST['f1'];
      $v2=$_POST['f2'];
	$query=mysqli_query($conn,"select * from user_details where name='$v1'and passward='$v2'");
	if(mysqli_num_rows($query))
	{
		echo"<script>alert('logged in Successfully');
		window.location.href=('userabout.php');
		</script>";
	}
	else
	{
		echo"<script>alert('login failed');
		window.location.href=('user_login2.php');
		</script>";
	}
	}
?>