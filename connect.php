<?php
$hostname="aa15jyn89zhnxbt.c2u0hj6ejqek.us-east-1.rds.amazonaws.com"; //local server name default localhost
$username="prateek";  //mysql username default is root.
$password="prateek123";       //blank if no password is set for mysql.
$database="aa15jyn89zhnxbt";  //database name which you created
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);
?>
