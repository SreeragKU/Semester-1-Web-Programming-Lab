<?php
include 'dp.php';
?>
<html>
<head>
<style>
img{
	width:200px;
	height:150px;
}
table{
	font-size:20px;
	background-image:url(N2.jpg);
	background-size:cover;
	border-radius:15px;
	border-style:solid;
}
th{
	color:darkcyan;
	font-size:21px;
}
body{
	background-image:url(N1.jpg);
	background-size:cover;
}
hr{
	height:2px;
	background-color:brown;
}
.bt {
	background: #0066A2;
	color: white;
	border-style: outset;
	border-color: #0066A2;
	border-radius: 10px;
	height: 50px;
	width: 120px;
	font: bold15px arial,sans-serif;
	text-shadow: none;
}
a{
	font-size:18px;
}
</style>
</head>
<body>
<center>
<a href="index1.php"> Click here to return</a>
<table border="1" cellspacing="5" cellpadding="4">
<tr>
<th>Uploaded Image</th>
</tr>
<?php 
$Rst=mysqli_query($Str,"SELECT * FROM `pictures`");
while($rows=mysqli_fetch_array($Rst))
{?>
<tr>
<td><img src="Images/<?php echo $rows["Photo"]; ?>"></td>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>
