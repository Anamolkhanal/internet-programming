<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test123";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$password=$_POST['password'];
$encrypt=sha1($password);

$sql="INSERT INTO users(name,email,password,message) VALUES('$name','$email','$encrypt','$message')";
print_r($sql);
die();

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("location:1page.php");
$conn->close();
 ?>









