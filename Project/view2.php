<?php
include 'dp.php';
?>
<html>
<head>
<style>
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
<table border="6" cellspacing="25" cellpadding="9">
<th>Email</th>
<th>Password</th>
<th>Update</th>
<?php 
$Rst=mysqli_query($Str,"SELECT * FROM `register`");
while($rows=mysqli_fetch_array($Rst))
{?>
<tr>
<td><?php echo $rows["Email"]; ?></td>
<td><?php echo $rows["Password"]; ?></td>
<td><a href="update.php?ch=<?php echo $rows["Regid"];?>">Update</a></td>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>