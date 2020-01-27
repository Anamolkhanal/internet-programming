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
if(isset($_POST['submit'])){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];

$sql="UPDATE users SET name='$name', email='$email',message='$message' WHERE id ='$id'";
$query=mysqli_query($conn,$sql);
if($query){
header("location:1page.php");
}
else die("failed to update");
$conn->close();
}


 ?>