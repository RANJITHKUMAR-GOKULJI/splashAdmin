<?php
mysql_connect("Server", "root", "Gen") or die("Couldn't select database.");
mysql_select_db("generator") or die("Couldn't select database.");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password' ";
$result = mysql_query($sql) or die(mysql_error());
$numrows = mysql_num_rows($result);
if($numrows > 0)
   {
    echo 'Your in';
   }
else
   {
    echo 'Your not in';
   }
   ?>
