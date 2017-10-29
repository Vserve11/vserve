<!DOCTYPE html>
<html>
<head>
<style>
body{
background-image:url("light.jpg");
background-size:1400px 650px;
}
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


body {margin:25px;}

div.polaroid {
color:white;
  width:20%;
  background-color:#45B39D;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  margin-top: 150px;
}

div.container {
  text-align: center;
  padding:0px 0px 3px 0px;
}
.active{
background-color:#2ECC71;
}
div.btn1{
 background-color: #4CAF50;
    border: none;
	border-radius:5px;
    color: white;
    padding: 1px 5px;;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    cursor: pointer;
	position:absolute;
	bottom:300px;
	right:400px;

}
.active{
	background-color:#4CAF50;
}

</style>
</head>
<body>
<center>
<ul>
  <li><a href="mainhomeempty.php">HOME</a></li>
  <li><a href="carriageempty.php" class="active">CARRIAGE DELIVERY</a></li>
 
  <li><a href="tailoringempty.php">TAILORING</a></li>
  <li><a href="photographyempty.php">PHOTOGRAPHY</a></li>
   <li><a href="groceryempty.php">GROCERY</a></li>
  </ul>
  </center>
<div class="dropdown" style="float:right;">
  <button class="dropbtn">ACCOUNT</button>
  <div class="dropdown-content">
    <a href="login.php">LOGIN</a>
    <a href="register.php">SIGNUP</a>
  </div>
</div>
<center>
<div class="polaroid">
  <img src="men.jpg" alt="Norway" width="20" height="190" style="width:100%">
  <div class="container">
    <p>CARRIAGE DELIVERY</p>
  </div>
  </div>
<div class="btn1" onclick="myFunction()">
<p id="demo">MAKE ORDER<P>
</div>
<script>
function myFunction() {
    var txt;
    if (confirm("please Login") == true) {
		window.location.href="login.php";
    } else {
        window.location.href="carriageempty.php";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>
</body>
</html>