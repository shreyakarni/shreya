<?php
$conn=mysqli_connect("localhost","root","","apartment");
if($conn)
{
	echo "database connected";
}
else
{
	echo "database failed";
}
?>