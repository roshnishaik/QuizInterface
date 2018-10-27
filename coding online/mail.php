<?php
 
   if (!isset($_POST["submit"]))
    { 
      header("Location:http://www.quest2k14.com/coding/feed.html");
    }
     else
     {
      $from =$_POST['user']; // sender
      $subject ="CODING FEEDBACK";
      $message = $_POST["message"];
      // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message, 70);
      // send mail
      mail("feedback.quest@gmail.com",$subject,$message,"From: $from\n");
      echo '<script>window.location="thnk.html"</script>';
     }
    ?>