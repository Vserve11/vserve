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


</style>
</head>
<body>
<div class="container">
  <form action="/action_page.php" method="post">
  
    <label for="fname">Full Name:</label>
    <input type="text" id="fname" name="firstname" placeholder="Full name..">

    <label for="lname">Mobile Number:</label>
    <input type="number" id="lname" name="lastname" placeholder="MObile Number.." maxlength="10">
	
	<label for="lname">Email Address:</label>
    <input type="Email" id="lname" name="lastname" placeholder="Email Address.." maxlength="40">

    <label for="country">Area:</label>
    <select id="country" name="country">
      <option value="australia">Tagarapuvalasa</option>
      <option value="canada">Anandapuram</option>
      <option value="usa">Maddilapalem</option>
    </select>

    <label for="subject">Source Address:</label>
    <textarea id="subject" name="subject" placeholder="Write Address.." style="height:200px"></textarea>
	<label for="subject">Destination Address:</label>
    <textarea id="subject" name="subject" placeholder="Write Address.." style="height:200px"></textarea>
	

    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>