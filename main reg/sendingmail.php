<html>
<head>
</head>

<BODY background="bgimg.jpg" style="background-size:100%">
<?PHP
	/*$from="quest2k14@gmail.com";
    $emailid=$_POST['emailid'];
	$subject="Your password..!!";*/

$con=mysqli_connect("localhost","quest2k1_4cse","quest2k14","quest2k1_4cse");
$emailiderr="";
$flag=0;
	//echo "9";
	 if (empty($_POST["emailid"]))
     {
		$emailiderr = "emailid is required";
	 }	
	 else
	 {
		 $emailid=$_POST['emailid'];
		 //echo "17";
		 $flag=1;
	 }	

	if($flag==1)
	{
		$query=mysqli_query($con,"select * from participantdetails where emailid='$emailid'");
		//echo "23";
		/*if($query)
		{
			echo "query has got executed";
		}
		else
		{
			echo "query has not got executed";
		}*/
		if($row=mysqli_fetch_array($query))
		{
		//	echo "35";
		$password = $row['password'];
		$sodi="is your registered password";
		$message=$password.' '.$sodi;
		$from="quest2k14@gmail.com";
		//$emailid=$_POST['emailid'];
		$subject="Your account details for the QUEST2k14";
		mail($emailid,$subject,$message,"From:".$from);
		echo "<h1>Your password has been sent to your registered mailid</h1>";
		echo "<a href=\"http://quest2k14.com/questionvalidation1.php\">click here to answer the question</a>"; 
		}
		else
		{
			echo "<h1>Your have not registered</h1>";
			echo "<a href=\"http://quest2k14.com/register.php\">click here to register</a>"; 
		}
	}
	
?>
</body>