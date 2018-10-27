<?PHP
$con = mysqli_connect("localhost","root","","yaswanth");
$query ="use yaswanth<BR>";
if(mysqli_query($con,$query))
{ echo "used yaswanth<BR>";}
else 
{ echo "not used yaswanth<BR>";}
$query=mysqli_query($con,"select * from participantdetails");
if($query){ echo "main table details selected<BR>";}
else { echo "main table details not selected<BR>";}
$qquery="create table codingparticipantdetails(teamname varchar(30),teamsize int,topicname varchar(30),emailid1 varchar(30),emailid2 varchar(30),primary key(emailid1),foreign key(emailid1) references participantdetails(emailid))";
	
	

	if(mysqli_query($con,$qquery))
	{		echo "new table created<BR>";}
	else
	{		echo "table not created<BR>";}
$emailiderr=$passworderr="";
$flag=0;
$flag2=0;
$teamname=$topic=$teamsize="";
	 if (empty($_POST["emailid1"]))
     {
		$emailiderr = "Name is required";
	 }	
	 else
	 {
		 //$emailid1=$_POST['emailid1'];
		 if(!filter_var($_POST["emailid1"], FILTER_VALIDATE_EMAIL))
		 {
			$emailiderr= "E-mail is not valid";
	     }
	     else
	     {
			$emailid1 = $_POST['emailid1'];
			$flag=1;
		 }
		 
	 }	
	if($flag==1)
/*1*/	{
		echo "33";
	while($row1=mysqli_fetch_array($query))
/*2*/	{
		echo "35";
		if($emailid1==$row1['emailid'])
/*3*/		{
			echo "38";
			$password1=$_POST['password1'];
			if($password1==$row1['password'])
/*4*/			{
				$teamsize=1;
				echo "42";
				if (!empty($_POST["emailid2"]))
/*1*/				{
					echo "45";
					$query2=mysqli_query($con,"select * from participantdetails");
					while($row2=mysqli_fetch_array($query2))
/*2*/					{
						echo "48";
						$emailid2=$_POST['emailid2'];
						echo $emailid2;
						echo $row2['emailid'];
						if($emailid2==$row2['emailid'])
/*3*/						{
							echo "52";
							$password2=$_POST['password2'];
							if($password2==$row2['password'])
/*4*/							{
								echo "51";
								$teamsize=2;					
/*4-*/							}
							else
/*4+*/							{
								echo "56";
								echo "second person details are not correct";
								$flag2=1;
/*4-*/							}
/*3-*/						}
/*2-*/					}
/*1-*/				}
				else
/*1+*/				{
					echo "64";
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
				$topic=$_POST['topic'];
				echo "89";
				echo $teamname;
				echo $topic;
				echo $teamsize;
				echo $emailid1;
				echo $emailid2;
if($flag2!=1)
{
if(mysqli_query($con,"insert into codingparticipantdetails values('$teamname','$teamsize','$topic','$emailid1','$emailid2')"))
				{
					echo "registration complete<BR>";
				}
		else
				{
					echo "already registered<BR>";
				}
}
else
				{echo "details are not correct once check it out";}
/*4-*/	}
			else
			{
				echo "incorrect login";
				break;
			}
/*3-*/		}
/*2-*/	}
/*1-*/	}
	else
	{
		if (empty($_POST["password"]))
		 {
		$passworderr = "password is required";
		 }	
		 else
		{
		$passworderr = "without ur emailid ...no use of password";
		}
	}
?>