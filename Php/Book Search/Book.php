<html>
<head>
<style>
td{
	border:none;
}
table{
	margin:200px 450px;
	background-color:white;
}
body{
	background-color:darkseagreen;
}
</style>
<title>
Book Registration
</title>
</head>
<body>
<?php
include 'bkdb.php';
if(isset($_POST["b1"]))
{
	$Nm=$_POST["t1"];
	$Ed=$_POST["t2"];
	$At=$_POST["t3"];
	$Pb=$_POST["t4"];
	$St="INSERT INTO `bookdata`(`Reg_Name`, `Reg_Edition`, `Reg_Author`, `Reg_Publisher`) VALUES ('$Nm','$Ed','$At','$Pb')";
	$Rst=mysqli_query($Str,$St);
	header("location:bkview.php");
}
?>
<form action="#" method="post">
<table border="8" cellpadding="5" cellspacing="8">
<tr><td>Enter the name of the Book: </td><td><input type="text" name="t1"></td></tr>
<tr><td>Enter the Edition: </td><td><input type="text" name="t2"></td></tr>
<tr><td>Enter the name of the Author: </td><td><input type="text" name="t3"></td></tr>
<tr><td>Enter the name of the Publisher: </td><td><input type="text" name="t4"></td></tr>
<tr><td></td><td><input type="submit" name="b1" value="Register">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="reset" value="Clear All"></td></tr>
<table>
</form>
</body>
</html>
