<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","naidu");
if(isset($_POST['workerreg']))
{
    $username=($_POST['username']);
    $email=($_POST['email']);
	$mobile=($_POST['mobile']);
    $password=($_POST['password']);
            $sql="INSERT INTO workreg(username,email,mobile,password) VALUES('$username','$email','$mobile','$password')";
            mysqli_query($db,$sql);  
            $_SESSION['message']="successfully send data"; 
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>workerRegister</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="header">
    <h1> WORKER REGISTER</h1>
</div>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<form method="post" action="workerreg.php">
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput"></td>
     </tr>
     <tr>
           <td>Email : </td>
           <td><input type="email" name="email" class="textInput"></td>
     </tr>
	 <tr>
           <td>mobile : </td>
           <td><input type="mobile" name="mobile" class="textInput"></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="text" name="password" class="textInput"></td>
     </tr>
	 
      <tr>
           <td></td>
           <td><input type="submit" name="workerreg" class="Register"></td>
     </tr>
 
</table>
</form>
</body>
</html>
