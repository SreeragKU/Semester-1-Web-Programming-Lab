<?php
   include 'dp.php';
   $id = $_GET['ch'];
   $St = "SELECT *FROM `register` WHERE `Regid` = $id";
   $St1 = "SELECT * FROM `personal` WHERE `Reg_id` = $id";
   $result = mysqli_query($Str,$St);
   $result2 = mysqli_query($Str,$St1);
   if(isset($_POST['b1']))
{
	$Em=$_POST["t1"];
	$Ps=$_POST["t2"];
    $St = "UPDATE `register` SET `Email`='$Em',`Password`='$Ps' WHERE `Regid` = $id ";
	$result = mysqli_query($Str,$St);
	$St1="UPDATE `personal` SET `Email`='$Em' WHERE `Reg_id` = $id";
	$result2 = mysqli_query($Str,$St1);
	header( "Location: index1.php" ); 
}
  
?>
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
<br><br><br><br><br>
<center>
<form method="post" action ="#">
<?php
while($row = mysqli_fetch_array($result))
  {
?>
<table border="6" cellspacing="25" cellpadding="9">
<form action="#" method="POST">
<tr><td>Email</td><td><input type="text" name="t1" id="id3" placeholder="example@mail.com"></td></tr>
<tr><td>Password</td><td><input type="password" name="t2" id="id4" placeholder="*******"></td>
</tr>
<tr><td></td><td><input type="submit" name="b1" value="Change" id="id6" class="bt"></td></tr>
</table>
<?php 
  }
?>
</form>
</center>
</body>