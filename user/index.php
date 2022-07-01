
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HIST>BMS>Admin</title>
	<style type="text/css">
		.post{
			width: 60%;
			margin: 10px;
			padding: 10px;
			background-color: skyblue;
			border: 2px solid red;
			border-radius: 10px;
		}
	</style>
</head>
<body>
<?php 
	require_once("session.php");
	require_once("functions.php");
?>
	<center>
		<h1>HIST BMS (User Penal)</h1>
		<hr />
		<h3>
			<p>Welcome <?php echo $_SESSION['user']['full_name']; ?>
			<a style="float: right;" href="../logout.php"><span >Logout Here..</span></a>
			<span style="clear:both;"></span>
			</p>
			<p> Login Time :<span><?php $log_c_time = getlogintime();
				 $timelogin=mysqli_fetch_assoc($log_c_time);
				echo ( $timelogin['login_time']); ?>
			</span></p>

		</h3>
		<hr/>
		<?php 
			$posts = getAllPosts();

			if($posts->num_rows > 0)
			{

				while($post = mysqli_fetch_assoc($posts)){
				
				?>
					<div class="post">
							<h1 style="text-align: left;"><?php echo ucfirst($post['post__title']); ?></h1>
							<p style="text-align: left;"><b>Summary:</b><?php echo $post['post_summary']; ?></p>
							<a href="post_detail.php?post=<?php echo $post['post_id']; ?>">Read More</a>
					</div>
				<?php
				}
			}
			else
			{
				?>
				<div style="width: 80%;background-color: gray;padding: 10px;margin: 20px;">
					<h1>Post Not Avaiables</h1>
				</div>
				<?php
			}
		?>
	</center>

</body>
</html>