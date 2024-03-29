<html>
     <head>
	     <title>user login page</title>
	 </head>
	 <body style="background-image:url(img7.jpg);">
	    <form method="POST">
	    <center>
            <table border="2" bgcolor="black" cellpadding="10" cellspacing="40">
		    <td>
			 <center><h1><font color="white"/>User Login</h1></center>
			   <label><font color="white"/>User name:</label>
			   <input type="text" name="f1" placeholder="Enter user name" /><br /><br />
			   <label><font color="white"/>Password:</label>
			   <input type="text" name ="f2" placeholder="Enter your  password" /><br /><br />
			   
			   <center><input type="submit" name="login" value="login" /></center>
			   <center><h4>Don't have an account?</h4>
			   <a href="user_signup.php"> <font color="white"/>Create new account</a></center>
			 
			 </td>
			 </table>
		</center>
		</form>
	</body>
</html>
<?php
    $conn=mysqli_connect("localhost","root","","apartment");
    if(isset($_POST['login']))
    {
      $v1=$_POST['f1'];
      $v2=$_POST['f2'];
	$query=mysqli_query($conn,"select * from user where name='$v1'and password='$v2'");
	if(mysqli_num_rows($query))
	{
		echo"<script>alert('logged in Successfully');
		window.location.href=('user_home.php');
		</script>";
	}
	else
	{
		echo"<script>alert('login failed');
		window.location.href=('user_login.php');
		</script>";
	}
	}
?>