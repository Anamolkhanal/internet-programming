<?php
 session_start();
 error_reporting(0);
$username=$_SESSION['username'];
$name=$_COOKIE['username'];
if($username==true|| $name==true )
{
	if($username==false)
	{
		$username=$_COOKIE['username'];
		echo "welcome $username";
	}
}
else
{
	
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bus ticketing</title>
</head>
<body>

<!-- Welcome!!!!<br> -->
<form action="" method="POST">
	<input type="submit" name="submit" value="LogOut">
</form>
</body>
</html>
<?php 
if(isset($_POST['submit'])){
// session_unset($_SESSION['username']);
	session_destroy();
setcookie("username", "", time() - (86400 * 30), "/");
	header("location:login.php");
}

?>