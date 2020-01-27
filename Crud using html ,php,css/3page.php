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
$sql="SELECT * FROM users";
$query=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<thead>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Message</th>
		</thead>
		<?php
		if(mysqli_num_rows($query)>0)
		{
			while($rows=mysqli_fetch_assoc($query))
			{
				echo'<tr>';
				echo'<td>'.$rows['id'].'</td>';
				echo'<td>'.$rows['name'].'</td>';
				echo'<td>'.$rows['email'].'</td>';
				echo'<td>'.$rows['message'].'</td>';
				echo'<td> <a href="delete.php?id='.$rows['id'].'">Delete</a> <a href="edit.php?id='.$rows['id'].'">Edit</a></td>';
				echo'<tr>';

			}

		}
		?>

	</table>


</body>
</html>