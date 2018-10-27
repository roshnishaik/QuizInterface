<?php
session_start();
if (!isset($_SESSION['username']))
{
echo '<script>window.location="login.php" </script>';
}

$user=$_SESSION['username'];
include("config1.php");

$sql = 'SELECT * FROM codingusers WHERE username="'.$user.'"';
$retval = mysql_query( $sql, $link1 );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
$row = mysql_fetch_array($retval);
?>
<html>
<head>
<style>.stable {
	margin-left:36%;padding:0px;
	width:36%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #000000;
	
	-moz-border-radius-bottomleft:8px;
	-webkit-border-bottom-left-radius:8px;
	border-bottom-left-radius:8px;
	
	-moz-border-radius-bottomright:8px;
	-webkit-border-bottom-right-radius:8px;
	border-bottom-right-radius:8px;
	
	-moz-border-radius-topright:8px;
	-webkit-border-top-right-radius:8px;
	border-top-right-radius:8px;
	
	-moz-border-radius-topleft:8px;
	-webkit-border-top-left-radius:8px;
	border-top-left-radius:8px;
}.stable table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.stable tr:last-child td:last-child {
	-moz-border-radius-bottomright:8px;
	-webkit-border-bottom-right-radius:8px;
	border-bottom-right-radius:8px;
}
.stable table tr:first-child td:first-child {
	-moz-border-radius-topleft:8px;
	-webkit-border-top-left-radius:8px;
	border-top-left-radius:8px;
}
.stable table tr:first-child td:last-child {
	-moz-border-radius-topright:8px;
	-webkit-border-top-right-radius:8px;
	border-top-right-radius:8px;
}.stable tr:last-child td:first-child{
	-moz-border-radius-bottomleft:8px;
	-webkit-border-bottom-left-radius:8px;
	border-bottom-left-radius:8px;
}.stable tr:hover td{
	
}
.stable tr:nth-child(odd){ background-color:#ffaa56; }
.stable tr:nth-child(even)    { background-color:#ffffff; }.stable td{
	vertical-align:middle;
	
	
	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:center;
	padding:4px;
	font-size:12px;
	font-family:Comic Sans MS;
	font-weight:bold;
	color:#000000;
}.stable tr:last-child td{
	border-width:0px 1px 0px 0px;
}.stable tr td:last-child{
	border-width:0px 0px 1px 0px;
}.stable tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.stable tr:first-child td{
		background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
	background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");	background: -o-linear-gradient(top,#ff7f00,bf5f00);

	background-color:#ff7f00;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:16px;
	font-family:Comic Sans MS;
	font-weight:bold;
	color:#ffffff;
}
.stable tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
	background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");	background: -o-linear-gradient(top,#ff7f00,bf5f00);

	background-color:#ff7f00;
}
.stable tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.stable tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}
</style>

</head>

<body>
<div class="stable">
<table border="1">
<tr><td>Question no:</td><td>Submitted Answer</td></tr>

<tr><td>1.</td><td><?php if ($row['ans1']=='')echo "NOT ANSWERED"; else echo $row['ans1'];?></td></tr>
<tr><td>2.</td><td><?php if ($row['ans2']=='')echo "NOT ANSWERED"; else echo $row['ans2'];?></td></tr>
<tr><td>3.</td><td><?php if ($row['ans3']=='')echo "NOT ANSWERED"; else echo $row['ans3'];?></td></tr>
<tr><td>4.</td><td><?php if ($row['ans4']=='')echo "NOT ANSWERED"; else echo $row['ans4'];?></td></tr>
<tr><td>5.</td><td><?php if ($row['ans5']=='')echo "NOT ANSWERED"; else echo $row['ans5'];?></td></tr>
<tr><td>6.</td><td><?php if ($row['ans6']=='')echo "NOT ANSWERED"; else echo $row['ans6'];?></td></tr>
<tr><td>7.</td><td><?php if ($row['ans7']=='')echo "NOT ANSWERED"; else echo $row['ans7'];?></td></tr>
<tr><td>8.</td><td><?php if ($row['ans8']=='')echo "NOT ANSWERED"; else echo $row['ans8'];?></td></tr>
<tr><td>9.</td><td><?php if ($row['ans9']=='')echo "NOT ANSWERED"; else echo $row['ans9'];?></td></tr>
<tr><td>10.</td><td><?php if ($row['ans10']=='')echo "NOT ANSWERED"; else echo $row['ans10'];?></td></tr>
<tr><td>11.</td><td><?php if ($row['ans11']=='')echo "NOT ANSWERED"; else echo $row['ans11'];?></td></tr>
<tr><td>12.</td><td><?php if ($row['ans12']=='')echo "NOT ANSWERED"; else echo $row['ans12'];?></td></tr>
<tr><td>13.</td><td><?php if ($row['ans13']=='')echo "NOT ANSWERED"; else echo $row['ans13'];?></td></tr>
<tr><td>14.</td><td><?php if ($row['ans14']=='')echo "NOT ANSWERED"; else echo $row['ans14'];?></td></tr>
<tr><td>15.</td><td><?php if ($row['ans15']=='')echo "NOT ANSWERED"; else echo $row['ans15'];?></td></tr>
<tr><td>16.</td><td><?php if ($row['ans16']=='')echo "NOT ANSWERED"; else echo $row['ans16'];?></td></tr>
<tr><td>17.</td><td><?php if ($row['ans17']=='')echo "NOT ANSWERED"; else echo $row['ans17'];?></td></tr>
<tr><td>18.</td><td><?php if ($row['ans18']=='')echo "NOT ANSWERED"; else echo $row['ans18'];?></td></tr>
<tr><td>19.</td><td><?php if ($row['ans19']=='')echo "NOT ANSWERED"; else echo $row['ans19'];?></td></tr>
<tr><td>20.</td><td><?php if ($row['ans20']=='')echo "NOT ANSWERED"; else echo $row['ans20'];?></td></tr>
<tr><td>21.</td><td><?php if ($row['ans21']=='')echo "NOT ANSWERED"; else echo $row['ans21'];?></td></tr>
<tr><td>22.</td><td><?php if ($row['ans22']=='')echo "NOT ANSWERED"; else echo $row['ans22'];?></td></tr>
<tr><td>23.</td><td><?php if ($row['ans23']=='')echo "NOT ANSWERED"; else echo $row['ans23'];?></td></tr>
<tr><td>24.</td><td><?php if ($row['ans24']=='')echo "NOT ANSWERED"; else echo $row['ans24'];?></td></tr>
<tr><td>25.</td><td><?php if ($row['ans25']=='')echo "NOT ANSWERED"; else echo $row['ans25'];?></td></tr>
<tr><td>26.</td><td><?php if ($row['ans26']=='')echo "NOT ANSWERED"; else echo $row['ans26'];?></td></tr>
<tr><td>27.</td><td><?php if ($row['ans27']=='')echo "NOT ANSWERED"; else echo $row['ans27'];?></td></tr>
<tr><td>28.</td><td><?php if ($row['ans28']=='')echo "NOT ANSWERED"; else echo $row['ans28'];?></td></tr>
<tr><td>29.</td><td><?php if ($row['ans29']=='')echo "NOT ANSWERED"; else echo $row['ans29'];?></td></tr>
<tr><td>30.</td><td><?php if ($row['ans30']=='')echo "NOT ANSWERED"; else echo $row['ans30'];?></td></tr>
</table>
</div>
</body>
</html>