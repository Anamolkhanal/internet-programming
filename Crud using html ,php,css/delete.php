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
if(isset($_GET['id']))
{
	$id=$_GET['id'];
$sql="DELETE FROM users WHERE id ='$id'";
$query=mysqli_query($conn,$sql);
if($query)
{
	header("location:3page.php");
}
else die('Failed to delete');
}
?>