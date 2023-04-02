<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>SLC Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#FF0000">
<?php 
session_start();
$school_number=$_SESSION['school_number'];

if (isset($school_number)) {  include ('schoolinfo-text.php'); }



	else 



	{header("Location: /new/error.php"); }
?>
</body>
</html>
