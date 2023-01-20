
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
if(isset($_POST["b1"])){
$Em=$_POST['t1'];
$Ps=$_POST['t2'];
$query="SELECT `Email` FROM `register` WHERE Email='$Em' and Password='$Ps'";
$result =$Str->query($query) OR die();
if(mysqli_num_rows($result)>0)
  {
     $_SESSION['adminvar']= $Em;
     header("location: index1.php");
   }
   else 
  {
    
     $error="Your Email or Password is invalid";
    echo("$error");?>  
   <a href="login.php">Click here to go back to login</a>
   <?php
  }
}
?>
<form action="" method="post">
<?php
if(isset($error)){
foreach($error as $error){
echo '<span class="error-msg">'.$error.'</span>';
};
};
?>
<center>
<table border="6" cellspacing="25" cellpadding="9">
<tr><th colspan="2">Login<br><hr></th></tr>
<tr><td>Email</td><td><input type="text" name="t1" id="id3" placeholder="example@mail.com" required></td></tr>
<tr><td>Password</td><td><input type="password" name="t2" id="id4" placeholder="*******" required></td></tr>
<tr><td></td><td><input type="submit" name="b1" value="Log In" id="id6" class="bt"></td></tr>
<tr><td></td><td><a href="registration.php">Don't have an account? Register now! </a></td></tr>
</form>
</center>
</body>
</html>
