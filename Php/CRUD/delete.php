<?php
include 'db.php';
$Rm=$_GET["de"];
$Rst=mysqli_query($Str,"DELETE FROM `regis` WHERE `Reg_id`='$Rm'");
header("location:view.php");
?>
