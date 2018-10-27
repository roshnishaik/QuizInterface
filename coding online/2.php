<?php
session_start();
if (!isset($_SESSION['username']))
{
echo '<script>window.location="login.php" </script>';
}

$user=$_SESSION['username'];
include("config.php");
include("config1.php");

if(! $link1 )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM codingusers WHERE username="'.$user.'"';
$retval = mysql_query( $sql, $link1 );
$row = mysql_fetch_array($retval);
$val=$_POST['1'];
$quesno=$_POST['2'];
$num1=0;
$num2=0;
$num1=$_POST['we'];
$num2=$_POST['we1'];
//echo "val=".$val;
if($quesno=='1')
$query = "UPDATE codingusers SET ans1='".$val."' WHERE  username='".$user."'";
if($quesno=='2')
$query = "UPDATE codingusers SET ans2='".$val."' WHERE  username='".$user."'";
if($quesno=='3')
$query = "UPDATE codingusers SET ans3='".$val."' WHERE  username='".$user."'";
if($quesno=='4')
$query = "UPDATE codingusers SET ans4='".$val."' WHERE  username='".$user."'";
if($quesno=='5')
$query = "UPDATE codingusers SET ans5='".$val."' WHERE  username='".$user."'";
if($quesno=='6')
$query = "UPDATE codingusers SET ans6='".$val."' WHERE  username='".$user."'";
if($quesno=='7')
$query = "UPDATE codingusers SET ans7='".$val."' WHERE  username='".$user."'";
if($quesno=='8')
$query = "UPDATE codingusers SET ans8='".$val."' WHERE  username='".$user."'";
if($quesno=='9')
$query = "UPDATE codingusers SET ans9='".$val."' WHERE  username='".$user."'";
if($quesno=='10')
$query = "UPDATE codingusers SET ans10='".$val."' WHERE  username='".$user."'";
if($quesno=='11')
$query = "UPDATE codingusers SET ans11='".$val."' WHERE  username='".$user."'";
if($quesno=='12')
$query = "UPDATE codingusers SET ans12='".$val."' WHERE  username='".$user."'";
if($quesno=='13')
$query = "UPDATE codingusers SET ans13='".$val."' WHERE  username='".$user."'";
if($quesno=='14')
$query = "UPDATE codingusers SET ans14='".$val."' WHERE  username='".$user."'";
if($quesno=='15')
$query = "UPDATE codingusers SET ans15='".$val."' WHERE  username='".$user."'";
if($quesno=='16')
$query = "UPDATE codingusers SET ans16='".$val."' WHERE  username='".$user."'";
if($quesno=='17')
$query = "UPDATE codingusers SET ans17='".$val."' WHERE  username='".$user."'";
if($quesno=='18')
$query = "UPDATE codingusers SET ans18='".$val."' WHERE  username='".$user."'";
if($quesno=='19')
$query = "UPDATE codingusers SET ans19='".$val."' WHERE  username='".$user."'";
if($quesno=='20')
$query = "UPDATE codingusers SET ans20='".$val."' WHERE  username='".$user."'";
if($quesno=='21')
$query = "UPDATE codingusers SET ans21='".$val."' WHERE  username='".$user."'";
if($quesno=='22')
$query = "UPDATE codingusers SET ans22='".$val."' WHERE  username='".$user."'";
if($quesno=='23')
$query = "UPDATE codingusers SET ans23='".$val."' WHERE  username='".$user."'";
if($quesno=='24')
$query = "UPDATE codingusers SET ans24='".$val."' WHERE  username='".$user."'";
if($quesno=='25')
$query = "UPDATE codingusers SET ans25='".$val."' WHERE  username='".$user."'";
if($quesno=='26')
$query = "UPDATE codingusers SET ans26='".$val."' WHERE  username='".$user."'";
if($quesno=='27')
$query = "UPDATE codingusers SET ans27='".$val."' WHERE  username='".$user."'";
if($quesno=='28')
$query = "UPDATE codingusers SET ans28='".$val."' WHERE  username='".$user."'";
if($quesno=='29')
$query = "UPDATE codingusers SET ans29='".$val."' WHERE  username='".$user."'";
if($quesno=='30')
$query = "UPDATE codingusers SET ans30='".$val."' WHERE  username='".$user."'";
$retval=mysql_query($query, $link1);
$rand=$row['random'];


$l=$rand+29;

if($num1<='0')
{
 $num=$num2;
if($num==$rand)
 $x=1;
}
if($num2<='0')
 {
  $num=$num1+1;
  
  if($num>$l)
 $num=$rand;
 if($num==$rand)
   $x=1;
}







if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
//echo "Updated data successfully\n";
mysql_close($link);
 

//echo "num=".$num;

?>

<html>
<body>
<script>
if("<?php echo $x;?>"==1)
window.location="submittedanswers.php ";
else
window.location="1.php?num=<?php echo $num;?>" ;
</script>
</body>