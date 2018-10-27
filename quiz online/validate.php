<?php 
session_start();
include("config1.php"); //including config.php in our file
$username = $_POST["user"]; //Storing username in $username variable.
$password = $_POST["password"]; //Storing password in $password variable.
echo $username;
echo $password;

$match =  'SELECT id FROM users WHERE username="'.$username.'" and password="'.$password.'"';

$qry = mysql_query($match);

$num_rows = mysql_num_rows($qry); 

$retval = mysql_query( $match, $link1 );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}


if ($num_rows <= 0) { 

echo "Sorry, there is no username $username with the specified password.";



exit; 

} if($num_rows==1) {



$_SESSION['username']= $_POST["user"];
echo $_SESSION['username'];
echo $num_rows;

// It is the page where you want to redirect user after login.

}
?>
<html>
<head>
<script>
var x="<?php echo $num_rows;?>";
document.write(x);
if(x==1)
window.location="http://quest2k14.com/coding/codage.php?user=<?php echo $username;?>";
else
window.location="http://quest2k14.com/coding/login.php";

</script>
</head>
</html>