<?php
session_start();
if (!isset($_SESSION['username']))
{
echo '<script>window.location="login.php" </script>';
}

$user=$_SESSION['username'];
//echo $user;
include("config.php");
include("config1.php");

if(! $link1 )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM quizusers WHERE username="'.$user.'"';
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
$query = "UPDATE quizusers SET ans1='".$val."' WHERE  username='".$user."'";
if($quesno=='2')
$query = "UPDATE quizusers SET ans2='".$val."' WHERE  username='".$user."'";
if($quesno=='3')
$query = "UPDATE quizusers SET ans3='".$val."' WHERE  username='".$user."'";
if($quesno=='4')
$query = "UPDATE quizusers SET ans4='".$val."' WHERE  username='".$user."'";
if($quesno=='5')
$query = "UPDATE quizusers SET ans5='".$val."' WHERE  username='".$user."'";
if($quesno=='6')
$query = "UPDATE quizusers SET ans6='".$val."' WHERE  username='".$user."'";
if($quesno=='7')
$query = "UPDATE quizusers SET ans7='".$val."' WHERE  username='".$user."'";
if($quesno=='8')
$query = "UPDATE quizusers SET ans8='".$val."' WHERE  username='".$user."'";
if($quesno=='9')
$query = "UPDATE quizusers SET ans9='".$val."' WHERE  username='".$user."'";
if($quesno=='10')
$query = "UPDATE quizusers SET ans10='".$val."' WHERE  username='".$user."'";
if($quesno=='11')
$query = "UPDATE quizusers SET ans11='".$val."' WHERE  username='".$user."'";
if($quesno=='12')
$query = "UPDATE quizusers SET ans12='".$val."' WHERE  username='".$user."'";
if($quesno=='13')
$query = "UPDATE quizusers SET ans13='".$val."' WHERE  username='".$user."'";
if($quesno=='14')
$query = "UPDATE quizusers SET ans14='".$val."' WHERE  username='".$user."'";
if($quesno=='15')
$query = "UPDATE quizusers SET ans15='".$val."' WHERE  username='".$user."'";
if($quesno=='16')
$query = "UPDATE quizusers SET ans16='".$val."' WHERE  username='".$user."'";
if($quesno=='17')
$query = "UPDATE quizusers SET ans17='".$val."' WHERE  username='".$user."'";
if($quesno=='18')
$query = "UPDATE quizusers SET ans18='".$val."' WHERE  username='".$user."'";
if($quesno=='19')
$query = "UPDATE quizusers SET ans19='".$val."' WHERE  username='".$user."'";
if($quesno=='20')
$query = "UPDATE quizusers SET ans20='".$val."' WHERE  username='".$user."'";
if($quesno=='21')
$query = "UPDATE quizusers SET ans21='".$val."' WHERE  username='".$user."'";
if($quesno=='22')
$query = "UPDATE quizusers SET ans22='".$val."' WHERE  username='".$user."'";
if($quesno=='23')
$query = "UPDATE quizusers SET ans23='".$val."' WHERE  username='".$user."'";
if($quesno=='24')
$query = "UPDATE quizusers SET ans24='".$val."' WHERE  username='".$user."'";
if($quesno=='25')
$query = "UPDATE quizusers SET ans25='".$val."' WHERE  username='".$user."'";
if($quesno=='26')
$query = "UPDATE quizusers SET ans26='".$val."' WHERE  username='".$user."'";
if($quesno=='27')
$query = "UPDATE quizusers SET ans27='".$val."' WHERE  username='".$user."'";
if($quesno=='28')
$query = "UPDATE quizusers SET ans28='".$val."' WHERE  username='".$user."'";
if($quesno=='29')
$query = "UPDATE quizusers SET ans29='".$val."' WHERE  username='".$user."'";
if($quesno=='30')
$query = "UPDATE quizusers SET ans30='".$val."' WHERE  username='".$user."'";
mysql_query($query, $link1);
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