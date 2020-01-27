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

	$sql="SELECT * FROM users WHERE id='$id'";
	$query=mysqli_query($conn,$sql);
	$row =mysqli_fetch_assoc($query);
}

?>
<!--
// 	$name=$_GET['name'];
// 	$email=$_GET['email'];
// 	$message=$_GET['message'];

// $sql="UPDATE users()  SET name='$name', email='$email',message='$message' WHERE id ='$id'";
// $query=mysqli_query($conn,$sql);
// if($query)
// {
// 	header("location:3page.php");
// }
// else die('Failed to delete');
 } -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<form action="update.php" method="POST">
			
			<table>
				<tr>
					<td>ID:</td>
					<td><input type "hidden" name="id" value="<?php echo $row['id'];?>"></td>
				</tr>
				<tr>
					<td>Name :</td>
					<td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
				</tr>
				<tr>
					<td>Message :</td>
					<td><textarea rows="10" cols="20" name="message"><?php echo $row['message'];?></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value='submit'></td>
					<td><input type="reset" name="reset" value='reset'></td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>
