<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
<html> 
<head> 
<title>SLC Registration</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
</head> 
 
<body bgcolor="#FFFFFF" text="#494949" link="#0a57bf" vlink="#0a57bf" alink="#FF
0000">
<?php
session_start();
$school_number=$_SESSION['school_number'];

if ($school_number) {  include ('index-text.php'); }



	else 



	{header("Location: /new/error.php"); }

?>




</body> 
</html>
