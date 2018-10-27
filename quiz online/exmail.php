<?php
 $database = "quest2k1_4cse";  // the name of the database.

$server = "localhost";  // server to connect to.

$db_user = "quest2k1_4cse";  // mysql username to access the database with.

$db_pass = "quest2k14";  // mysql password to access the database with.

   // the table that this script will set up and use.

$link1 = mysql_connect($server, $db_user, $db_pass);
mysql_select_db($database,$link1);

 
  $sql1='SELECT * from users1';
$retval1 = mysql_query( $sql1, $link1 );
$num_rows=mysql_num_rows($retval1);
       echo $num_rows;
      $ran=$num_rows;
   
 

for($i=141;$i>0;$i=$i-1)
{
     $sql1='SELECT * from users1 where id="'.$i.'"';
     
       $retval1 = mysql_query( $sql1, $link1 );
       $row1 = mysql_fetch_array($retval1);
      if(! $retval1 )
{
  die('Could not update data: ' . mysql_error());
}
//echo "Updated data successfully\n";

 $to=$row1['emailid'];
   //$to="ramakrishnasaradhi@gmail.com";
      echo $to."\n";
      
      $from ="QUEST";// sender
      $subject ="COMPETITIVE EXAMS";
      $message= "HAND-OUT:
We,as a part of our event quest take an initiation to donate some amount to Hope Steps charity organisation by introducing the event Hand-Out.This event aims at providing experience to students for competitive exams like GATE,CAT and GRE.Certain amount will be donated to orphanages on the behalf of Participants.

Link:http://www.quest2k14.com/ideep/

->Merit Certificate will be given to top 3 Students.
->Participation Certificates will be given to the participants who 
performed well.
->There is no Participation Fee to participate in the Event.
->It is both an online and onsite Event.
------>>
IDEEP
www.quest2k14.com";
      // message lines should not exceed 70 characters (PHP rule), so wrap it
  
      // send mail
  mail($to,$subject,$message, "From: $from\n");
    echo $i;
      
  }
   

    ?>