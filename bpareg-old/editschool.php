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

$school_number=$_SESSION["school_number"];

if (isset($school_number)) {  include ('editschool-text.php'); }



	else 



	{header("Location: /new/error.php"); }

?>
