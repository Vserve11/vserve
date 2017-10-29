<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","root","","naidu");


?>
<!DOCTYPE html>
<html>
<body>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<div>
    <h4><?php echo $_SESSION['username']; ?></h4></div>
</div>
<a href="logout.php">Log Out</a>
</body>
</html>
