<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>SLC Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php 
session_start();
$school_number=$_SESSION['school_number'];

if (isset($school_number)) {  include ('housing-text.php'); }



	else 



	{header("Location: /new/error.php"); }

?>
</body>
</html>
