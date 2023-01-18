<html>
<head>
<style>
body{
	background-color:lightgray;
}
table{
	background-color:white;
	border-radius:10px;
}
td{
	border:none;
}
</style>
</head>
<body>
<?php
include 'db.php';
if(isset($_POST["b1"]))
{
	$Nm=$_POST["t1"];
	$Ad=$_POST["t2"];
	$Ct=$_POST["t3"];
	$INm=$_FILES["img"]["name"];
	$ItNm=$_FILES["img"]["tmp_name"];
	move_uploaded_file($_FILES["img"]["tmp_name"],"Multimedia/".$_FILES["img"]["name"]);
	$St="INSERT INTO `regis`(`Reg_Name`,`Reg_Address`,`Reg_Contact`,`Multimedia`) VALUES('$Nm','$Ad','$Ct','$INm')";
	$Rst=mysqli_query($Str,$St);
	header("location:view.php");
}
?>
<center>
<table border="2" cellspacing="10" cellpadding="5">
<form action="#" method="POST" enctype="multipart/form-data">
<tr><td>Enter your name: </td><td><input type="text" name="t1"></td></tr>
<tr><td>Enter your address: </td><td><textarea rows="3" cols="22" name="t2"></textarea></td></tr>
<tr><td>Enter your contact number: </td><td><input type="text" name="t3"></td></tr>
<tr><td>Image Upload: </td><td><input type="file" name="img"></td></tr>
<tr><td></td><td><input type="submit" name="b1" value="Register"></td></tr>
</form>
</table>
</center>
</body>
</html>
