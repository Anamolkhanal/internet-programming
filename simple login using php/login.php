<?php
session_start();
include 'configure/config.php';
	if(isset($_POST['submit']))
	{
	$username=$_POST['username'];
	$password=sha1($_POST['password']);
	
$sql="SELECT username,password from $tablename WHERE username='$username' and password='$password'";
$query=mysqli_query($conn,$sql);

$rows=mysqli_fetch_assoc($query);
if(	$rows['username']==$username && $rows['password']==$password){
	$_SESSION['username']=$username;
	if(!empty($_POST['remember'])){
	setcookie("username", $username, time() + (86400 * 30), "/");
	$_COOKIE['username']=$username;
	

}
	  header("location:home.php");	
}
else{
	echo "username or password is not correct!!!";
	die();
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
</head>
<body>
	<div>
		<form method="post" action="">
			Username:<br>
			<input type="text" name="username"><br>
			Password:<br>
			<input type="password" name="password"><br>
			<input type="checkbox" name="remember">Remeber Me<br>
			<input type="submit" name="submit" value="Log In"> 
			<a href="forget.php">Forget password?</a><br>
			Don't have an account?<br>
			<a href="signup.php">Sign up from here.</a>
		</form>
	</div>

</body>
</html>