<DOCTYPE! html>
<html>
<head>
<title>Orders</title>
<style type="text/css">
table{
	border: 2px solid teal;
	background-color: #76D7C4  ;
	border-collapse: collapse;
	width:100%;
	
}

th {
	border-bottom: 3px solid #17202A;
	border-right: 2px solid #17202A;
	border-collapse: collapse;
	 padding: 1opx;
}

td {
	border-bottom: 2px solid #17202A;
	border-right: 2px solid #17202A;
	border-collapse: collapse;
	 padding: 10px;
}
</style>
</head>
<body>
<h1> Orders</h1>
</body>
</html>






<?php 
$db=mysqli_connect("localhost","root","","naidu");

$sql="SELECT * FROM torder";
$sqldata= mysqli_query($db,$sql) or die('error getting data');

echo "<table>";
echo "<tr><th>ID</th><th>Full Nmae</th><th>Email</th><th>Mobile</th><th>Area</th><th>Activity</th><th>Address</th>";

while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
	
echo "<tr><td>";
echo $row['id'];
echo "</td><td>";
echo $row['fullname'];
echo "</td><td>";
echo $row['email'];
echo "</td><td>";
echo $row['mobile'];
echo "</td><td>";
echo $row['area'];
echo "</td><td>";
echo $row['activity'];
echo "</td><td>";
echo $row['address'];
echo "</td></tr>";
}
echo "</table>";

?>