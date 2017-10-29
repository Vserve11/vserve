<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","naidu");
if(isset($_POST['login_btn']))
{
    $username=($_POST['username']);
    $password=($_POST['password']);
    $password=md5($password); //Remember we hashed password before storing last time
    $sql="SELECT * FROM reg WHERE username='$username' AND password='$password'";
    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['message']="login success";
        $_SESSION['username']=$username;
        header("location:mainhome.php");
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
#naidu{
	position:absolute;
	right:5px;
	top:1px;
	
}
div.polaroid1 {
  color:white;
  width: 15%;
  background-color:#1ABC9C;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  float:right;
  position:absolute;
	top:20px;
	right:5px;
	text-decoration: none;
}
div.container {
  text-align: center;
  padding:1px;
  text-decoration: none;
}

	
	</style>
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="header">
    <h1>LOGIN FORM</h1>
</div>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<form method="post" action="login.php">
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput" required></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput" required></td>
     </tr>
      <tr>
           <td></td>
           <td><center><input type="submit" name="login_btn" class="Log In" value="LOGIN"></center></td>
     </tr>
 
</table>
</form>
<div class="polaroid1" style="float:right;">
  <div class="container" >
    <a href="register.php"><p>REGISTER</p></a>
  </div>
</div>
</body>
</html>