<?PHP

$con = mysqli_connect("localhost","quest2k1_4cse","quest2k14","quest2k1_4cse");
/*$query ="use yaswanth<BR>";
mysqli_query($con,$query);*/
/*
{ echo "used yaswanth<BR>";}
else 
{ echo "not used yaswanth<BR>";}*/
//$query=mysqli_query($con,"select * from participantdetails");

$a=0;
/*if($query){ echo "main table details selected<BR>";}
else { echo "main table details not selected<BR>";}*/

/*$qquery="create table pptparticipantdetails(teamname varchar(30),teamsize int,topicname varchar(30),emailid1 varchar(30),emailid2 varchar(30),primary key(emailid1),foreign key(emailid1) references participantdetails(emailid))";
	
	

    mysqli_query($con,$qquery);
	
	{		echo "new table created<BR>";}
	else
	{		echo "table not created<BR>";}*/
$emailiderr=$passworderr="";
$flag=0;
$flag2=0;
$teamname=$teamsize="";
	 if (empty($_POST["username"]))
     {
		$emailiderr = "E-mailid is required";
	 }	
	 else
	 {
		 //$emailid1=$_POST['emailid1'];
		 if(!filter_var($_POST["username"], FILTER_VALIDATE_EMAIL))
		 {
			$emailiderr= "E-mail is not valid";
	     }
	     else
	     {
			$emailid1 = $_POST['username'];
			$flag=1;
		 }
		 
	 }	
	if($flag==1)
/*1*/	{
		//echo "49";
		$query=mysqli_query($con,"select * from participantdetails where emailid='$emailid1'");
		if($query)
		{
			$qquery=mysqli_query($con,"select * from codingusers where (username='$emailid1' or username1='$emailid1')");
			if($rowq=mysqli_fetch_array($qquery))
			{
			//	echo "56";
			//	echo $rowq['username'];
				echo '<p style="color:red;font-size:25px;align:center">FIRST PERSON IS ALREADY REGISTERED</p>';
				goto a;
			}
		}	
	if($row1=mysqli_fetch_array($query))
/*2*/	{
	//	echo "64";
		if($emailid1==$row1['emailid'])
/*3*/		{
	//		echo "67";
			$password1=$_POST['password'];
			if($password1==$row1['password'])
/*4*/			{
				$teamsize=1;
	//			echo "72";
				if (!empty($_POST["username1"]))
/*1*/				{
	//				echo "75";
				$emailid2=$_POST['username1'];
		//		echo $emailid2;
				$query2=mysqli_query($con,"select * from participantdetails where emailid='$emailid2'");
					if($row2=mysqli_fetch_array($query2))
/*2*/					{
	//					echo "81";
				//		$emailid2=$_POST['username1'];
						//echo $emailid2;
						//echo $row2['emailid'];
						if($emailid2==$row2['emailid'])
/*3*/						{
	//						echo "87";
							$password2=$_POST['password1'];
							if($password2==$row2['password'])
/*4*/							{
	//							echo "91";
								$teamsize=2;					
/*4-*/							}
							else
/*4+*/							{
	//							echo "96";
								
								echo '<p style="color:red;font-size:25px;align:center">SECOND PERSON DETAILS ARE NOT CORRECT</p>';
								$flag2=1;
/*4-*/							}
/*3-*/						}
/*2-*/					}
						else
					{
					echo '<p style="color:red;font-size:25px;align:center">SECOND PERSON IS NOT REGISTERED</p>';
							$flag2=1;
					}
/*1-*/				}
				else
/*1+*/				{
	//				echo "111";
					$emailid2=$password2="";
					$teamsize=1;
/*1-*/				}

				/*$name1=$row['name'];
				$emailid1=$row['emailid'];
				$password1=$row['password'];
				$phonenumber1=$row['phonenumber'];
				$collegename1=$row['collegename'];
				$sex1=$row['sex'];
				$course1=$row['course'];
				$year1=$row['year'];*/
	/*			if(mysqli_query($con,"insert into pptparticipantdetails values('$name'
		,'$emailid','$password','$phonenumber','$collegename','$sex','$course','$year')"))
					{
					echo "successfully u have been logged in for the event paperpresentation";
				}
				else
				{
					echo"asdf";
				}
				break;
				*/
				$teamname=$_POST['teamname'];
			//	$topic=$_POST['topic'];
	//			echo "89";
	//			echo $teamname;
	//			echo $topic;
	//			echo $teamsize;
	//			echo $emailid1;
	//          echo $emailid2;
	$asdf="";
if($flag2!=1)
{
//	echo "146";
if(mysqli_query($con,"insert into codingusers values('$teamname','$teamsize','$emailid1','$password1','$emailid2','$password2','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','$asdf','0')"))
				{
//					echo "148";
					$_SESSION['username']=$emailid1;
					$_SESSION['password']=$password1;
					echo '<script>
				window.location="regmail.php"
				</script>';
					
				}
				else
				{
//					echo "159";			
				//echo '<p style="color:red;font-size:25px;align:center">SECOND PERSON DETAILS ARE NOT CORRECT</p>';
				}
}
else
				{//echo '<p style="color:red;font-size:25px;align:center">SECOND PERSON IS ALREADY REGISTERED</p>';
//					echo "165";
				}
/*4-*/	}
			else
			{
				echo '<p style="color:red;font-size:25px;align:center">FIRST PERSON DETAILS ARE NOT CORRECT</p>';
			}
/*3-*/		}
/*2-*/	}
		else
		{       
			echo '<p style="color:red;font-size:25px;align:center">YOU HAVE TO REGISTER FIRST IN THE MAIN WEBSITE TO REGISTER FOR ANY OF THE EVENTS</p>';
		}

/*1-*/	}
	else
	{
		if (empty($_POST["password"]))
		 {
		$passworderr = "password is required";
		 }	
		 else
		{
		$passworderr = "Please Enter your email-id.";
		}
		a : echo "";
	}
?>