<?php 
	require_once("require/connection.php");


	if(isset($_POST['register']))
	{
		extract($_POST);

		$query = "INSERT INTO users (full_name,email,user_password,gender,role) values(?,?,?,?,?)";
		$stmt = mysqli_prepare($connection,$query);

		$role = (int) $role;
		mysqli_stmt_bind_param($stmt,"ssssi",$full_name,$email,$password,$gender,$role);

		if(mysqli_stmt_execute($stmt))
		{
			header("location:register.php?msg=Your Account Has Been Registered&class=green");
		}
		else
		{
			header("location:register.php?msg=Your Account Has Not Been Registered&class=red");
		}

	}




?>