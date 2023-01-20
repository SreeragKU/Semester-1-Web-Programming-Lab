<?php
include 'dp.php';
$Rm=$_GET["de"];
$Rst=mysqli_query($Str,"SELECT * FROM `pictures` WHERE `Reg_id`='$Rm'");
$row = mysqli_fetch_array($Rst);
unlink("Images/".$row["Photo"]);
mysqli_query($Str,"DELETE FROM `pictures` WHERE `Reg_id`='$Rm'");
header("location:view6.php");
?>
