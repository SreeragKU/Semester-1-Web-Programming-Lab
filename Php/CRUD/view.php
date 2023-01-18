<?php
include 'db.php';
?>
<html>
<head>
<style>
img{
	width:200px;
	height:150px;
}
body{
	background-color:lightgray;
}
table{
	background-color:white;
	border-radius:10px;
}
</style>
</head>
<body>
<a href="db1.php">Go to Registration Page</a>
<center>
<table border="1" cellspacing="5" cellpadding="4">
<tr><th>Registration ID</th>
<th>Name</th><th>Address</th>
<th>Contact Number</th>
<th>Uploaded Image</th>
<th>Update</th>
<th>Remove</th><tr>
<?php 
$Rst=mysqli_query($Str,"SELECT* FROM `regis`");
while($rows=mysqli_fetch_array($Rst))
{?>
<tr>
<td><?php echo $rows["Reg_id"]; ?></td>
<td><?php echo $rows["Reg_Name"]; ?></td>
<td><?php echo $rows["Reg_Address"]; ?></td>
<td><?php echo $rows["Reg_Contact"]; ?></td>
<td><img src="Multimedia/<?php echo $rows["Multimedia"]; ?>"></td>
<td><a href="edit.php?up=<?php echo $rows["Reg_id"];?>">Update</a></td>
<td><a href="delete.php?de=<?php echo $rows["Reg_id"];?>"> Remove</a></td>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>
