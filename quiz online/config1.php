<?php
$database = "quest2k1_4cse";  // the name of the database.

$server = "localhost";  // server to connect to.

$db_user = "quest2k1_4cse";  // mysql username to access the database with.

$db_pass = "quest2k14";  // mysql password to access the database with.

$table = "quizusers";    // the table that this script will set up and use.

$link1 = mysql_connect($server, $db_user, $db_pass);
mysql_select_db($database,$link1);
?>