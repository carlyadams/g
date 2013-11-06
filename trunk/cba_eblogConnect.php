<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>cba_eblogConnect</title>
</head>

<body>
<?php 
//ob
ob_start();

//session
session_start();

//connect to database
$error = "Problem connecting";
$host="cbapro.biz"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="cbaprobi_members"; // Database name 
$tbl_name="members"; // Table name 



// Connect to server and select databse.
 mysql_connect("$host", "$username", "$password") or die("cannot connect"); 
 mysql_select_db("$db_name")or die("$error");
 ?>
</body>

</html>
