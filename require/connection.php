<?php 
		
	mysqli_report(MYSQLI_REPORT_OFF);

	define("host", "localhost");
	define('username', 'root');
	define('password',"");
	define("database_name","hist_bms");

	$connection = mysqli_connect(host,username,password,database_name);
	if(mysqli_connect_errno())
	{
		echo "Error No:".mysqli_connect_errno()."<br />";
		echo "Error Message:".mysqli_connect_error()."<br />";
		die("Database Connection Failed!....");
	}
	


?>