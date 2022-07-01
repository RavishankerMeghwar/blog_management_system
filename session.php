<?php 

session_start();


if(isset($_SESSION['user']['role']) && $_SESSION['user']['role'] == 1)
{
	header("location:admin/index.php");
}
else if(isset($_SESSION['user']['role']) && $_SESSION['user']['role'] == 2)
{
	header("location:author/index.php");
}
else if(isset($_SESSION['user']['role']) && $_SESSION['user']['role'] == 3)
{
	header("location:user/index.php");
}

?>