<?php
session_start();
if (!isset($_SESSION['username']))
{
echo '<script>window.location="login.php" </script>';
}

$user=$_SESSION['username'];
$count=0;
include("config.php");
include("config1.php");
$sql1='SELECT * from codingusers WHERE username="'.$user.'"';
$retval1 = mysql_query( $sql1, $link );
$row1 = mysql_fetch_array($retval1);
$i=$row1['random'];

/*checking for 1 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans1']== $row['correct'])
$count=$count+1; 
$i=$i+1;





/*checking for 2 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans2']== $row['correct'])
$count=$count+1; 
$i=$i+1;





/*checking for 3 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans3']== $row['correct'])
$count=$count+1; 
$i=$i+1;






/*checking for 4 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans4']== $row['correct'])
$count=$count+1; 
$i=$i+1;






/*checking for 5 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans5']== $row['correct'])
$count=$count+1; 
$i=$i+1;


/*checking for 6 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans6']== $row['correct'])
$count=$count+1; 
$i=$i+1;
if($i>200)
$i=1;


/*checking for 7 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans7']== $row['correct'])
$count=$count+1; 
$i=$i+1;




/*checking for 8 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans8']== $row['correct'])
$count=$count+1; 
$i=$i+1;
if($i>200)
$i=1;



/*checking for 9 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans9']== $row['correct'])
$count=$count+1; 
$i=$i+1;




/*checking for 10 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans10']== $row['correct'])
$count=$count+1; 
$i=$i+1;



/*checking for 11 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans11']== $row['correct'])
$count=$count+1; 
$i=$i+1;



/*checking for 12 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans12']== $row['correct'])
$count=$count+1; 
$i=$i+1;



/*checking for 13*/
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans13']== $row['correct'])
$count=$count+1; 
$i=$i+1;




/*checking for 14 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans14']== $row['correct'])
$count=$count+1; 
$i=$i+1;


/*checking for 15 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans15']== $row['correct'])
$count=$count+1; 
$i=$i+1;



/*checking for 16 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans16']== $row['correct'])
$count=$count+1; 
$i=$i+1;




/*checking for 17 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans17']== $row['correct'])
$count=$count+1; 
$i=$i+1;




/*checking for 18 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans18']== $row['correct'])
$count=$count+1; 
$i=$i+1;



/*checking for 19 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans19']== $row['correct'])
$count=$count+1; 
$i=$i+1;



/*checking for 20 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans20']== $row['correct'])
$count=$count+1; 
$i=$i+1;




/*checking for 21 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans21']== $row['correct'])
$count=$count+1; 
$i=$i+1;




/*checking for 22 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans22']== $row['correct'])
$count=$count+1; 
$i=$i+1;




/*checking for 23 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans23']== $row['correct'])
$count=$count+1; 
$i=$i+1;




/*checking for 24 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans24']== $row['correct'])
$count=$count+1; 
$i=$i+1;




/*checking for 25 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans25']== $row['correct'])
$count=$count+1; 
$i=$i+1;



/*checking for 26 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans26']== $row['correct'])
$count=$count+1; 
$i=$i+1;



/*checking for 27 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans27']== $row['correct'])
$count=$count+1; 
$i=$i+1;


/*checking for 28 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans28']== $row['correct'])
$count=$count+1; 
$i=$i+1;



/*checking for 29 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans29']== $row['correct'])
$count=$count+1; 
$i=$i+1;




/*checking for 30 */
$sql = 'SELECT * FROM codingquestions WHERE id="'.$i.'"';
$retval = mysql_query( $sql, $link );
$row = mysql_fetch_array($retval);
if($row1['ans30']== $row['correct'])
$count=$count+1; 
$i=$i+1;



/*updating marks*/
if($row1['marks']<=$count)
{
$query = "UPDATE codingusers SET marks='".$count."' WHERE  username='".$user."'";
$retval = mysql_query( $query, $link1 );
//echo $user;
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
//echo "Updated data successfully\n";
}
$query= "UPDATE codingusers SET ans1='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans2='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );


$query= "UPDATE codingusers SET ans3='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans4='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans5='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans6='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans7='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );


$query= "UPDATE codingusers SET ans8='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );


$query= "UPDATE codingusers SET ans9='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans10='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans11='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans12='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans13='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans14='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans15='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans16='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans17='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans18='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans19='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans20='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans21='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans22='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans23='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans24='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans25='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans26='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans27='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans28='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans29='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET ans30='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE codingusers SET random='0' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );
//echo $count;
$flag=1;


      $To =$user; // sender
      $From="coding.quest2k14@gmail.com";
      $subject ="COMPLETION OF TEST";
      $message = "THANK YOU FOR COMPLETING THE CODAGE ONLINE ROUND 1
      
YOUR ANSWERS ARE STORED AND WILL BE EVALUATED SOON.

A MAIL WILL BE SENT TO YOU IF YOU ARE SELECTED FOR CODAGE SECOND ROUND.
      
ALL THE BEST FROM CODAGE TEAM :)
";
      // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message, 70);
      // send mail
      mail($To,$subject,$message,"From: $From\n");

session_destroy() ;
//echo $user;
?>

<html>
<head>
<link rel="icon" 
      type="image/png" 
      href="questlogo.jpg">

<script language="javascript"> 
function setcookie(cname,cvalue,exdays)
{
   var d = new Date();
     d.setTime(d.getTime()+(exdays*24*60*60*1000));
     var expires = "expires="+d.toGMTString();
     document.cookie = cname + "=" + cvalue + "; " + expires;

	 }
	 setcookie("count","",-1);
 
window.location="feed.php?user=<?php echo $user;?> & flag=<?php echo $flag;?>";

//--> 
</script>
</head>
</html>