
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
<table border="1" cellspacing="5" cellpadding="4">
<th>First Name</th>
<th>Last Name</th>
<th>DOB</th>
<th>Email</th>
<th>Contact Number</th>
<th>Gender</th>
<th>Address</th>
<th>City</th>
<th>Pincode</th>
<th>State</th>
<th>Country</th><tr>
<?php 
$Rst=mysqli_query($Str,"SELECT * FROM `personal`");
while($rows=mysqli_fetch_array($Rst))
{?>
<tr>
<td><?php echo $rows["FName"]; ?></td>
<td><?php echo $rows["LName"]; ?></td>
<td><?php echo $rows["DOB"]; ?></td>
<td><?php echo $rows["Email"]; ?></td>
<td><?php echo $rows["Mobile"]; ?></td>
<td><?php echo $rows["Gender"]; ?></td>
<td><?php echo $rows["Address"]; ?></td>
<td><?php echo $rows["City"]; ?></td>
<td><?php echo $rows["Pincode"]; ?></td>
<td><?php echo $rows["State"]; ?></td>
<td><?php echo $rows["Country"]; ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>