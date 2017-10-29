<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","root","","naidu");


?>

<!DOCTYPE html>
<html>
<head>
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 14px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position:absolute;
    display: inline-block;
	top:10px;
	right:10px;
	
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 107px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
ul {
    list-style-type: none;
    margin: 0;
    padding:0;
    overflow: hidden;
    background-color: #333;
	display: block;
	width:656.5px;	
}

li {
    float: left;
    border-right:1px solid #bbb;
}
li:last-child{
border:none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	
}

li a:hover{
    background-color: #111;
}

body {
margin:25px;
}

div.polaroid {
  color:white;
  width: 15%;
  background-color:#1ABC9C;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  float:left;
  margin-right:15px;
  margin-left:40px;
  margin-top:25px;
}

div.container {
  text-align: center;
  padding:1px;
}
.active{
background-color:#27CB4C;
}
.nani{
	position:absolute;
	right:150px;
	top:1px;
}

</style>
</head>
<body>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<div class="nani">
    <h4><?php echo $_SESSION['username']; ?></h4>
	</div>
<div class="dropdown" style="float:right;">
  <button class="dropbtn">ACCOUNT</button>
  <div class="dropdown-content">
    <a href="logout.php">LOG OUT</a>
  </div>
</div>
<center>
<ul>
  <li><a href="mainhome.php">HOME</a></li>
 <li><a href="carriage.php">CARRIAGE DELIVERY</a></li>
  <li><a href="tailoring.php">TAILORING</a></li>
  <li><a href="photography.php">PHOTOGRAPHY</a></li>
    <li><a class="active">GROCERY</a></li>
  </ul>
  </center>
<div class="dropdown" style="float:right;">
  <button class="dropbtn">ACCOUNT</button>
  <div class="dropdown-content">
    <a href="login.php">LOGIN</a>
    <a href="register.php">SIGNUP</a>
  </div>
</div>
<a href="vegetables.php">
<div class="polaroid">
  <img src="vegetables.jpg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p style="color:white;">VEGETABLES</p>
  </div>
</div>
</a>
<div class="polaroid">
  <img src="icecream.jpg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p>ICECREAMS</p>
  </div>
</div>
<div class="polaroid">
  <img src="dryfruits.jpg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p>DRY FRUITS</p>
  </div>
</div>

<div class="polaroid">
  <img src="chacolate.jpg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p>CHOCOLATES</p>
  </div>
</div>
<div class="polaroid">
  <img src="milk.jpeg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p>DAIRY</p>
  </div>
</div>

<div class="polaroid">
  <img src="perfume.jpg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p>PERFUMES</p>
  </div>
</div>
<div class="polaroid">
  <img src="oral.jpg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p>ORAL CARE</p>
  </div>
</div>

<div class="polaroid">
  <img src="dals.jpg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p>DALS</p>
  </div>
</div>

</body>
</html>
