<?php
   include 'db.php';
   $id = $_GET['up'];
   $sql = "SELECT *FROM `regis` WHERE `Reg_id` = $id ";
   $Rst = mysqli_query($Str,$sql);
   
   if(isset($_POST['b1']))
{
	“
	unlink("Multimedia/".$row["Multimedia"]);
	$Nm=$_POST["t1"];
	$Ad=$_POST["t2"];
	$Ct=$_POST["t3"];
	$INm=$_FILES["img"]["name"];
	$ItNm=$_FILES["img"]["tmp_name"];
	move_uploaded_file($_FILES["img"]["tmp_name"],"Multimedia/".$_FILES["img"]["name"]);
    $sql = "UPDATE `regis` SET `Reg_Name`='$Nm',`Reg_Address`='$Ad',`Reg_Contact`='$Ct',`Multimedia`='$INm' WHERE `Reg_id`= $id";
	$Rst=mysqli_query($Str,$sql);
	header("location:view.php");
}
  
?>
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
img{
	width:150px;
	height:120px;
}
</style>
</head>
<body>
<br><br><br><br><br>
<center>
<form method="post" action ="#" enctype="multipart/form-data">
<?php
while($row = mysqli_fetch_array($Rst))
  {
?>
<table border="2" cellspacing="10" cellpadding="5">
<form action="#" method="POST" enctype="multipart/form-data">
<tr><td>Enter your name: </td><td><input type="text" name="t1" value="<?php echo $row["Reg_Name"]; ?>"></td></tr>
<tr><td>Enter your address: </td><td><textarea rows="3" cols="22" name="t2" value="<?php echo $row["Reg_Address"]; ?>"></textarea></td></tr>
<tr><td>Enter your contact number: </td><td><input type="text" name="t3" value="<?php echo $row["Reg_Contact"]; ?>"></td></tr>
<tr><td>Image Upload: </td><td><input type="file" name="img"></td><td><img src="Multimedia/<?php echo $row["Multimedia"];?>"></td></tr>
<tr><td></td><td><input type="submit" name="b1" value="Register"></td></tr>
</form>
</table>
<?php 
  } 
?>
</form>
</center>
</body>
