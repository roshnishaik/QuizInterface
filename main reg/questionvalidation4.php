<html>
	<head>
	
	</head>
	<body>
		<?PHP

		//session_start();
		
	//$mailid=$_GET['user'];
	//$mailid=$_SESSION['username'];

		$ans=$_POST['answer'];

		//echo $ans;
		$con = mysqli_connect("localhost","quest2k1_4cse","quest2k14","quest2k1_4cse");
		
		//$con
		/*
		{
			echo "connection established";
		}
		else
		{
			echo "connection terminated";
		}*/
		/*$query=mysqli_query($con,"select * from participantdetails");*/
		
//		mysqli_query($con,"use yaswanth");
		/*{ 
			echo "using yaswanth"; }
		else
		{ 
			echo "not using yaswanth"; }
		*/
		$qquery="create table dailyquizcompetetion1(name varchar(30),emailid varchar(30),password varchar(30),phonenumber varchar(20),collegename varchar(30),sex varchar(20),course varchar(20),year varchar(20),answer varchar(30),submissiontime timestamp,primary key(emailid))";
		
		mysqli_query($con,$qquery);
		/*
		{ echo "table created"; }
		else
		{ echo "table not created"; }
		*/
		$current_date = date("Y-m-d H:i:s");
		
		//$mailid=$_COOKIE["usermailid"];
	
//	$mailid=$_SESSION["username"];
		//echo $mailid;

	$query=mysqli_query($con,"select * from participantdetails where emailid='$mailid' ");
	/*	{ echo "query gets executed";}
		else
		{ echo "query doesn't gets executed"; }
	*/	
		//$result = mysqli_query($con,"SELECT * FROM Persons");
/*
		$row = mysqli_fetch_array($query);
		
			echo $row['name'] ;
			echo "<br>";
*/		

		$row=mysqli_fetch_array($query);
		
				$name=$row['name'];
				$emailid=$row['emailid'];
				$password=$row['password'];
				$phonenumber=$row['phonenumber'];
				$collegename=$row['collegename'];
				$sex=$row['sex'];
				$course=$row['course'];
				$year=$row['year'];
if(mysqli_query($con,"insert into dailyquizcompetetion1 values('$name','$emailid','$password','$phonenumber','$collegename','$sex','$course','$year','$ans','$current_date')"))
				{
					header('Location:/changed website/questionvalidation5.html');
				}
				else
				{
					header('Location:/changed website/questionvalidation6.html');
				}
	//	session_destroy();	
		mysqli_close($con);
		?>

	</body>
</html>