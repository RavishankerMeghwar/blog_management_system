<?php 
require_once("./require/connection.php");
	session_start();
	if(isset($_SESSION['user_id'])){
	// echo $user_id;
	 $login_time_query = "Update log set logout_time=NOW() where user_id=".$_SESSION['user_id'];
     mysqli_query($connection,$login_time_query);
	}
	if(isset($_SESSION['user']))
	{
				
		session_destroy();
		header("location:index.php?msg=Logout Successfull&class=green");
	}

?>