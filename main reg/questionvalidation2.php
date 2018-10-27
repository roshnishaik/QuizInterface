<?PHP
$con=mysqli_connect("localhost","quest2k1_4cse","quest2k14","quest2k1_4cse");

//$query=mysqli_query($con,"select * from participantdetails");
$emailiderr=$passworderr="";
$flag=0;
	 if (empty($_POST["emailid"]))
     {
		$emailiderr = "emailid is required";
	 }	
	 else
	 {
		 $emailid=$_POST['emailid'];
		 $flag=1;
	 }	
	if($flag==1)
	{
	//	echo "17";
	$query=mysqli_query($con,"select * from participantdetails where emailid='$emailid'");
		/*if($query)
		{
			echo "query gets executed";
		}
		else
		{
			echo "query not getting executed";
		}*/
		if($row=mysqli_fetch_array($query))
/*1*/		{
		//	echo "20";
			if($emailid==$row['emailid'])
/*2*/			{
				$password=$_POST['password'];
				if($password==$row['password'])
/*3*/				{
					//echo "26";
					$ans=$_POST['answer'];
					$current_time = date("Y-m-d H:i:s");
					$qquery="create table dailyquizcompetetion12mar(emailid varchar(30),password varchar(30),answer varchar(30),submissiontime timestamp,primary key(emailid))";
					mysqli_query($con,$qquery);

		if(mysqli_query($con,"insert into dailyquizcompetetion12mar values('$emailid','$password','$ans','$current_time')"))
/*4*/					{
						//echo "34";
				/*		header('Location:/questionvalidation5.html');
				*/	
					echo "<h1>YOUR ANSWER HAS BEEN RECEIVED</h1>";
/*4-*/					goto a;
						}
					else
/*4*/					{
						echo "<h1> YOU HAVE ALREADY ANSWERED</h1>";
						goto a;
						//echo "39";
				/*		header('Location:/questionvalidation6.html');
/*4-*/					}
			
				/*header('Location:/changed website/questionvalidation3.php');
				break;*/
/*3-*/				}
				else
/*3*/				{
					echo "<h1>Incorrect login</h1>";
					goto a;
/*3-*/				}
/*2-*/			}
/*1-*/		}
		{
			echo "<h1>You have not registered...Go to the below mentioned link for registration</h1>";
		a: echo "";
		}
	}
	else
		{
			if (empty($_POST["password"]))
			{
				$passworderr = "password is required.";
			}	
			else
			{
				$passworderr = "Please enter your email-id.";
			}
		}
?>