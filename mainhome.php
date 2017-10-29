<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","root","","naidu");


?>
<!DOCTYPE html>
<html><head>
<style>
.nature {
	display:none;
	position:absolute;
	top:100px;
	margin:none;
	left:7px;
	border-radius:10%;
	}
.dropbtn{
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
.dropdown1{
position:absolute;
    display: inline-block;
	top:10px;
	left:10px;
}
.dropbtn1{
    background-color: #4CAF50;
    color: white;
    padding: 14px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}
.dropdown-content{
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 107px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a{
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
body{
background-color:white;
}
ul {
    list-style-type: none;
    margin: 0;
    padding:0;
    overflow: hidden;
    background-color: #333;
	width:656.5px;
    margin-top:25px;	
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
.nani{
	position:absolute;
	right:150px;
	top:2px;
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
   <li><a href="grocery.php">GROCERY</a></li>
  
  </ul>
  </center>
<div class="dropdown1" style="float:left;">
  <a href="workerlogin.php"><button class="dropbtn1">WORKER LOGIN</button></a>
</div>
<img class="nature"src="cam.jpg" width="1350" height="400">
<img class="nature" src="men.jpg" width="1350" height="400">
<img class="nature"src="vegetables.jpg" width="1350" height="400">


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("nature");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000);

}
</script>





</body></html>