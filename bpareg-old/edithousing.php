<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style><body text="#000000" link="#FF0000" vlink="#FF0000">
<?php 

$school_number=$_GET['school_number'];
$room_id=$_GET['room_id'];
?>


  
<?php


$con = mysql_connect('server','username','password');
$db = mysql_select_db('database', $con);


$sql = "SELECT * FROM housing WHERE room_id = '$room_id' AND school_number='$school_number'";

$query = mysql_query($sql) or die(mysql_error());
$housing = mysql_fetch_array($query);

echo "
<html>
<head>
<title>SLC Registration</title></font>
</head>
<body>

<font face=\"Arial, Helvetica, sans-serif\"><h1>Editing Housing Information</h1></font>
<form method=\"post\" action=\"proc_edithousing.php\">
<table>
<tr><td>Advisor/Student Room: </td><td>
<select name=\"a_s\"> <option value=\"$housing[a_s]\" selected=\"selected\">$housing[a_s]</option>
<option value=\"A\">A</option>
<option value=\"S\">S</option>

 </td><td>Select A if an advisor(s) will be in the room. Select S if only students will be in the room.</td></tr>
<tr><td>Gender: </td><td> <select name=\"gender\"> <option value=\"$housing[gender]\" selected=\"selected\">$housing[gender]</option>
<option value=\"M\">M</option>
<option value=\"F\">F</option>
<option value=\"M/F\">M/F</option>
</td><td>Select M if males will be staying in the room. Select F if females will be staying in the room. The M/F option is only available for advisor rooms.</td></tr>
<tr><td>Room Type: </td><td><select name=\"type\"> <option value=\"$housing[type]\" selected=\"selected\">$housing[type]</option>
<option value=\"S\">S</option>
<option value=\"D\">D</option>
<option value=\"T\">T</option>
<option value=\"Q\">Q</option>
<td>Select Q for quad, T for triple, D for double, or S for single.</td></tr>
<tr><td>Occupant ID #1: </td><td><input type=\"text\" name=\"occ_id1\" value=\"$housing[occ_id1]\"></td></tr>
<tr><td>Occupant ID #2: </td><td><input type=\"text\" name=\"occ_id2\" value=\"$housing[occ_id2]\"></td></tr>
<tr><td>Occupant ID #3: </td><td><input type=\"text\" name=\"occ_id3\" value=\"$housing[occ_id3]\"></td></tr>
<tr><td>Occupant ID #4: </td><td><input type=\"text\" name=\"occ_id4\" value=\"$housing[occ_id4]\"></td></tr>


<input type=\"hidden\" name=\"school_number\" value=\"$school_number\">
<input type=\"hidden\" name=\"room_id\" value=\"$room_id\">
<input type=\"submit\" value=\"Save Changes\">
";

?>
