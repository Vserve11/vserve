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
	width:35.3%;	
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
  margin-top:30px;
}
div.polaroid1 {
  color:white;
  width: 15%;
  background-color:#1ABC9C;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  float:left;
  position:absolute;
	top:25px;
	left:62px;
}

div.container {
  text-align: center;
  padding:1px;
}
.active{
background-color:#27CB4C;
}
.polaroid2{
	color:white;
  width: 14%;
  background-color:#1ABC9C;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  float:left;
  position:absolute;
	top:400px;
	left:68px;
}
</style>
</head>
<body>
<center>
<ul>
  <li><a href="mainhome.php">HOME</a></li>
  <li><a href="file:///C:/Users/Naidu%20Yerra/Desktop/new%201.html#news" class="active">GROCERY</a></li>
  <li><a href="tailoring.php">TAILORING</a></li>
  <li><a href="photography.php">PHOTOGRAPHY</a></li>
  </ul>
  </center>
<div class="dropdown" style="float:right;">
  <button class="dropbtn">ACCOUNT</button>
  <div class="dropdown-content">
    <a href="login.php">LOGIN</a>
    <a href="register.php">SIGNUP</a>
  </div>
</div>
<div class="polaroid1" style="float:left;">
  <div class="container" >
    <p>ORAL</p>
  </div>
</div>

<div class="polaroid">
  <img src="cabbage.jpg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p>CABBAGE</p>
	
<label>QUA</label><input type="number" min="1" max="9" step="1" value="1">
</div> 
<button style="width:100%;"> <p>ADDTOCART</p></button>
	</div>
<div class="polaroid">
  <img src="potato.jpg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p>POTATO</p>
	<label>QUA</label><input type="number" min="1" max="9" step="1" value="1">
  </div>
<button style="width:100%;"> <p>ADDTOCART</p></button>
</div>

<div class="polaroid">
  <img src="brinjal.jpg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p>BRINJAL</p>
	<label>QUA</label><input type="number" min="1" max="9" step="1" value="1">
  </div>
  <button style="width:100%;"> <p>ADDTOCART</p></button>
</div>



<div class="polaroid">
  <img src="garlic.jpg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p>GARLIC</p>
	<label>QUA</label><input type="number" min="1" max="9" step="1" value="1">
  </div>
  <button style="width:100%;"> <p>ADDTOCART</p></button>
</div>

<div class="polaroid">
  <img src="ginger.jpg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p>GINGER</p>
	<label>QUA</label><input type="number" min="1" max="9" step="1" value="1">
  </div>
  <button style="width:100%;"> <p>ADDTOCART</p></button>
</div>
<div class="polaroid">
  <img src="tomato.jpg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p>TOMATO</p>
	<label>QUA</label><input type="number" min="1" max="9" step="1" value="1">
  </div>
  <button style="width:100%;"> <p>ADDTOCART</p></button>
</div>

<div class="polaroid">
  <img src="keera.jpg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p>KEERA</p>
	<label>QUA</label><input type="number" min="1" max="9" step="1" value="1">
  </div>
  <button style="width:100%;"> <p>ADDTOCART</p></button>
</div>

<div class="polaroid">
  <img src="bitter.jpg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p>BITTER GUARD</p>
	<label>QUA</label><input type="number" min="1" max="9" step="1" value="1">
  </div>
  <button style="width:100%;"> <p>ADDTOCART</p></button>
</div>


<div class="polaroid">
  <img src="onion.jpg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p>ONION</p>
	<label>QUA</label><input type="number" min="1" max="9" step="1" value="1">
  </div>
  <button style="width:100%;"> <p>ADDTOCART</p></button>
</div>

<div class="polaroid">
  <img src="cucumber.jpg" alt="Norway" width="100" height="180" style="width:100%">
  <div class="container">
    <p>CUCUMBER</p>
	<label>QUA</label><input type="number" min="1" max="9" step="1" value="1">
  </div>
  <button style="width:100%;"> <p>ADDTOCART</p></button>
</div>

</body>
</html>
