<?php 
  $conn=mysqli_connect("localhost","root","","apartment");
  ?>
 <html>
   <head>
     <title> Editing of flat details</title>
	</head>
	<body style="background-image: url('img16.jpg');" "background-repeat:no-repeat;">
	
	  <center>
	    
		<?php
		  
			  $flat_no=$_GET['flat_no'];
			  
			  $query=mysqli_query($conn,"select * from flat_details where flat_no='$flat_no'");
			  while($r=mysqli_fetch_array($query))
			  {
				  $flat_no=$r['flat_no'];
				  $owner_name=$r['owner_name'];
				  $phone_no=$r['phone_no'];
				  $email=$r['email'];
				  $postal_address=$r['postal_address'];
				  $city=$r['city'];
				  
				  
			  }
		  
		 ?>
		 <table border=2 cellpadding=30 cellspacing=30>
		 <td>
		 
		 <form method="POST">
		 
		 <label for="flat_no"><b>Flat_number</b></label>
		  <input type="number" name="f1" value="<?php echo $flat_no; ?>" /><br /><br/>
		  
		  <label for="owner_name"><b>Owner_name</b></label>
		  <input type="text" name="f2" value="<?php echo $owner_name; ?>"/><br /><br/>
		  
		  <label for="phone_no"><b>Phone_number</b></label>
		  <input type="number" name="f3" value="<?php echo $phone_no; ?>"/><br /><br/>
		  
		  <label for="email"><b>Email</b></label>
		  <input type="email" name="f4" value="<?php echo $email; ?>" /><br /><br/>
		  
		  <label for="postal_address"><b>Postal_adress</b></label>
		  <input type="text" name="f5" value="<?php echo $postal_address; ?>" /><br /><br/>
		  
		  <label for="city"><b>City</b></label>
		  <input type="text" name="f6" value="<?php echo $city; ?>"/><br /><br/><br/>
		  
		  
		  <center><input type="submit" name="update" value="update"/><br /></center>
		  
		  
		</form>
		</td>
		</table>
		<?php
		  if(isset($_POST['update']))
		  {
			  $v1=$_POST['f1'];
			  $v2=$_POST['f2'];
			  $v3=$_POST['f3'];
			  $v4=$_POST['f4'];
			  $v5=$_POST['f5'];
			  $v6=$_POST['f6'];
			  
			  $query=mysqli_query($conn,"UPDATE flat_details SET city='$v6',owner_name='$v2',email='$v4',phone_no='$v3',postal_address='$v5' WHERE flat_no='$v1' ");
			  if($query)
	{
		echo"<script>alert('Updated Successfully');
		window.location.href=('flat details.php');
		</script>";
	}
	else
	{
		echo"<script>alert('Updation failed');
		window.location.href=('editflat.php');
		</script>";
	}
		  }
		  ?>
		</center>
	</body>
</html>