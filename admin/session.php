<?php 	
	session_start();
	if(!isset($_SESSION['user']))
	{
		session_destroy();
		header("location:../index.php?msg=First Login&class=red");
	}
	if($_SESSION['user']['role'] != 1)
	{
		header("location:../index.php");
	}
?>