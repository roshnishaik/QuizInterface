<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
 <style>
.error 
{
	color: ##000000;
}
		
 table{
 position:relative;;
 top:230px;}
 tr td .aap{
 font-size:20px;
 height:40px;
 width:300px;
 }
 tr td{
 font-size:25px;
 color: #2f2f2f;}

	#but:hover {
position:relative;
top:3px;
color: #fqq;
box-shadow:none;
-moz-box-shadow:none;
-webkit-box-shadow:none;
}
#but{background: #2f2f2f;
text-align: center;
color:#FFFFFF;
width:120px;
height:30px;
border-radius:8px;
-moz-border-radius:8px;
-webkit-border-radius:8px;
box-shadow: 0px 3px 5px sienna;
-moz-box-shadow: 0px 3px 5px sienna;
-webkit-box-shadow: 0px 3px 5px sienna;
}
 </style>
  <TITLE>Question of the day</TITLE>
  
 </HEAD>

 <BODY background="bgimg.jpg" style="background-size:100%">
 <?PHP
			include("questionvalidation2.php");
 ?>
 
 <form name="logform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 <table align="center" frame="box" cellspacing="15" border="0" >
 <tr>
	<td><B>Emailid:</td>
    <td><input class="aap" type="text" name="emailid" placeholder="Enter your registered mailid"></td>
	<td><span class="error">* <?php echo $emailiderr;?></span>
	<br><br></td>
</tr>
<tr>
	<td><B>Password:</td>
	<td><input class="aap" type="password" name="password" placeholder="Enter Password"></td>
	<td><span class="error">* <?php echo $passworderr;?></span>
	<br><br></td>
</tr>
<tr>
	<td><B>Answer:</td>
	<td><input class="aap" type="text" name="answer" placeholder="Enter Your answer"></td>
</tr>
<tr>
<td colspan="2" align="center"><input id="but" type="submit" value="submit" onclick="####"></td>
</tr>
<tr>
</tr>
<tr>
	<td><a href="http://www.quest2k14.com/register.php">Click here for fresh registration</a></td>
	<td><a href="http://www.quest2k14.com/forgotpassword.php">Forgot password</a></td>
</tr>
 </BODY00>
</HTMl>