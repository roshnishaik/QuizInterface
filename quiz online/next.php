<?php
$user="quest";
include("config.php");
include("config1.php");

if(! $link1 )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM users WHERE username="'.$user.'"';
$retval = mysql_query( $sql, $link1 );
$row = mysql_fetch_array($retval);
$val=$_POST['1'];
$quesno=$_POST['2'];
$num4=0;
$num4=$_POST['we1'];
if($quesno=='1')
$query = "UPDATE users SET ans1='".$val."' WHERE  username='".$user."'";
if($quesno=='2')
$query = "UPDATE users SET ans2='".$val."' WHERE  username='".$user."'";
if($quesno=='3')
$query = "UPDATE users SET ans3='".$val."' WHERE  username='".$user."'";
if($quesno=='4')
$query = "UPDATE users SET ans4='".$val."' WHERE  username='".$user."'";
if($quesno=='5')
$query = "UPDATE users SET ans5='".$val."' WHERE  username='".$user."'";
if($quesno=='6')
$query = "UPDATE users SET ans6='".$val."' WHERE  username='".$user."'";
if($quesno=='7')
$query = "UPDATE users SET ans7='".$val."' WHERE  username='".$user."'";
if($quesno=='8')
$query = "UPDATE users SET ans8='".$val."' WHERE  username='".$user."'";
if($quesno=='9')
$query = "UPDATE users SET ans9='".$val."' WHERE  username='".$user."'";
if($quesno=='10')
$query = "UPDATE users SET ans10='".$val."' WHERE  username='".$user."'";
if($quesno=='11')
$query = "UPDATE users SET ans11='".$val."' WHERE  username='".$user."'";
if($quesno=='12')
$query = "UPDATE users SET ans12='".$val."' WHERE  username='".$user."'";
if($quesno=='13')
$query = "UPDATE users SET ans13='".$val."' WHERE  username='".$user."'";
if($quesno=='14')
$query = "UPDATE users SET ans14='".$val."' WHERE  username='".$user."'";
if($quesno=='15')
$query = "UPDATE users SET ans15='".$val."' WHERE  username='".$user."'";
if($quesno=='16')
$query = "UPDATE users SET ans16='".$val."' WHERE  username='".$user."'";
if($quesno=='17')
$query = "UPDATE users SET ans17='".$val."' WHERE  username='".$user."'";
if($quesno=='18')
$query = "UPDATE users SET ans18='".$val."' WHERE  username='".$user."'";
if($quesno=='19')
$query = "UPDATE users SET ans19='".$val."' WHERE  username='".$user."'";
if($quesno=='20')
$query = "UPDATE users SET ans20='".$val."' WHERE  username='".$user."'";
if($quesno=='21')
$query = "UPDATE users SET ans21='".$val."' WHERE  username='".$user."'";
if($quesno=='22')
$query = "UPDATE users SET ans22='".$val."' WHERE  username='".$user."'";
if($quesno=='23')
$query = "UPDATE users SET ans23='".$val."' WHERE  username='".$user."'";
if($quesno=='24')
$query = "UPDATE users SET ans24='".$val."' WHERE  username='".$user."'";
if($quesno=='25')
$query = "UPDATE users SET ans25='".$val."' WHERE  username='".$user."'";
if($quesno=='26')
$query = "UPDATE users SET ans26='".$val."' WHERE  username='".$user."'";
if($quesno=='27')
$query = "UPDATE users SET ans27='".$val."' WHERE  username='".$user."'";
if($quesno=='28')
$query = "UPDATE users SET ans28='".$val."' WHERE  username='".$user."'";
if($quesno=='29')
$query = "UPDATE users SET ans29='".$val."' WHERE  username='".$user."'";
if($quesno=='30')
$query = "UPDATE users SET ans30='".$val."' WHERE  username='".$user."'";
$rand=$row['random'];
echo $rand;

$num=$rand;
$l=$rand+29;
if($l>'200')
$l=$l-200;

for($i=1;$i<=$quesno;$i++)
{
  $num=$num+1;
  if($num>'200' )
   $num=1;
   if($num>$l)
    $num=$rand;
   
}





mysql_query( $query, $link1 );

if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($link);
 
echo $num4;
echo $num;

?>

<html>
<body>
<script>

window.location="http://quest2k14.com/coding/1.php?num=<?php echo $num;?>" ;
</script>
</body>