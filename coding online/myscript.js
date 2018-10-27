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
if(x>200)
x=1
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
var sec =60;  //declare global variable called sec and assign 0
var mins=19;  //declare global variable called mins and assign 0
function stopwatch()
{ //declare a function called stopwatch()


   sec--;  //keep adding '1' to the value of sec variable

  if (sec==0)
 {  //declare if block if sec is equal to '60'
   sec = 60;  //set the value of sec to '0'
   mins = mins - 1;   //add '1' to current value of mins
 }  //end of if block
 
 else
 {  //start of else block
   mins = mins;  //the value of mins remains same
 }  //end of else block
  
if (sec<=9)
 { //declare if block if sec is less than or equal to '9'
 sec = "0" + sec;   //here we add 0 in front of the number  eg: 01
 }  //end of if block
var stwa=document.getElementById('stwa'); //take the element by id called 'stwa' and store that in a variable called 'stwa'
stwa.value=  ((mins<=9) ? "0" + mins : mins) + " : " + sec;  //set the value in stwa text field  eg:00:02:01
SD=window.setTimeout("stopwatch();", 1000);
if(mins<0)
{
document.writeln("Thank you for attemting the test");
document.writeln("redirecting to main page");
setTimeout('redirect()',5000);
}
}