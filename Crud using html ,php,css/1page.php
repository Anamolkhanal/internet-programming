<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<form action="2paage.php" method="POST">
			<table>
				<tr>
					<td>Name :</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="passsword"></td>
				</tr>
				<tr>
					<td>Message :</td>
					<td><textarea rows="10" cols="20" name="message" placeholder="(write something!!!)"></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value='submit'></td>
					<td><input type="reset" name="reset" value='reset'></td>
					<td><a href="3page.php">Display</a></td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>