<?php 
  $conn=mysqli_connect("localhost","root","","apartment");
  ?>
 <html>
   <head>
     <title> Editing of apartment table</title>
	</head>
	<center><h1><i>Edit visitor details</h1></i></center>
	<body style="background-image: url('img21.webp');">
    <center>
	<table border="2" cellpadding="5" cellspacing="10">
	<td>
		<?php
		
			  $flat_no=$_GET['flat_no'];
			  echo $flat_no;
			  $query=mysqli_query($conn,"select * from visitors where flat_no='$flat_no'");
			  while($r=mysqli_fetch_array($query))
			  {
				  $flat_no=$r['flat_no'];
				  $owner_name=$r['owner_name'];
				  $visitor_name=$r['visitor_name'];
				  $phone_no=$r['phone_no'];
				  $visiting_address=$r['visiting_address'];
				  $city=$r['city'];
				  $dated=$r['dated'];
	              
			  }
		  
		 ?>
		 <form method="POST">
		 
		 <label for="flat_no"><b>Flat_number</b></label>
		  <input type="number" name="f1" value="<?php echo $flat_no; ?>" /><br /><br/>
		  
		  <label for="owner_name"><b>Owner_name</b></label>
		  <input type="text" name="f2" value="<?php echo $owner_name; ?>"/><br /><br/>
		  
		  <label for="visitor_name"><b>Visitor_name</b></label>
		  <input type="text" name="f3" value="<?php echo $visitor_name; ?>"/><br /><br/>
		  
		  <label for="phone_no"><b>Phone_number</b></label>
		  <input type="number" maxlength="10" name="f4" value="<?php echo $phone_no; ?>"/><br /><br/>
		  
		  <label for="visiting_address"><b>Visiting_address</b></label>
		  <input type="text" name="f5" value="<?php echo $visiting_address; ?>"/><br /><br/>
		  
		  <label for="City"><b>City</b></label>
		  <input type="text" name="f6" value="<?php echo $city; ?>"/><br /><br/>
		  
		  <label for="dated"><b>Date</b></label>
		  <input type="date" name="f7" value="<?php echo $dated; ?>" /><br /><br/>
		  <input type="submit" name="update" value="update"/><br />
		  </td>
		  </table>
		</form>
		<?php
		  if(isset($_POST['update']))
		  {
			  $v1=$_POST['f1'];
			  $v2=$_POST['f2'];
			  $v3=$_POST['f3'];
			  $v4=$_POST['f4'];
			  $v5=$_POST['f5'];
			  $v6=$_POST['f6'];
			  $v7=$_POST['f7'];
			  $query=mysqli_query($conn,"UPDATE visitors SET city='$v6',owner_name='$v2',visitor_name='$v3',phone_no='$v4',visiting_address='$v5',dated='$v7' WHERE flat_no='$v1' ");
			  if($query)
	{
		echo"<script>alert('Updated Successfully');
		window.location.href=('visitor.php');
		</script>";
	}
	else
	{
		echo"<script>alert('Updation failed');
		window.location.href=('editvisitor.php');
		</script>";
	}
		  }
		  ?>
		</center>
	</body>
</html>