<?php 
$flag=0;
$flag=$_GET['flag'];
$user=$_GET['user'];
if($flag==0)
 echo '<script>window.location="login.php"</script>';
//echo $user;
//echo $flag;

?>
 <html>
<head>
<title>
FEEDBACK FORM
</title>
<style>
#imtb{
position:absolute;
display:inline-block;
}
#im{
opacity:1.0;
position:relative;
filter:alpha(opacity=100);
top:0%;
width:18%;
height:26%;
}
#ji{
opacity:1.0;
position:relative;
filter:alpha(opacity=100);
width:20%;
height:30%;
}
#ji{
position:absolute;
top:0%;
right:10px;}
#but:hover {
top:594px;
color: #fqq;
box-shadow:none;
-moz-box-shadow:none;
-webkit-box-shadow:none;
}
#but{background: #2f2f2f;
text-align: center;
color:#FFFFFF;
width:11%;
position:fixed;
height:5%;
left:315px;
top:595px;
border-radius:8px;
-moz-border-radius:8px;
-webkit-border-radius:8px;
box-shadow: 0px 3px 5px sienna;
-moz-box-shadow: 0px 3px 5px sienna;
-webkit-box-shadow: 0px 3px 5px sienna;
margin-left:320px;}
textarea{
	width:60%;
	position:fixed;
	top:35%;
	padding:15px;
	height:50%;
	background-image: url(c3.jpg);
background-position: bottom right;
box-shadow: 0px 3px 5px sienna;
-moz-box-shadow: 0px 3px 5px sienna;
-webkit-box-shadow: 0px 3px 5px sienna;
background-repeat: no-repeat;
	border: 3px solid sienna;
	font-family: Tahoma, sans-serif;
}
</style>
<script>
function validateForm()
{
var x=document.forms["myForm"]["message"].value;
if (x==null || x=="")
  {
  alert("PLEASE GIVE FEEDBACK");
  return false;
  }
 else return true;
}
</script>

<link rel="icon" 
      type="image/png" 
      href="questlogo.jpg">
</head>
<BODY>
<img id="im" src="jntuh.jpg"/>
<p style="position:fixed;font-family:Andalus;top:0px;font-size:75px;left:40%" align="center"><B>FEEDBACK</p>
 <img id="ji"src="questlogo.jpg" align="right"/>
<div id="imtb" contentEditable="true">
<center><form method="post" name="myForm" action="http://www.quest2k14.com/coding/mail.php" onsubmit="return validateForm();">
<input type="hidden" name="user" value="<?php echo $user;?>">
<textarea align="center" rows="20" cols="80" name="message"></textarea><br>
<input id="but" type="submit" name="submit" value="submit" align="center">
</form>
 </div>
 <marquee><P align="center" style="font-family:Comic sans MS"><B><I>Thank You for attending the test</I></B></p></marquee>
</BODY>
</html>
  