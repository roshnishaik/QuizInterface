<?PHP
$con = mysqli_connect("localhost","root","","yaswanth");
$query ="use yaswanth<BR>";
if(mysqli_query($con,$query))
{
	echo "6<BR>";
	echo "used yaswanth<BR>";
}
else 
{
	echo "11<BR>";
	echo "not used yaswanth<BR>";
}
$query=mysqli_query($con,"select * from participantdetails");

if($query)
{
	echo "18<BR>";
	echo "main table details selected<BR>";
}
else 
{ 
	echo "23<BR>";
	echo "main table details not selected<BR>";
}
$qquery="create table quizparticipantdetails(teamname varchar(30),teamsize int,emailid1 varchar(30),emailid2 varchar(30),emailid3 varchar(30),primary key(emailid1),foreign key(emailid1) references participantdetails(emailid))";
	if(mysqli_query($con,$qquery))
	{
		echo "29<BR>";
		echo "new table created<BR>";
	}
	else
	{	
		echo "34<BR>";
		echo "table not created<BR>";
	}
$emailiderr1=$passworderr1=$emailiderr2=$passworderr2="";
$emailid1=$emailid2=$emailid3=$password1=$password2=$password3="";
$flagx=$flagy=$flag=0;
$flag11=$flag22=$flag33=0;
$flag2=0;
$teamname=$teamsize="";
	 if (empty($_POST["emailid1"]))
     {
		$emailiderr1 = "Name is required";
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
			echo "57<BR>";
			$flagx=1;
		 }
		 
	 }
	 if (empty($_POST["emailid2"]))
     {
		$emailiderr2 = "Name is required";
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
			echo "76<BR>";
			$flagy=1;
		 }
		 
	 }
	 $flag=$flagx+$flagy;

	if($flag==2)
	{
		$query=mysqli_query($con,"select * from participantdetails");
		while($row1=mysqli_fetch_array($query))
		{
	
			if($emailid1==$row1['emailid'])
			{
				$password1=$_POST['password1'];
				if($password1==$row1['password'])
				{
					echo "93<BR>";
					$flag11=1;
				}	
			}
		}
		$query=mysqli_query($con,"select * from participantdetails");
		while($row2=mysqli_fetch_array($query))
		{
			echo "100<BR>";
			if($emailid2==$row2['emailid'])
			{
				$password2=$_POST['password2'];
				if($password2==$row2['password'])
 				{
					echo "106<BR>";
					$flag22=1;
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
				echo "118<BR>";
				mysqli_query($con,"insert into quizparticipantdetails values('$teamname','$teamsize','$emailid1','$emailid2','$emailid3')");
			}
			else
			{
				$query=mysqli_query($con,"select * from participantdetails");
				while($row3=mysqli_fetch_array($query))
				{
					if($emailid3==$row3['emailid'])
					{
						$password3=$_POST['password3'];
						if($password3==$row3['password'])
						{
							echo "130<BR>";
							$teamsize=3;
							$teamname=$_POST['teamname'];
								mysqli_query($con,"insert into quizparticipantdetails values('$teamname','$teamsize','$emailid1','$emailid2','$emailid3')");
						}
						else
						{
							echo "137<BR>";
							echo "incorrect details";
						}
	
					}
				}
			}
		}
		else
		{
			echo "147<BR>";
			echo "the details are incorrect<br>";
   		}
	}	
?>