<?php
$conn=mysqli_connect ("Localhost","root","","apartment");
?>

<html>
   <head> 
       <title> My page</title>
   </head>
       <body>
	      
		   
<?php

	$flat_no=$_GET['flat_no'];
	
	$query=mysqli_query($conn,"DELETE FROM flat_details WHERE flat_no='$flat_no'");
 
	if($query)
	{
			echo "<script>
		     alert ('details deleted successfully');
			 window.location.href='flat details.php';
			  </script>";
		}
		else
		{
			echo "<script>
            alert ('deletion failed');
            window.location.href'deleteflat.php';
            </script>";
		}
?>
    </body>
</html>
        