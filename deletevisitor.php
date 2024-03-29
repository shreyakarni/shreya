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
	
	$query=mysqli_query($conn,"DELETE FROM visitor WHERE flat_no='$flat_no'");
 
	if($query)
	{
			echo "<script>
		     alert ('details deleted successfully');
			 window.location.href='visitor.php';
			  </script>";
		}
		else
		{
			echo "<script>
            alert ('deletion failed');
            window.location.href'deletevisitor.php';
            </script>";
		}
?>
    </body>
</html>
        