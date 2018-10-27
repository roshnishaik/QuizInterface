<?PHP
session_start();
if(isset($_SESSION['username']))
echo '<script>
				window.location="kvizo.php"
				</script>';
$con = mysqli_connect("localhost","quest2k1_4cse","quest2k14","quest2k1_4cse");


	$query=mysqli_query($con,"select * from quizusers");
$emailiderr=$passworderr="";
$flag=0;
	 if (empty($_POST["emailid"]))
     {
		$emailiderr = "Emailid is required";
	 }	
	 else
	 {
		 $emailid=$_POST['emailid'];
		 $flag=1;
	 }	
	 	 $query=mysqli_query($con,"select * from quizusers where username='$emailid'");
	if($flag==1)
	{
	$row=mysqli_fetch_array($query);
	

		if($emailid==$row['username'])
		{
			$password=$_POST['password'];
			if($password==$row['password'])
			{
				
				$_SESSION['username']=$emailid;
				echo '<script>
				window.location="kvizo.php"
				</script>';
			}
			else
			{
				echo '<p style="color:red;font-size:25px;align:center">INCORRECT PASSWORD</p>';
				
			}
			
		}
		else
			{
			 echo 44;
				echo '<p style="color:red;font-size:25px;align:center">INCORRECT USERNAME</p>';
				
			}
	
	}
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