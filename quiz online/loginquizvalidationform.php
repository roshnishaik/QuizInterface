<?PHP

include("config.php");
include("config1.php");
$con = mysqli_connect("localhost","quest2k1_4cse","quest2k14","quest2k1_4cse");
$asdf="";
/*$query ="use yaswanth<BR>";
if(mysqli_query($con,$query))
{
	//echo "6<BR>";
	echo "used yaswanth<BR>";
}
else 
{
	//echo "11<BR>";
	echo "not used yaswanth<BR>";
}*/
$query=mysqli_query($con,"select * from participantdetails");

/*if($query)
{
	//echo "18<BR>";
	echo "main table details selected<BR>";
}
else 
{ 
	echo "23<BR>";
	echo "main table details not selected<BR>";
}*/
/*$qquery="create table quizusers(teamname varchar(30),teamsize int,emailid1 varchar(30),emailid2 varchar(30),emailid3 varchar(30),primary key(emailid1),foreign key(emailid1) references participantdetails(emailid))";
	mysqli_query($con,$qquery);*/
	/*
	{
	//	echo "29<BR>";
		echo "new table created<BR>";
	}
	else
	{	
		echo "34<BR>";
		echo "table not created<BR>";
	}*/
$emailiderr1=$passworderr1=$emailiderr2=$passworderr2="";
$emailid1=$emailid2=$emailid3=$password1=$password2=$password3="";
$flagx=$flagy=$flag=0;
$flag11=$flag22=$flag33=0;
$flag2=0;
$teamname=$teamsize="";
	 if (empty($_POST["emailid1"]))
     {
		$emailiderr1 = "Emailid is required";
	 }	
	 else
	 {
		 //$emailid1=$_POST['emailid1'];
		 if(!filter_var($_POST["emailid1"], FILTER_VALIDATE_EMAIL))
		 {
			$emailiderr1= "E-mail is not valid";
	     }
	     else
	     {
			$emailid1 = $_POST['emailid1'];
			//echo "58<BR>";
			$flagx=1;
		 }
		 
	 }
	 if (empty($_POST["emailid2"]))
     {
		$emailiderr2 = "Emailid is required";
	 }	
	 else
	 {
		 //$emailid1=$_POST['emailid1'];
		 if(!filter_var($_POST["emailid2"], FILTER_VALIDATE_EMAIL))
		 {
			$emailiderr2= "E-mail is not valid";
	     }
	     else
	     {
			$emailid2 = $_POST['emailid2'];
			//echo "77<BR>";
			$flagy=1;
		 }
		 
	 }
	 $flag=$flagx+$flagy;

	if($flag==2)
	{
		$query=mysqli_query($con,"select * from participantdetails where emailid='$emailid1'");
		if($row1=mysqli_fetch_array($query))
		{
			if($query)
			{
				$qquery=mysqli_query($con,"select * from quizusers where (username='$emailid1' or emailid2 = '$emailid1' or emailid3 = '$emailid1')");
				/*$qquery="select * from quizusers where (username='$emailid1' or emailid2 = '$emailid1' or emailid3 = '$emailid1')";
$retval = mysql_query( $qquery, $link1 );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}*/
				if($rowq=mysqli_fetch_array($qquery))
				{
				//echo "94";
			//	echo $rowq['username'];
					echo '<p style="color:red;font-size:25px;align:center">FIRST PERSON ALREADY REGISTERED .</p>';
					goto a;
				}
				
			}		

			if($emailid1==$row1['emailid'])
			{
				$password1=$_POST['password1'];
				if($password1==$row1['password'])
				
				{	//echo "107<BR>";
					$flag11=1;
				}
				else
				{
					echo '<p style="color:red;font-size:25px;align:center">First person details are not correct</p>';
				}
			}
		}
		$query=mysqli_query($con,"select * from participantdetails where emailid='$emailid2'");
		if($row2=mysqli_fetch_array($query))
		{
			if($query)
			{
				$qquery=mysqli_query($con,"select * from quizusers where (username='$emailid2' or emailid2 = '$emailid2' or emailid3 = '$emailid2')");
				if($rowq=mysqli_fetch_array($qquery))
				{
				//echo "124";
				//echo $rowq['username'];
					echo '<p style="color:red;font-size:25px;align:center">Second person ......already registered</p>';
					goto a;
				}
			}		

			//echo "131<BR>";
			if($emailid2==$row2['emailid'])
			{
				$password2=$_POST['password2'];
				if($password2==$row2['password'])
 				{
					//echo "137<BR>";
					$flag22=1;
				}
				else
				{
					echo '<p style="color:red;font-size:25px;align:center">Second person details are incorrect</p>';
				}
			}
		}
		$emailid3=$_POST['emailid3'];
		
		$flag33=$flag11+$flag22;	
		if($flag33==2)
		{
			if($emailid3=="")
			{
				$teamsize=2;
				$teamname=$_POST['teamname'];
				//echo "155<BR>";
				
				/*$qquery="insert into quizusers values('$asdf','$teamname','$teamsize','$emailid1','$password1','$emailid2','$password2','$emailid3','password3','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','0')";
				
				$retval = mysql_query( $qquery, $link1 );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());}*/
				mysqli_query($con,"insert into quizusers values('$asdf','$teamname','$teamsize','$emailid1','$password1','$emailid2','$password2','$emailid3','$password3','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','0')");
                   $_SESSION['username']=$emailid1;
                   $_SESSION['password']=$password1;
                   echo '<script>
				window.location="regmail.php"
				</script>';
					
			}
			else
			{
				$query=mysqli_query($con,"select * from participantdetails where emailid='$emailid3'");
					if($query)
					{
						$qquery=mysqli_query($con,"select * from quizusers where (username='$emailid3' or emailid2 = '$emailid3' or emailid3='$emailid3')");
						if($rowq=mysqli_fetch_array($qquery))
						{
						//echo "167";
						//	echo $rowq['username'];
							echo '<p style="color:red;font-size:25px;align:center">Third person ......already registered</p>';
							goto a;
						}
					}			

				if($row3=mysqli_fetch_array($query))
				{
					if($emailid3==$row3['emailid'])
					{
						$password3=$_POST['password3'];
						if($password3==$row3['password'])
						{
							//echo "181<BR>";
							$teamsize=3;
							$teamname=$_POST['teamname'];
						/*	$qquery="insert into codingusers values('$asdf','$teamname','$teamsize','$emailid1','$password1','$emailid2','$password2','$emailid3','$password3','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','0')";
				
				$retval = mysql_query( $qquery, $link1 );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());}*/
							mysqli_query($con,"insert into quizusers values('$asdf','$teamname','$teamsize','$emailid1','$password1','$emailid2','$password2','$emailid3','$password3','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','0')");
                          $_SESSION['username']=$emailid1;
                          $_SESSION['password']=$password1;
                   echo '<script>
				window.location="regmail.php"
				</script>';
						}
						else
						{
							//echo "189<BR>";
							echo '<p style="color:red;font-size:25px;align:center">Third person details are incorrect </p>';
						}
	
					}
				}
			}
		}
		else
		{
			//echo "199<BR>";
						echo '<p style="color:red;font-size:25px;align:center">YOU HAVE TO REGISTER FIRST IN THE MAIN WEBSITE TO REGISTER FOR ANY OF THE EVENTS</p>';
			
   		}
	}	
	a: echo "";
	/*first person is already registered";
	b: echo "second person is already registered";
	c: echo "third person is already registered";*/
?>