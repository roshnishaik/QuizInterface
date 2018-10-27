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
$num1=0;
$num2=0;
$num=0;


$sql = 'SELECT * FROM codingusers WHERE username="'.$user.'"';
$retval = mysql_query( $sql, $link1 );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
$row = mysql_fetch_array($retval);
$num1=$_POST['we'];

$num2=$_GET['num'];

if(! $link1 )
{
  die('Could not connect: ' . mysql_error());
}
if($num1<='0')
{
 
 $num=$num2;
}
if($num2<='0')
{
     
 $num=$num1;
}

//echo $row['password'];
//echo "num=".$num;
$rand=$row['random'];
//echo "rand=".$rand;
$x=$rand;
$l=$rand+29;
$count=1;

for($i=1;$i<=30;$i++)
{
 if($rand==$num)
  break;
 $rand=$rand+1;

 $count=$count+1;
 
}



if($count=='1')
$id=$row['ans1'];
if($count=='2')
$id=$row['ans2'];
if($count=='3')
$id=$row['ans3'];
if($count=='4')
$id=$row['ans4'];
if($count=='5')
$id=$row['ans5'];
if($count=='6')
$id=$row['ans6'];
if($count=='7')
$id=$row['ans7'];
if($count=='8')
$id=$row['ans8'];
if($count=='9')
$id=$row['ans9'];
if($count=='10')
$id=$row['ans10'];
if($count=='11')
$id=$row['ans11'];
if($count=='12')
$id=$row['ans12'];
if($count=='13')
$id=$row['ans14'];
if($count=='14')
$id=$row['ans14'];
if($count=='15')
$id=$row['ans15'];
if($count=='16')
$id=$row['ans16'];
if($count=='17')
$id=$row['ans17'];
if($count=='18')
$id=$row['ans18'];
if($count=='19')
$id=$row['ans19'];
if($count=='20')
$id=$row['ans20'];
if($count=='21')
$id=$row['ans21'];
if($count=='22')
$id=$row['ans22'];
if($count=='23')
$id=$row['ans23'];
if($count=='24')
$id=$row['ans24'];
if($count=='25')
$id=$row['ans25'];
if($count=='26')
$id=$row['ans26'];
if($count=='27')
$id=$row['ans27'];
if($count=='28')
$id=$row['ans28'];
if($count=='29')
$id=$row['ans29'];
if($count=='30')
$id=$row['ans30'];



$q=$num+1;
if($q>$l)
$q=$x;
 
 //echo "mum=".$num;
 //echo "id=".$id;
 
//echo "q=".$q;

if( $num )
{
$sql= 'SELECT * FROM codingquestions WHERE id="'.$num.'"';

//echo $num;
//echo $user;

$retval= mysql_query( $sql, $link);
$row= mysql_fetch_array($retval);


}
?>

<html>
<head>
<script>

      function disableselect(e) {             
          return false 
      } 
      function reEnable() { 
          return true 
      } 

      document.onselectstart = new Function("return false") 

      if (window.sidebar) { 
          document.onmousedown = disableselect                    // for mozilla           
          document.onclick = reEnable 
      } 

      function clickIE() { 
          if (document.all) { 
              (message); 
              return false; 
          } 
      } 


      document.oncontextmenu = new Function("return false") 

      var element = document.getElementById('tbl'); 

      element.onmousedown = function () { return false; }        // For Mozilla Browser


</script>

<style>
pre{
font-family:Comic Sans MS,sans-serif;
}
#A,#B,#C,#D
{font-family:Comic Sans MS,sans-serif;
font-size:20px;}
.aa{
position:fixed;
background: #19353E;
text-align: center;
margin-left:10px;
top:90%;
color: #FFFFFF;
width:15%;
height:6%;
border-radius:8px;
-moz-border-radius:8px;
-webkit-border-radius:8px;
box-shadow: 0px 3px 5px sienna;
-moz-box-shadow: 0px 3px 5px sienna;
-webkit-box-shadow: 0px 3px 5px sienna;
}
.aa:hover {
color: #FFFFFF;
box-shadow:none;
-moz-box-shadow:none;
-webkit-box-shadow:none;
}
.opt{
font-family:Comic Sans MS,sans-serif;}
 </style>
</head>
<body>
<table border=0px >
<form  action="2.php" method="post">
<tr><td style="font-family:Comic Sans MS,sans-serif"><input type="hidden" name="2" value="<?php echo $count; ?>"><?php echo $count; ?>)<B><?php echo $row['questions']; ?><pre></td><br></tr>
   <tr><td class="opt"><input type="radio" name="1"  id="A" value="A">A) <?php echo $row['optiona']; ?></input></td></tr>
   <tr> <td class="opt"><input type="radio" name="1" id="B" value="B">B) <?php echo $row['optionb']; ?></input></td></tr>
   <tr><td class="opt"><input type="radio" name="1" id="C" value="C">C) <?php echo $row['optionc']; ?></input></td></tr> 
   <tr><td class="opt"><input type="radio" name="1" id="D" value="D">D) <?php echo $row['optiond']; ?></input></td></tr><br>
</table><br><br><br>
<button style="left:48%"class="aa" name="we" type="submit" value="<?php echo $num;?>" >SUBMIT</button>
   <!--<button style="left:50%" class="aa" name="we1" type="submit" value="<?php echo $q;?>">NEXT</button>-->
 </form>
<script>
var val = "<?php echo $id;?>";
document.getElementById(val).checked=true; 
</script>
</body>
</html>