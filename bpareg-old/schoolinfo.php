<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>SLC Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#FF0000">
<?php 

$school_number=$_GET['school_number'];

if ($school_number) {  include ('schoolinfo-text.php'); }



	else 



	{header("Location: /SLCReg/error.php"); }
?>
</body>
</html>
