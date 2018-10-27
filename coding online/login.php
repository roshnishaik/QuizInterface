<?PHP
                 echo '<script>
				window.location="thnk.html"
				</script>';

			include("loginvalidationform.php");
		
		?>
		

<html>
	<head>
	<style>
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
	abc{
	position:fixed;
	top:25%;
	left:30%;
	webkit-box-shadow: 0px -1px 30px 0px rgba(0, 0, 0, 1);
        -moz-box-shadow: 0px -1px 30px 0px rgba(0, 0, 0, 1);
        box-shadow:0px -1px 30px 0px rgba(0, 0, 0, 1);}
        #sub{
position:relative;
background:#3B3B27;
text-align: center;
top:10px;
color: #FFFFFF;
width:120px;
font-size:18px;
height:30px;
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
		<table align="center">
                <tr>
                 <td><img src="questlogo.jpg"></td>
                 <td></td><td align="center"><img src="image.jpg"></td></tr>
                </table>
<p align="center"><B> You are requested to login with 1st participant's user name and password<B></p>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<!--<form method="post" action="loginvalidationform.php">
		 --><table class="abc" border="0" bgcolor="" cellpadding="15" align="center">
                      	 
			<tr>
				<td style="font-family:Gabriola;font-size:35px">EmailId : </td>
				<td><input class="tt" type="text" name="emailid" ></td>
				<td><span class="error">* <?php echo $emailiderr;?></span>
				<br><br></td>
			</tr>
		        <tr>
		  		<td style="font-family:Gabriola;font-size:35px">Password : </td>
				<td><input class="tt" type="password" name="password"></td>
				<td><span class="error">* <?php echo $passworderr;?></span>
				<br><br></td>
			</tr>
			<tr>
                                <td></td>
                                <td><input class="tt" id="sub" type="submit" name="submit" value="submit"><br><br></td>
			</tr>
                        <tr>
                         
                                <td style="font-family:Gabriola;font-size:35px"><a href="forgotpassword.php" target="_blank">Forgotpassword??</a></td>  
                               
                                <td style="font-family:Gabriola;font-size:35px"><a href="index.html">&nbsp;&nbsp;Click here for New Registration</a></td>
                        
                         </tr>
                                             
                         
</table> 
			
</form>
</body>
</html>