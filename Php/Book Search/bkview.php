<?php
include 'bkdb.php';
?>
<html>
<head>
</head>
<body>
<a href="Book.php">Go to Registration Page</a><br><br>
<a href="Search.php">Search for a specific book</a>
<br>
<form>
</form>
<table border="1" cellspacing="5" cellpadding="4">
<tr><th>Registration ID</th>
<th>Book Name</th>
<th>Book Edition</th>
<th>Book Author</th>
<th>Book Publisher</th>
<th>Update</th>
<th>Delete</th>
<?php 
$Rst=mysqli_query($Str,"SELECT * FROM `bookdata`");
while($rows=mysqli_fetch_array($Rst))
{?>
<tr>
<td><?php echo $rows["Reg_Id"]; ?></td>
<td><?php echo $rows["Reg_Name"]; ?></td>
<td><?php echo $rows["Reg_Edition"]; ?></td>
<td><?php echo $rows["Reg_Author"]; ?></td>
<td><?php echo $rows["Reg_Publisher"]; ?></td>
<td><a href="bkedit.php?up=<?php echo $rows["Reg_Id"];?>">Update</a></td>
<td><a href="bkdel.php?de=<?php echo $rows["Reg_Id"];?>"> Remove</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
