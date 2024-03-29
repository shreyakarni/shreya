<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
  background-color:#00FF00 ;
  color: black;
}

.topnav a.active {
  background-color: limegreen;
  color: blue;
}
</style>
</head>

<body style="background-image: url('6img.jpg');">
  <center>
  <h1><i><font color="black">*Apartment management system*</font></i></h1>
  <br />
  <h3><marquee>Developed by: Surekha G Y</marquee></h3>
 <div class="topnav">
  <a  href="user_home.php"><i>HOME</i></a>
  <a href="flat details.php">Flat Details</a>
  <a href="visitoruser.php">Visitor Details</a>
  <a href="userabout.php">About</a>
  <a href="logoutuser.php">Logout</a>
 </div>

 <h1><font color="#00008B"><i>Visitor Details</i></font></h1>

<?php 
$conn=mysqli_connect("localhost","root","","apartment");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['search'])){
    $flat_no=$_POST['flat_no'];
    $query=mysqli_query($conn,"SELECT * FROM visitors WHERE flat_no='$flat_no'");
    while($r=mysqli_fetch_array($query)){
        $flat_no=$r['flat_no'];
        $owner_name=$r['owner_name'];
        $visitor_name=$r['visitor_name'];
        $phone_no=$r['phone_no'];
        $visiting_address=$r['visiting_address'];
        $city=$r['city'];
        $dated=$r['dated'];
    }
}
?>
<center>
<form method="POST">
    <label>Enter Flat Number:</label>
    <input type="text" name="flat_no" required>
    <input type="submit" name="search" value="Search">
</form>
</center>

<table border="2">
<tr>
    <th>Flat No</th>
    <th>Owner Name</th>
    <th>Visitor Name</th>
    <th>Phone No</th>
    <th>Visiting Address</th>
    <th>City</th>
    <th>Dated</th>
</tr>
<tr>
    <td><?php echo isset($flat_no) ? $flat_no : "";?></td>
    <td><?php echo isset($owner_name) ? $owner_name : "";?></td>
    <td><?php echo isset($visitor_name) ? $visitor_name : "";?></td>
    <td><?php echo isset($phone_no) ? $phone_no : "";?></td>
    <td><?php echo isset($visiting_address) ? $visiting_address : "";?></td>
    <td><?php echo isset($city) ? $city : "";?></td>
    <td><?php echo isset($dated) ? $dated : "";?></td>
</tr>
</table>
</center>
</body>
</html>