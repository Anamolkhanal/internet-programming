<?php
	mysqli_connect("localhost","root","","users");
	if (isset($_POST['submit']));
	{
		$email=$_POST['email'];
		$password=sha1($_POST['password']);

		$sql="SELECT eamil,password from users WHERE email='$email' AND password='$password'";
		$query=mysli_query($conn,$sql);
		if(mysqli_num_rows($query)>0)
		{
			echo"sucessfully logged in";
		}
		else
		{
			echo"fail to logged in";
		}
	}