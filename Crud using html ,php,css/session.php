<?php
	session_start();
	$_SESSION["username"]="sunway";
	$_SESSION["user_type"]="end_user";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo "Username is ".$_SESSION["username"].".<br>";
echo "User type ".$_SESSION["user_type"].".";
?>
</body>
</html>


