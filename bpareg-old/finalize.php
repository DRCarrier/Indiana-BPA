<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style>
<title>SLC Registration</title>
<body text="#000000" link="#FF0000" vlink="#FF0000">
<?php 
$school_number=$_GET['school_number'];

if ($school_number) {  include ('finalize-text.php'); }



	else 



	{header("Location: /SLCReg/error.php"); }

?>
