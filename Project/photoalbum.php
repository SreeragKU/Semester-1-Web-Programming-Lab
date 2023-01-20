<html>
<head>
<style>
table{
	font-size:24px;
	border-style:double;
	background-image:url(N2.jpg);
	background-size:cover;
	border-radius:15px;
	border-style:solid;
}
td{
	border:none;
}
th{
	border:none;
	color:darkcyan;
	font-size:34px;
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
<?php
include 'dp.php';
if(isset($_POST["b1"]))
{
	$INm=$_FILES["img"]["name"];
	move_uploaded_file($_FILES["img"]["tmp_name"],"Images/".$_FILES["img"]["name"]);
	$St="INSERT INTO `pictures`(`Photo`) VALUES ('$INm')";
	$Rst=mysqli_query($Str,$St);
	header("location:view5.php");
}
?>
<center>
<table border="6" cellspacing="25" cellpadding="9">
<form action="#" method="POST" id="form" enctype="multipart/form-data">
<tr><td>Image Upload: </td><td><input type="file" name="img"></td></tr>
<tr><td></td><td><input type="submit" name="b1" value="Upload"></td></tr>
</form>
</table>
</center>
</body>
</html>
