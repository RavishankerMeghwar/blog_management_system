<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>bms > login</title>
</head>
<body>
	<?php 
			require_once("require/connection.php");
			$query = "SELECT * FROM `roles` WHERE `roles`.`role_id` <> 1";	
			$result = mysqli_query($connection,$query);

	?>
	<center>
		<h1>
			HIST::Register Page 
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
			<legend>Register Here...</legend>
			<form action="register_process.php" method="POST">
				<table style="width:100%">
					<tr>
						<th>Full Name: </th>
						<td><input type="text" name="full_name" placeholder="Enter full name" required style="width:80%"> </td>
					</tr>
					<tr>
						<th>Email: </th>
						<td><input type="email" name="email" placeholder="Enter email" required style="width:80%"> </td>
					</tr>
					<tr>
						<th>Password: </th>
						<td><input type="password" name="password" placeholder="Enter password" required style="width:80%"> </td>
					</tr>
					<tr>
						<th>
							Gender:
						</th>
						<td>
							<input type="radio" name="gender" checked value="Male">Male 
							<input type="radio" name="gender" value="Female"> Female
						</td>
					</tr>
					<tr>
						<th>
							Select Role:
						</th>
						<td>
							<select name="role" style="width:80%">
								<?php 
									while($row = mysqli_fetch_row($result))
									{
										?>
											<option value="<?php echo $row[0];?>">
												<?php echo ucfirst($row[1]);?>		
											</option>
										<?php
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="register" value="Register">
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
		<p>
			Already you have an account
			<a href="index.php">Login Here</a>
		</p>
	</center>

</body>
</html>