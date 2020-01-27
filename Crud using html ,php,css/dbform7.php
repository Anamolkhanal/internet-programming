
<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "test123";
$dbtable="personal_info";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_email['email'];
		$gender=$_POST['gender'];
		$course=$_POST['course[]'];
		$bio=$_POST['bio'];
		
		$path ="uploads/";
		$path=$path.basename($_FILES['profile_pic']['name']);
		move_uploaded_file($_FILES['profile_pic']['tmp_name'],$path);
		$img=$_FILES['profile_pic']['name'];

	$sql="INSERT INTO $dbtable(name,email,image,gender,course,bio) VALUES('$name','$email','$img','$gender','$course','$bio')";
	die();

	if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	}

?>