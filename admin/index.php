
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HIST>BMS>Admin</title>
	<style type="text/css">
		.table_post tr th {
		padding: 10px;
		background-color: skyblue;
		color: white;
		}
	</style>
</head>
<body>
<?php 
require_once("session.php");
require_once("functions.php");

?>
	<center>
		<h1>HIST BMS (Admin Penal)</h1>
		<hr />
		<h3>
			<p>Welcome <?php echo $_SESSION['user']['full_name']; ?>
			<a style="float: right;" href="../logout.php"><span >Logout Here..</span> </a>
			<span style="clear:both;"></span>
			</p>
			<p> Login Time :<span><?php $log_c_time = getlogintime();
				 $timelogin=mysqli_fetch_assoc($log_c_time);
				echo ( $timelogin['login_time']); ?>
			</span></p>
			
		</h3>
		<hr/>
		<?php 
				if(isset($_GET['msg']))
				{
					?>
						<p style="font-size: 20px;font-weight: bold;">
							<span style="color:<?php echo $_GET['class']; ?>">
								<?php echo $_GET['msg']; ?>
							</span>
						</p>

					<?php
				}

			if(isset($_GET['edit_post_id']))
			{
				getEditPostFormByPostId($_GET['edit_post_id']);
			}else
			{
				getAddPostForm();
			}	
			
		?>
		
		<hr />
		<table border="1" width="90%" class="table_post">
			<tr>
				<th>Post Title</th>
				<th>Post Summary</th>
				<th>Post Description</th>
				<th>Post Added By</th>
				<th>Actions</th>
			</tr>
			<?php 
				$posts = getAllPosts();
				
				if($posts->num_rows > 0)
				{
					while($post = mysqli_fetch_assoc($posts)){
					?>
					<tr>
						<td align="center"><?php echo ucfirst($post['post__title']); ?></td>
						<td><?php echo $post['post_summary']; ?></td>
						<td><?php echo $post['post_description']; ?></td>
						<td align="center"><?php echo getUserNameByUserId($post['post_by_user_id'])
						 ?></td>
						 <td>
						 	<a href="index.php?edit_post_id=<?php echo $post['post_id']; ?>">
						 		Edit Post
						 	</a>
						 	 <a href="post_process.php?delete_post_id=<?php echo $post['post_id']; ?>">
						 		Delete Post
						 	</a>
						 	<a href="javascript:void(0)" onclick="deletep(<?php echo $post['post_id']; ?>)">Delete</a>
						 </td>
					</tr>
					<?php
					}
				}
				else
				{
					?>
						<tr>
							<td colspan="4" align="center">
								<h2>Posts Not Avaiables</h2>
							</td>
						</tr>
					<?php
				}

			?>
		</table>
	</center>
<script type="text/javascript">
	function deletep(id){
		//alert(id);
		$flag = confirm("Do You Want This Post Delete");
		if($flag)
		{	
			window.location.href = "post_process.php?delete_post_id="+id+" ";
		}

	} 
</script>
</body>
</html>