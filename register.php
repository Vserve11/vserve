<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","naidu");
if(isset($_POST['register_btn']))
{
    $username=($_POST['username']);
    $email=($_POST['email']);
    $password=($_POST['password']);
    $password2=($_POST['password2']);  
     if($password==$password2)
     {           //Create User
            $password=md5($password); //hash password before storing for security purposes
            $sql="INSERT INTO reg(username,email,password) VALUES('$username','$email','$password')";
            mysqli_query($db,$sql);   
			$_SESSION['message']="Login Again To Access Account";
            header("location:login.php");
			
    }
    else
    {
      $_SESSION['message']="The two password do not match";   
     }
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
table{
	border-collapse: collapse;
	width:75%;
}
	
	</style>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="header">
    <h1>REGISTER</h1>
</div>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<form method="post" action="register.php">
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput" required></td>
     </tr>
     <tr>
           <td>Email : </td>
           <td><input type="email" name="email" class="textInput" required></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput" required></td>
     </tr>
      <tr>
           <td>Confirm Password</td>
           <td><input type="password" name="password2" class="textInput" required></td>
     </tr>
      <tr>
           <td></td>
           <td><center><input type="submit" name="register_btn" class="Register" value="REGISTER"></center></td>
     </tr>
 
</table>
</form>
</body>
</html>
