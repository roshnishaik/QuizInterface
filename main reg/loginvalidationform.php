<?PHP
$con = mysqli_connect("localhost","quest2k1_4cse","quest2k14","quest2k1_4cse");


	$query=mysqli_query($con,"select * from codingusers");
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
	if($flag==1)
	{
	while($row=mysqli_fetch_array($query))
	{

		if($emailid==$row['username'])
		{
			$password=$_POST['password'];
			if($password==$row['password'])
			{
				session_start();
				$_SESSION['username']=$emailid;
				echo '<script>
				window.location="http://www.quest2k14.com/coding/codage.php"
				</script>';
			}
			else
			{
				echo "incorrect login";
				break;
			}
		}
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