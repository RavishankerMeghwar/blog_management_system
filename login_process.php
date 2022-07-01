<?php 
	session_start();
	require_once("require/connection.php");
	if(isset($_POST['login']))
	{
		extract($_POST);
		$login_query = "Select * From users where email = ? and user_password=?";
		$login_stmt = mysqli_prepare($connection,$login_query);
		mysqli_stmt_bind_param($login_stmt,"ss",$email,$password);
		mysqli_stmt_execute($login_stmt);
		mysqli_stmt_bind_result($login_stmt,$user_id,$role,$full_name,$email1,$user_password1,$gender);
		mysqli_stmt_store_result($login_stmt);
		if(mysqli_stmt_num_rows($login_stmt) > 0)
		{
			mysqli_stmt_fetch($login_stmt);
			$data = [
				"full_name" =>$full_name,
				"user_id"   => $user_id,
				"role"		=> $role,
				"email"		=> $email1,
				"gender"	=> $gender,
			];

			$_SESSION['user'] = $data;
			
			$login_time_query = "INSERT INTO LOG(user_id,login_time) VALUES('".$user_id."',NOW())";
		    mysqli_query($connection,$login_time_query);
			$_SESSION['user_id'] = $user_id;
		   if($role == 1)
			{
				header("location:admin/index.php");
			}
			else if($role == 2)
			{
				header("location:author/index.php");
			}
			else if($role == 3)
			{
				header("location:user/index.php");
			}
		}
		else 
		{
			header("location:index.php?msg=Login Failed!...&class=red");
		}
		

	}


?>