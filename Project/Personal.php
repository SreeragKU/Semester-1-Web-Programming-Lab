<?php
   include 'dp.php';
   $id = $_GET['up'];
   $St = "SELECT * FROM `personal` WHERE `Reg_id` = $id ";
   $result = mysqli_query($Str,$St);
   
   if(isset($_POST['b1']))
{
	$Fnm=$_POST["t1"];
	$Lnm=$_POST["t2"];
	$dob=$_POST["t3"];
	$Mb=$_POST["t4"];
	$Gd=$_POST["gender"];
	$Ad=$_POST["t6"];
	$Ct=$_POST["t7"];
	$Pn=$_POST["t8"];
	$Sa=$_POST["t9"];
	$Cy=$_POST["t10"];
    $St = "UPDATE `personal` SET `FName`='$Fnm',`LName`='$Lnm',`DOB`='$dob',`Mobile`='$Mb',`Gender`='$Gd',`Address`='$Ad',`City`='$Ct',`Pincode`='$Pn',`State`='$Sa',`Country`='$Cy' WHERE `Reg_id` = $id";
	$result = mysqli_query($Str,$St);
	header( "Location: view.php" ); 
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
<title>Personal Details</title>
</head>
<body>
<form action="#" method="POST">
<center>
<?php
while($row = mysqli_fetch_array($result))
  {
?>
<table border="5" cellspacing="10" cellpadding="10">
<tr><th colspan="2">Personal Details<br><hr></th></tr>
<tr><td>First Name</td><td><input type="text" size="50" name="t1"></td></tr>
<tr><td>Last Name</td><td><input type="text" size="50" name="t2"></td></tr>
<tr><td>Date Of Birth</td><td><input type="date" name="t3"></td></tr>
<tr><td>Mobile Number</td><td><input type="number" name="t4"></td></tr>
<tr><td>Gender</td><td><input type="radio" name="gender">Male<input type="radio" name="gender">Female<input type="radio" name="gender">Others</td></tr>
<tr><td>Address</td><td><textarea rows="4"cols="40" name="t6"></textarea></td></tr>
<tr><td>City</td><td><input type="text" size="50" name="t7"> <td></tr>
<tr><td>Pincode</td><td><input type="number"size="6" name="t8"> (6 digit number)</td></tr>
<tr><td>State</td><td><input type="text" size="35" name="t9"></td></tr>
<tr><td>Country</td><td><select name="t10">
<option disabled selected value>--Select your Country--</option>
<option>India</option>
<option>Bhutan</option>
<option>Pakistan</option>
<option>Bangladesh</option>
<option>Nepal</option>
<option>China</option>
<option>Singapore</option>
<option>Japan</option>
<option>Russia</option>
<option>Others</option>
</select>
<tr><td></td><td><input type="submit" name="b1" value="Update" id="id6" class="bt"></td></tr>
</form>
</table>
<?php 
  }
?>
</center>
</body>
</html>
