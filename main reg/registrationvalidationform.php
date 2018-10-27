<?php
// define variables and set to empty values
$nameerr = $emailiderr = $passworderr = $phonenumbererr = $collegenameerr="";
$name = $emailid = $password = $phonenumber = $collegename =$sex=$course=$year="";
$flag1=$flag2=$flag3=$flag4=$flag5=$flag6=0;

$con = mysqli_connect("localhost","quest2k1_4cse","quest2k14","quest2k1_4cse");
	
	/*$query="create database yaswanth";
	mysqli_query($con,$query);
	*/
	$query ="use quest2k1_4cse";
	mysqli_query($con,$query);
	$query="create table participantdetails(name varchar(30),emailid varchar(30),password varchar(30),phonenumber varchar(20),collegename varchar(30),primary key(emailid))";
	mysqli_query($con,$query);
	
	mysqli_query($con,"alter table participantdetails add column sex varchar(20)");
	
	mysqli_query($con,"alter table participantdetails add column
	course varchar(20)");

	mysqli_query($con,"alter table participantdetails add column
	year varchar(20)");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
			$sex = test_input($_POST['sex']);
			$course=test_input($_POST['course']);
			$year=test_input($_POST['year']);
		
	//		echo $sex;
	//		echo $course;
	//		echo $year;

}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["name"]))
     {
		$nameerr = "Name is required";
	 }
   else
     {
		
     	if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"]))
		{
			$nameerr = "Only letters and white space allowed"; 
        }
		else
		 {
			$name = test_input($_POST["name"]);
			$flag1=1;
		 }
     }
}
if (empty($_POST["emailid"]))
{
	$emailiderr = "Email is required";
}
else
{
	 
/*     if 
	 (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$emailid))
     {
       $emailiderr = "Invalid email format"; 
     }
	 else
*/	// {
	if(!filter_var($_POST["emailid"], FILTER_VALIDATE_EMAIL))
	{
		$emailiderr= "E-mail is not valid";
	}
	else
	{
		$emailid = test_input($_POST["emailid"]);
		$flag2=1;
		
	}

		
	 //}
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["password"]))
     {
		$passworderr = "password is required";
	 }
   else
     {
		$password = test_input($_POST["password"]);
		$flag3=1;
	 }
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["phonenumber"]))
     {
		$phonenumbererr = "phonenumber is required";
	 }
   else
     {
		/*if(!is_numeric($_POST["phonenumber"]))
		 {
			$phonenumbererr="invalid phonenumber";
		 }
		else
		 {
			$phonenumber = test_input($_POST["phonenumber"]);
			$flag4=1;
		 }
		 */
		 if (!preg_match("/^[7-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]$/",$_POST["phonenumber"]))
		{
			 $phonenumbererr="invalid phonenumber";
//			$nameerr = "Only letters and white space allowed"; 
        }
		else
		 {
			$phonenumber = test_input($_POST["phonenumber"]);
			$flag4=1;
			/*$name = test_input($_POST["name"]);
			$flag1=1;*/
		 }

	 }
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["collegename"]))
     {
		$collegenameerr = "Name is required";
	 }
   else
     {
		
     	if (!preg_match("/^[a-zA-Z ]*$/",$_POST["collegename"]))
		{
			$collegenameerr = "Only letters and white space allowed"; 
        }
		else
		 {
			$collegename = test_input($_POST["collegename"]);
			$flag5=1;
		 }
     }
}

$flag=$flag1+$flag2+$flag3+$flag4+$flag5;
if($flag==5)
{
	$query=mysqli_query($con,"select * from participantdetails");
	
	while($row=mysqli_fetch_array($query))
	{

		//echo $row['id']." ".$row['name'];
		//echo $row['emailid'];
		//$temp = strcmp($emailid,$row['emailid']); 
		if($emailid==$row['emailid'])
		{
			$flag6=1;
			//echo "flag6 is $flag6";
			break;
		}
	}
	
	if($flag6==0)
	{
		//echo "at present ur at before teh insert command";
		if(mysqli_query($con,"insert into participantdetails values('$name'
		,'$emailid','$password','$phonenumber','$collegename','$sex','$course','$year')"))
		{
		//echo "the values have been inserted";
		echo "<h1>Successfully Registered.</h1><BR>";
		/*echo "<a href=/login%20registrations/login.php>enter into the main site</a>";*/
		}
	}
	else
	{
		echo "<h1>You have already been registered.<h1>";
		/*echo "<a href=/login%20registrations/login.php>enter into the main site</a>";*/
		
	}
}

/*
echo "$name<BR>";
echo "$emailid<BR>";
echo "$password<BR>";
echo "$phonenumber<BR>";
echo "$collegename<BR>";
*/
function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}

?>