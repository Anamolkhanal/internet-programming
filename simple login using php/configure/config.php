<?php 
$server="localhost";
$username="root";
$password="";
$dbname="project";
$sql="";
$tablename="signup";
$conn=mysqli_connect($server,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>