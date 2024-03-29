<html>
     <head>
	     <title>admin login page</title>
	 </head>
	 <body style="background-image:url(img7.jpg);">
	    <form method="POST">
	    <center>
            <table border="2" bgcolor="black" cellpadding="30" cellspacing="50">
		    <td>
			 <center><h1><font color="white"/>Admin Login</center></h1>
			   <label><font color="white"/>admin_name:</label>
			   <input type="text" name="f1" placeholder="Enter name" /><br /><br />
			   <label>Password:</label>
			   <input type="text" name ="f2" placeholder="Enter password" /><br /><br />
			   
			   <center><input type="submit" name="login" value="login" /></center>
			   
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
	$query=mysqli_query($conn,"select * from admin where admin_name='$v1'and password='$v2'");
	if(mysqli_num_rows($query))
	{
		echo"<script>alert('logged in Successfully');
		window.location.href=('admin_home.php');
		</script>";
	}
	else
	{
		echo"<script>alert('login failed');
		window.location.href=('admin_login.php');
		</script>";
	}
	}
?>