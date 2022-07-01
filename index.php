<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>bms > login</title>
</head>
<body>
<?php 
	require_once("session.php");
?>
	<center>
		<h1>
			HIST::Login Page 
		</h1>
		<hr />
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

		?>
		<fieldset style="width: 60%">
			<legend>Login Here...</legend>
			<form action="login_process.php" method="POST">
				<table style="width:100%">
					<tr>
						<th>Email: </th>
						<td><input type="email" name="email" placeholder="Enter email" required style="width:80%"> </td>
					</tr>
					<tr>
						<th>Password: </th>
						<td><input type="password" name="password" placeholder="Enter password" required style="width:80%"> </td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="login" value="Login">
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
		<p>
			Don't have an account 
			<a href="register.php">Register Here</a>
		</p>
	</center>

</body>
</html>