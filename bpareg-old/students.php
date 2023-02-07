<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>SLC Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #FFF;
}
-->
</style></head>
<?php

$school_number=$_GET['school_number'];

if ($school_number) {  include ('students-text.php'); }



	else 



	{header("Location: /SLCReg/error.php"); }

?>

</body>
</html>
