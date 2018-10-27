<html>
	<head>
		<style>
			.error 
				{
					color: #FF0000;
				}
		</style>
	</head>

	<body>
		<?PHP

			include("loginvalidationform.php");
		
		?>
		
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<!--<form method="post" action="loginvalidationform.php">
		 --><table border="0.5">
			<tr>
				<td>EmailId</td>
				<td><input type="text" name="emailid"></td>
				<td><span class="error">* <?php echo $emailiderr;?></span>
				<br><br></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
				<td><span class="error">* <?php echo $passworderr;?></span>
				<br><br></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
			</table>
		<a href="forgotpassword.html">forgotpassword??</a>
		<a href="register.php">Click here for New Registration</a>			
		</form>
	</body>
</html>