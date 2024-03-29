<!DOCTYPE html>
<html>
<head>
    <title>Signup for User</title>
</head>
<body style="background-image: url('img6.jpg');">
    <center>
        <form action="user_signup.php" method="post" style="border:1px solid #ccc">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <table style="border: 5px solid black;background-color: 'lightpink';">
                    <tr>
                        <th>
                            <center>
                                <label for="username"><b>Username</b></label></th>
                               <td> <input type="text" placeholder="Enter User Name" name="f1" required><br/></td></tr>
                                
                            <tr>  <th>  <label for="mobilenumber"><b>Mobile Number</b></label><br /></th>
                                <td><input type="text" pattern="[789][0-9]{9}" maxlength="10" placeholder="Enter Mobile Number" name="f2" required><br /></td></tr>

                              <tr> <th> <label for="email"><b>Email</b></label><br /></th>
                               <td> <input type="email" placeholder="Enter Email" name="f3" required><br /><br /></td></tr>

                             <tr>   <th><label for="postaladdress"><b>Postal Address</b></label></th>
                               <td> <input type="text" placeholder="Enter Address" name="f4" required><br /></td></tr>

                             <tr>   <th><label for="city"><b>City</b></label></th>
                               <td><input type="text" placeholder="Enter City" name="f5" required><br /></td></tr>

                            <tr>   <th> <label for="password"><b>Password</b></label></th>
                              <td>  <input type="password" placeholder="Enter Password" name="f6" required><br /></td></tr>

                             <tr> <th>  <label for="password-repeat"><b>Confirm Password</b></label></th>
                               <td> <input type="password" placeholder="Repeat Password" name="f7" required><br /></td></tr>
                                </table>
                                <label>
                                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                                </label><br/><br/>

                                <div class="clearfix">
                                    <button type="button" class="cancelbtn">Cancel</button>
                                    <button type="submit" name="add" class="signupbtn">Sign Up</button>
                                </div>
                            </center>
            </div>
        </form>
    </center>
</body>
</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "apartment");
if(isset($_POST['add'])) {
    $v1 = $_POST['f1'];
    $v2 = $_POST['f2'];
    $v3 = $_POST['f3'];
    $v4 = $_POST['f4'];
    $v5 = $_POST['f5'];
    $v6 = $_POST['f6'];
    $v7 = $_POST['f7'];
    
    if ($v6 !== $v7) {
        echo "<script>alert('Passwords do not match');</script>";
    } else {
        $query = mysqli_query($conn, "INSERT INTO user VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', '$v6')");
        if ($query) {
            echo "<script>alert('Account Created Successfully'); window.location.href='user_login.php';</script>";
        } else {
            echo "<script>alert('Signup failed');</script>";
        }
    }
}
?>