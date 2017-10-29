<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","naidu");
if(isset($_POST['wlogin']))
{
    $username=($_POST['username']);
    $password=($_POST['password']);
    $sql="SELECT * FROM workreg WHERE username='$username' AND password='$password'";
    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['message']="You are now Loggged In";
        $_SESSION['username']=$username;
        header("location:workerpage.php");
    }
   else
   {
                $_SESSION['message']="Username and Password combiation incorrect";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
table{
	border-collapse: collapse;
	width:80%;
}
	
	</style>
  <title>workerlogin</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="header">
    <h1>WORKER LOGIN FORM</h1>
</div>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<form method="post" action="workerlogin.php">
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput" ></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="text" name="password" class="textInput"></td>
     </tr>
      <tr>
           <td></td>
           <td><center><input type="submit" name="wlogin" class="Log In" value="LOGIN"></center></td>
     </tr>
 
</table>
</form>
</body>
</html>