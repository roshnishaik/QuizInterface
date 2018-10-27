<?php
      session_start();
      include("config1.php");
   if (!isset($_SESSION['username']))
    { 
      header("Location:http://www.quest2k14.com/coding/");
    }
     else
     { 
      $user=$_SESSION['username'];
      $pass=$_SESSION['password'];
      $To =$user; // sender
      $From="coding.quest2k14@gmail.com";
      $subject ="CODAGE LOGIN CREDENTIALS";
      $message = "THANK YOU FOR REGISTERING WITH CODAGE ONLINE ROUND 1
      
YOUR LOGIN CREDENTIALS ARE

USERNAME:     $user
PASSWORD:    $pass

TEST URL:        http://www.quest2k14.com/coding/ins.html

YOU CAN WRITE THE TEST BY CLICKING ON THE GIVEN LINK.

YOU CAN LOGIN AND WRITE THE TEST ANY TIME WITH THESE CREDENTIALS 

ALL THE BEST FROM CODAGE TEAM :)
";
      // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message, 70);
      // send mail
      mail($To,$subject,$message,"From: $From\n");
      echo '<p style="color:green;font-size:25px;align:center">SUCCESFULLY REGISTERED</p>';
      echo "<h3>A MAIL IS SENT TO YOU WITH LOGIN CREDENTILAS FOR WRITING THE TEST</h3>";
      
     }
     session_destroy();
?>