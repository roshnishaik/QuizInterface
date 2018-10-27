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

			include("logincodingvalidationform.php");
		
		?>
		
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<!--<form method="post" action="loginvalidationform.php">
		 --><table border="0.5">
			<tr>
				<td>EnterUrTeamName</td>
				<td><input type="text" name="teamname"></td>
			</tr>
			<tr>
				<td>select ur topic</td>
				<td><select name="topic">
					<option value="a" selected>a</option>
					<option value="b">b</option>
					<option value="c">c</option>
					<option value="d">d</option>
					<option value="e">e</option>
					<option value="f">f</option>
					<option value="g">g</option>
					<option value="h">h</option>
					<option value="i">i</option>
					<option value="j">j</option>
					<option value="k">k</option>
					<option value="l">l</option>
					<option value="m">m</option>
					</select></td>

			</tr>
			<tr>
				<td>EmailId1</td>
				<td><input type="text" name="emailid1"></td>
				<td><span class="error">* <?php echo $emailiderr;?></span>
				<br><br></td>
			</tr>
			<tr>
				<td>Password1</td>
				<td><input type="password" name="password1"></td>
				<td><span class="error">* <?php echo $passworderr;?></span>
				<br><br></td>
			</tr>
			<!--<tr>
				<td></td>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
			</table>
			<br>
			<br>
			<br>
			<table border="0.5">-->
			<tr>
			</tr>
			<tr>
			<tr>
			<tr>
				<td>EmailId2</td>
				<td><input type="text" name="emailid2"></td>
				<!--<td><span class="error">* <?php echo $emailiderr;?></span>-->
				<br><br></td>
			</tr>
			<tr>
				<td>Password2</td>
				<td><input type="password" name="password2"></td>
				<!--<td><span class="error">* <?php echo $passworderr;?></span>-->
				<br><br></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
			</table>

		<!--<a href="forgotpassword.html">forgotpassword??</a>
		<a href="register.php">Click here for New Registration</a>	-->		
		</form>
	</body>
</html>