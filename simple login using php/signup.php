<?php
include 'configure/config.php';

	if(isset($_POST['submit']))
	{
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$phonenumber=$_POST['phonenumber'];
		$password_i=$_POST['password_i'];
		$password_ii=$_POST['password_ii'];

		if ($password_i===$password_ii){
			$password=sha1($password_i);
			$sql="INSERT INTO $tablename (firstname,lastname,email,username,phonenumber,password) VALUES ('$firstname','$lastname','$email','$username','$phonenumber','$password') ";
			if ($conn->query($sql) === TRUE) {
				header("location:login.php");
    		echo "New record created successfully";
			} else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		else
		{
			header("location:signup.php?message=password not matched");
		}

		
	}

// header("location:login.php");
$conn->close();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
</head>
<body>
	<div>
		<form method="post" action="#">
		First Name:<br>
		<input type="text" name="firstname"><br>
		Last Name:<br>
		<input type="text" name="lastname"><br>
		Email:<br>
		<input type="email" name="email"><br>
		Username:<br>
		<input type="text" name="username"><br>
		Phonenumber:<br>
		<input type="number" name="phonenumber"><br>
		Password:<br>
		<input type="password" name="password_i"><br>
		<div class="text-danger"><?php  if(isset($_GET['message'])) {$message=$_GET['message']; echo $message;}?></div>
		Confirm Password:<br>
		<input type="password" name="password_ii"><br>
		<input type="checkbox" name="robot_or_not" value='true'>I'm not a robot.<br>
		<input type="submit" name="submit" value="Sign up">
		
		</form>
	</div>

</body>
</html>