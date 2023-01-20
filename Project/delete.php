<?php
include 'dp.php';
$Rm=$_GET["de"];
$Rst=mysqli_query($Str,"DELETE FROM `personal` WHERE `Reg_id`='$Rm'");
header("location:login.php");
?>