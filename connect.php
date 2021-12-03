<?php
$hostname="aa1c9zufc36r35e.c2u0hj6ejqek.us-east-1.rds.amazonaws.com"; //local server name default localhost
$username="prateek";  //mysql username default is root.
$password="prateek123";       //blank if no password is set for mysql.
$database="aa1c9zufc36r35e";  //database name which you created
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);
?>
