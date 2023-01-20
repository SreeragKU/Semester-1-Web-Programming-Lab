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
	$Fnm=$_POST["t1"];
	$Lnm=$_POST["t2"];
	$Em=$_POST["t3"];
	$Ps=$_POST["t4"];
	$St="INSERT INTO `register`(`Fname`, `Lname`, `Email`, `Password`) VALUES ('$Fnm','$Lnm','$Em','$Ps')";
	$St1="INSERT INTO `personal`(`FName`, `LName`,`Email`) VALUES ('$Fnm','$Lnm','$Em')";
	$Db=mysqli_query($Str,$St);
	$Db1=mysqli_query($Str,$St1);
	header("location: login.php");
}
?>
<br><br><br>
<center>
<table border="6" cellspacing="25" cellpadding="9">
<form action="#" method="POST" id="form">
<tr><th colspan="2">Create Account<br><hr></th></tr>
<tr><td>First name</td><td><input type="text" name="t1" id="id1" placeholder="Erin" required></td></tr>
<tr><td>Last name</td><td><input type="text" name="t2" id="id2" placeholder="Matthew"></td></tr>
<tr><td>Email</td><td><input type="text" name="t3" id="id3" placeholder="example@mail.com" required></td></tr>
<tr><td>Password</td><td><input type="password" name="t4" id="id4" placeholder="*******" required></td>
</tr>
<tr><td></td><td><input type="submit" name="b1" value="Register" id="id6" class="bt"></td></tr>
<tr><td></td><td><a href="login.php">Already registered? Login here! </a></td></tr>
</form>
</table>
</center>
</body>
</html>