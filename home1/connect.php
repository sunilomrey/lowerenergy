<?php
#starting session
@session_start();
error_reporting(0);
//setting up connection to database

$server="127.0.0.1";
$username="root";
$password="Paras123!@#";
$db_name="project";
$db=mysql_connect($server,$username,$password) or die("Connection to database failed, perhaps the service is down!");
mysql_select_db($db_name) or die("Database name is not available");
?>
