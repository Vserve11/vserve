<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","naidu");
if(isset($_POST['submit']))
{
    $fullname=($_POST['fullname']);
    $email=($_POST['email']);
    $mobile=($_POST['mobile']);
    $area=($_POST['area']);
	$activity=($_POST['activity']);
	$address=($_POST['address']);
            $sql="INSERT INTO torder(fullname,email,mobile,area,activity,address) VALUES('$fullname','$email','$mobile','$area','$activity','$address')";
            mysqli_query($db,$sql);  
            $_SESSION['message']="order placed successfully"; 
            header("location:home.php"); 
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #CBFCFC;
    padding: 20px;
	width:40%;
	position:absolute;
	left:400px;
	top:30px;
}
input[type=number],input[type=email]{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
#mobile{
	border-radius:4px;
	box-sizing: border-box;
	border: 1px solid #ccc;
}


</style>
</head>
<body>
<div class="container">
  <form action="contact.php" method="post">
    <label for="fname">Full Name:</label>
    <input type="text" id="fname" name="fullname" placeholder="Full name..">

    <label for="lname">Email:</label>
    <input type="email" id="lname" name="email" placeholder="Email.." maxlength="40">
	
	<label for="lname">Mobile:</label>
    <input type="mobile" id="mobile" name="mobile" placeholder="Mobile.." maxlength="10" style="width:100%;height:38px;" >
	
 <label for="fname">Area:</label>
    <input type="text" id="fname" name="area" placeholder="area..">
   
	
	 <label for="subject">Activity:</label>
    <textarea id="subject" name="activity" placeholder="Enter your requirements " style="height:100px"></textarea>

    <label for="subject">Address:</label>
    <textarea id="subject" name="address" placeholder="Write Address.." style="height:200px"></textarea>

    <input type="submit" name="submit" value="Submit">
  </form>
</div>
</body>
</html>