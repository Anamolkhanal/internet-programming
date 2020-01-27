<?php
include 'configure/config.php';
	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$sql1="SELECT email FROM $tablename WHERE email='$email'";


		// $email=$_POST['email'];

		// $sql1="Select email from $tablename where email=$email";
	
		$query=mysqli_query($conn,$sql1);

		if($query) die("here");
			
		if(mysqli_num_rows($query)>0)
		{
			$value=mysqli_fetch_assoc($query);
			echo $value['email'];
			die();

		$recovery_key=rand(1000,9999);

		$name=$_POST['name'];
		$email=$_POST['email'];
		$description=$_POST['description'];

		$random=rand(10,1000);
		$msg="Name:".$_POST['name']."\n";
		$msg.="Your code :".$recovery_key."\n";

		$recipient=$email;
		$subject="Conformation code!!!";
		$mailheaders="From :My Web Site <anamolkhanal2258@gmail.com>";
		$mailheaders.="Reply-To:".$_POST['email'];
		echo "prabin";
		$sql="UPDATE TABLE $tablename (recovery_key) ";
			if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
			} else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
			}
	mail($recipient,$subject,$msg,$mailheaders);
}
else{
	echo "failed";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forget password</title>
</head>
<body>
	<div>
		<form method="post" action="">
			Name :<input type="text" name="name"><br>
			Email :<input type="email" name="email"><br>
			Description:<input type="text" name="description"><br>
			Note: You will get the comformation code in your above given mail address.<br>
			<input type="submit" name="submit" value="Okay"> <input type="reset" name="reset" value="Cancel">
		</form>
	</div>
</body>
</html>