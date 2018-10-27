<?php session_start(); ?>

<html>
<head>
<link rel="icon" 
      type="image/png" 
      href="questlogo.jpg">

		<style>
			.error 
				{
					color: #FF0000;
				}
				body
				{
                   background-color:#ffffff;
                }
                a:hover
                {
                  color:#ffffff;
                }
				 .tt{

    background: url('images/email_icon.png') no-repeat scroll right center #ccc;
    border: 1px solid #666;
    box-shadow: 0 0 5px #666 inset;
    color: #333;
    float:centre;
	height:32px;
     outline: none;
	 font-size:20px
}
select,#sub{
background: url('images/email_icon.png') no-repeat scroll right center #ccc;
    border: 1px solid #666;
    box-shadow: 0 0 5px #666 inset;
    color: #333;
    float:centre;
	height:32px;}
#sub{
position:relative;
background:#3B3B27;
text-align: center;
top:10px;
color: #FFFFFF;
width:120px;
font-size:18px;
height:38px;
border-radius:8px;
}
#sub:hover {
top:12px;
color: #FFFFFF;
box-shadow:none;
-moz-box-shadow:none;
-webkit-box-shadow:none;
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
				<td><h2><b><strong>Enter your Team Name</h2></b></strong></td>
				<td><input class="tt" type="text" name="teamname"></td>
			</tr>
			<!--<tr>
				<td><h2><b><strong>Topic Name</h2></b></strong></td>
				<td><input class="tt" type="text" name="topic">
				    <!--<select name="topic">
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

			</tr>-->
			<tr>
				<td><h2><b><strong>Participant1 mailId</h2></b></strong></td>
				<td><input class="tt" type="text" name="username"></td>
				<td><span class="error">* <?php echo $emailiderr;?></span>
				<br><br></td>
			</tr>
			<tr>
				<td><h2><b><strong>Password</h2></b></strong></td>
				<td><input class="tt" type="password" name="password"></td>
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
				<td><h2><b><strong>Participant2 mailId</h2></b></strong></td>
				<td><input class="tt" type="text" name="username1"></td>
				<!--<td><span class="error">* <?php echo $emailiderr;?></span>-->
				<br><br></td>
			</tr>
			<tr>
				<td><h2><b><strong>Password</h2></b></strong></td>
				<td><input class="tt" type="password" name="password1"></td>
				<!--<td><span class="error">* <?php echo $passworderr;?></span>-->
				<br><br></td>
			</tr>
			<tr>
				<td></td>
				<td><input id="sub" type="submit" name="submit" value="submit"></td>
			</tr>
			</table>

		<!--<a href="forgotpassword.html">forgotpassword??</a>
		<a href="register.php">Click here for New Registration</a>	-->		
		</form>
	</body>
</html>
    