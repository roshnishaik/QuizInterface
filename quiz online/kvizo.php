<?php

session_start();
if (!isset($_SESSION['username']))
{
echo '<script>window.location="login.php" </script>';
}

$user=$_SESSION['username'];

include("config.php");
include("config1.php");

$sql = 'SELECT * FROM quizusers WHERE username="'.$user.'"';
$retval = mysql_query( $sql, $link1 );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
$row = mysql_fetch_array($retval);

/*$query= "UPDATE quizusers SET ans1='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans2='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );


$query= "UPDATE quizusers SET ans3='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans4='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans5='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans6='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans7='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );


$query= "UPDATE quizusers SET ans8='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );


$query= "UPDATE quizusers SET ans9='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans10='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans11='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans12='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans13='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans14='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans15='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans16='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans17='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans18='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans19='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans20='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans21='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans22='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans23='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans24='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans25='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans26='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans27='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans28='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans29='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );

$query= "UPDATE quizusers SET ans30='' WHERE username='".$user."'";
$retval = mysql_query( $query, $link1 );
*/


if( $row['random']=='0')
{
 //echo $row['random'];
 $ran= rand(1,286);
 $query= "UPDATE quizusers SET random='".$ran."' WHERE username='".$user."'";
 mysql_query($query);
}
else
$ran=$row['random'];


?>

<HTML>
 <HEAD>
 <link rel="icon" 
      type="image/png" 
      href="questlogo.jpg">

   <style>

 #area{ margin:0; padding: 3px; font-family: sans-serif;}


iframe{
 padding:0px;
-moz-box-shadow:  0px 0px 8px 6px #7A5229;
-webkit-box-shadow:  0px 0px 8px 6px #7A5229;
box-shadow: 0 0 8px 6px #7A5229 ;
position:fixed; float:right;left:320px; top:21%;
marginwidth:5px;
overflow-y:auto;
}

.aa,.ab{
position:relative;
background: #19353E;
text-align: center;
margin-left:10px;
color: #FFFFFF;
width:85px;
height:30px;
top:-30px;
border-radius:8px;
-moz-border-radius:8px;
-webkit-border-radius:8px;
box-shadow: 0px 3px 5px #7A5229;
-moz-box-shadow: 0px 3px 5px #7A5229;
-webkit-box-shadow: 0px 3px 5px #7A5229;
}
.aa:hover,.ab:hover {
top:-26px;
color: #FFFFFF;
box-shadow:none;
-moz-box-shadow:none;
-webkit-box-shadow:none;
}

#ques{
margin-left:30px;
}
 h3{
 padding-top:30px;
 padding-left:25px}
 #n{
 margin-right:10px;
 }

img{
padding:0px;
height:9%px;
width:30%;
}
table{
position:fixed;
top:140px;
left:35px;
height:45%;
border:5px inset #006B8F;
 box-shadow: 0px 0px 8px 6px #7A5229;
 -moz-box-shadow:  0px 0px 8px 4px #7A5229;
 -moz-box-shadow:  0px 0px 8px 4px #7A5229;
}

tr td .tb:hover {
  -moz-transform: scale(1.2);
  -webkit-transform: scale(1.2);
  -o-transform: scale(1.2);
}
th{
   background-color:#FF7700;
   color:#FFFFFF;
   font-size:18px;
   font-family:Gabriola;}
.tb
{
 display:block;
 font-weight:bold;
 color:#FFFFFF;
 background:#19353E;
 width:76px;
 height:35px;
 text-align:center;
 padding:4px;
 text-decoration:none;
 border-style:none; 
}
button:hover,button:active
{
 background:#FF6600;
}

#cor{
position:fixed;
bottom:0;
font-family:sans-sarif;
color:#19353E;
font-size:12px;
}
#stwa{
text-shadow: 0px 3px 5px #7A5229;
-moz-text-shadow: 0px 3px 5px #7A5229;
-webkit-text-shadow: 0px 3px 5px #7A5229;
    background: url('images/email_icon.png') no-repeat scroll right center #ccc;
    border: 1px solid #666;
    box-shadow: 0 0 5px #666 inset;
    color: #333;
    float:centre;
    padding: 7px 10px;
    outline: none;
	position:fixed;
}
#ql{
position:fixed;
left:45px;
top:15px;
height:16%;
width:10%;}
tr{
cellpadding:1px;}
</style>
</HEAD>
 <BODY style="background-color:white" onload="stopwatch()">
 <img id="ql" style="position:fixed;left:95px" src="questlogo.jpg"><!--questlogo-->

<h2 style="top:2px;color:#7A5229;position:fixed;right:148px;font-family:Gabriola">TIME LEFT</h2>
<input type="text" id="stwa" value=""  style="width:12%; font-size:30px; text-align:center; position:fixed; top:55px; right:152px" disabled/>  
 
 <img style="position:fixed;left:35%;top:0%" src="kvizo.jpg"/>
 
 <form id="ques" action="1.php" target="quespage" method="post" >
      <table border="0" cellpadding="1" cellspacing="0">
      <th colspan="6" height="40" width="40">
        QUESTION CATALOGUE</th>
               
    <tr>
          <td><button type="submit"  class="tb" name="we"  onclick="change(1)" value=" ">01</button></td>
          <td><button type="submit"  class="tb" name="we" onclick="change(2)" value=" ">02</button></td>
          <td><button type="submit"  class="tb" name="we" onclick="change(3)" value=" ">03</button></td>
   </tr>
   <tr>     
      <td><button type="submit"  class="tb" name="we" onclick="change(4)" value=" ">04</button></td>
	  <td><button type="submit"  class="tb" name="we" onclick="change(5)" value=" ">05</button></td> 
	  <td><button type="submit" class="tb" name="we" onclick="change(6)" value=" ">06</button></td>
   </tr>
   <tr>
      <td><button type="submit"  class="tb" name="we" onclick="change(7)" value=" ">07</button></td>
	  <td><button type="submit"  class="tb" name="we" onclick="change(8)" value=" ">08</button></td>
	  <td><button type="submit"  class="tb" name="we" onclick="change(9)" value=" ">09</button></td>
   </tr>
   <tr>
       <td><button type="submit"  class="tb" name="we" onclick="change(10)" value=" ">10</button></td>
       <td><button type="submit"  class="tb" name="we" onclick="change(11)" value=" ">11</button></td>
       <td><button type="submit"  class="tb" name="we" onclick="change(12)" value=" ">12</button></td>
   </tr>
   <tr>	
	  <td><button type="submit"  class="tb" name="we" onclick="change(13)" value=" ">13</button></td>
	  <td><button type="submit"  class="tb" name="we" onclick="change(14)" value=" ">14</button></td>
	  <td><button type="submit"  class="tb" name="we" onclick="change(15)" value=" ">15</button></td>
   </tr>
   <tr>
          <td><button type="submit" class="tb" name="we" onclick="change(16)" value=" ">16</button></td>
          <td><button type="submit" class="tb" name="we" onclick="change(17)" value=" ">17</button></td>
	      <td><button type="submit"  class="tb" name="we" onclick="change(18)" value=" ">18</button></td>
   </tr>
   <tr>
	  <td><button type="submit" class="tb" name="we" onclick="change(19)" value=" ">19</button></td>
	  <td><button type="submit" class="tb" name="we" onclick="change(20)" value=" ">20</button></td>
      <td><button type="submit" class="tb" name="we" onclick="change(21)" value=" ">21</button></td>
  </tr>
  <tr>
		
      <td><button type="submit" class="tb" name="we" onclick="change(22)" value=" ">22</button></td>
	  <td><button type="submit"  class="tb" name="we" onclick="change(23)" value=" ">23</button></td>
	  <td><button type="submit" class="tb" name="we" onclick="change(24)" value=" ">24</button></td>
 </tr>
  <tr>
     	<td><button type="submit"  class="tb" name="we" onclick="change(25)" value=" ">25</button></td>
        <td><button type="submit"  class="tb" name="we" onclick="change(26)" value=" ">26</button></td>
         <td><button type="submit"  class="tb" name="we" onclick="change(27)" value=" ">27</button></td>
  </tr>
  <tr>
         <td><button type="submit"  class="tb" name="we" onclick="change(28)" value=" ">28</button></td>
         <td><button type="submit"  class="tb" name="we" onclick="change(29)" value=" ">29</button></td>
         <td><button type="submit"  class="tb" name="we" onclick="change(30)" value=" ">30</button></td>
  </tr>

</table>
     </form>
</table><form action="check.php" onclick="return ask();">
      <button class="aa" style="margin-left:100px;margin-top:625px;position:fixed" type="submit">END TEST</button>

</form>
<form action="submittedanswers.php" target="quespage">
 <button class="ab" style="left:50%;top:94%;position:fixed;width:20%;height:5%" type="submit">SUBMITTED ANSWERS</button>
</form>

<output form="boxques" name="ques">
    <!--<div  id="box" style="width:65%; height:70%; overflow-y:scroll; overflow-x:hidden; position:fixed; float:right;left:320px; top:140px">-->

<h2 style="position:fixed;left:310px;top:11%;font-family:Gabriola;color:#7A5229">WELCOME <?php echo $_SESSION['username'];?></h2>
<iframe src="1.php?num=<?php echo $ran;?>" name="quespage" width="65%" height="70%"></iframe>


<p id="quetxt">
<div id="bb" style="position:fixed; top:590px; left:380px">
<form id="form1" action="1.php" target="quespage" method="post">
      
</form>
	</div>

<script >
function ask()
{
 var r=window.confirm("DO YOU REALLY WANT TO END YOUR TEST?")
 if(r==true)
  return true;
 else
  return false;
}

var x,y,p,k,r
var arr=[]
var j,k
var z,w,l
 x= "<?php echo $ran; ?>";
 l=x+29;
var i

y=document.getElementById('ques')
for(i=1;i<=30;i++)
{
arr[i]=x
y.elements[i-1].value=x
x++

}


function change(j)
{
 
 
p=document.getElementById('form1')
k=arr[j]-1
if(k<=0)
{
k=200
}

p.elements[0].value=k
r=arr[j]+1
if(r>200)
{
r=1
}

p.elements[1].value=r
z=j-1
if(z<=0)
z=30
w=j+1
if(w>30)
w=1

}


 
 function change1()
 {
 
y=document.getElementById('form1')

r=arr[z]
y.elements[0].value=r
k=arr[w]

y.elements[1].value=k
w=z+1
if(w>30)
w=1
z=z-1
if(z<=0)
z=30
}
 function change2()
 {
 
y=document.getElementById('form1')


k=arr[z]

y.elements[0].value=k
r=arr[w]
y.elements[1].value=r
z=w-1
if(z<=0)
z=30
w=w+1
if(w>30)
w=1
}

function redirect()
{

window.location="check.php";
} 




var sec=60;
var min=19;
var count="";
var s;
var m;
function stopwatch()
{   

   count=getcookie();   

   if(count=="")
   {
   sec=60;
   min=19;
   }
   else
   {
     s=count.substring(5,7);
	 m=count.substring(0,2);
    sec=parseInt(s);
    min=parseInt(m);
   }

   updatecount();

	  
   window.setTimeout("stopwatch()", 1000);
}
function getcookie()
{ 
         
   var name ="count=";

   var ca = document.cookie.split(';');

   for(var i=0; i<ca.length; i++) 
  {
	var c = ca[i].trim();
   
	 if (c.indexOf(name)==0)
      {	
	    return c.substring(name.length,c.length);  
      }	 
 } 

return "";
}
function updatecount()
{
   sec--;
     if(sec==0) 
     {
        sec=60;    
	    min=min-1;
     } 
      else
      min=min;   
	  if(sec<=9)
      {         
	   count=((min<=9) ? "0" + min : min) + " : 0" + sec;
       }
	   else
	   {	
         count=( ( min <= 9) ? "0" + min : min) + " : " + sec;  
		   	 
		} 
  
  
	
 setcookie("count",count,1);
 	
  var stwa=document.getElementById('stwa');
 
  stwa.value=count;

  if(min<0)
  {

    setcookie("count","",-1);
   
    window.location="check.php";
  }
 
}
function setcookie(cname,cvalue,exdays)
{
   var d = new Date();
     d.setTime(d.getTime()+(exdays*24*60*60*1000));
     var expires = "expires="+d.toGMTString();
     document.cookie = cname + "=" + cvalue + "; " + expires;

	 }

</script>




 </BODY>
</HTML>