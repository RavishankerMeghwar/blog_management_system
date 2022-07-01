<?php 

	require_once("../require/connection.php");

	function getAllPosts()
	{
		global $connection;
		$query = "SELECT * FROM `posts` ORDER BY `posts`.`post_id` DESC";
		$result = mysqli_query($connection,$query);
		return $result;
	}
	function getlogintime()
	{
		global $connection;
		$query = "SELECT login_time FROM `log` order by log_id DESC ";
		$log_time = mysqli_query($connection,$query);
		return $log_time;
	}

	function getPostDataByPostId($post_id)
	{
		global $connection;
		$query = "SELECT * FROM `posts` WHERE `posts`.`post_id` = ".$post_id;
		$result = mysqli_query($connection,$query);
		return $result;

	}

	function getUserNameByUserId($user_id)
	{
		global $connection;
		$query = "SELECT `users`.`full_name` FROM `users` WHERE `users`.`user_id` = ".$user_id;
		$result = mysqli_query($connection,$query);
		$data = mysqli_fetch_assoc($result);
		return $data['full_name'];
	}


	
	


?>