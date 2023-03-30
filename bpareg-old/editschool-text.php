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
session_start();
$school_number=$_SESSION['school_number'];

?>


<?php
//Connection to DB using PDO:
$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";

$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM SLCschl WHERE school_number = '$school_number'";

$query = $con->query($sql) or die($con->errorInfo());
$school = $query->fetch(PDO::FETCH_BOTH);

 echo "
<html>
<body>
<font face=\"Arial, Helvetica, sans-serif\"><h1>Editing School Information - $school[school_number]</font></h1>
<form method=\"post\" action=\"proc_editschool.php\">
<table>
<tr><td>Address: </td> <td><input type=\"text\" name=\"address\" value=\"$school[address]\"></td></tr> 
<tr><td>City: </td><td><input type=\"text\" name=\"city\" value=\"$school[city]\"></td></tr>
<tr><td>Zip: </td><td><input type=\"text\" name=\"zip\" value=\"$school[zip]\"></td></tr>
\n
<tr><td>Environmental Action/Awareness: </td><td> <input type=\"checkbox\" name=\"envact\" value=\"y\""; if ($school[envact]) { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Safety Awareness Award: </td><td> <input type=\"checkbox\" name=\"safety\" value=\"y\""; if ($school[safety]) { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Community Service Award: </td><td> <input type=\"checkbox\" name=\"community\" value=\"y\""; if ($school[community]) { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Special Olympics Award: </td><td> <input type=\"checkbox\" name=\"olympics\" value=\"y\""; if ($school[olympics]) { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Service Learning Award Individual: </td><td> <input type=\"checkbox\" name=\"service\" value=\"y\""; if ($school[service]) { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Member Recruiter Award: </td><td> <input type=\"checkbox\" name=\"member\" value=\"y\""; if ($school[member]) { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Quality Chapter Distinction: </td><td> <input type=\"checkbox\" name=\"quality\" value=\"y\""; if ($school[quality]) { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Social Media Award: </td><td> <input type=\"checkbox\" name=\"social\" value=\"y\""; if ($school[social]) { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Marketing & Public Relations Award: </td><td> <input type=\"checkbox\" name=\"marketing\" value=\"y\""; if ($school[marketing]) { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Accommodations: </td><td> <input type=\"text\" name=\"accommodations\" value=\"$school[accommodations]\"></td></tr>
</table>
<input type=\"hidden\" name=\"school_number\" value=\"$school_number\">
<input type=\"hidden\" name=\"id_num\" value=\"$id_num\">
<input type=\"submit\" value=\"Save Changes\">
";  
	
/*
Removed unused variables:
<tr><td>Arrival Time on Sunday: </td><td><input type=\"text\" name=\"arrive\" value=\"$school[arrive]\"></td></tr> 
<tr><td>Departure Time on Tuesday: </td><td> <input type=\"text\" name=\"depart\" value=\"$school[depart]\"></td></tr>
<tr><td>Overflow Housing at Spring Hill Suites: </td><td> <input type=\"checkbox\" name=\"overflowSH\" value=\"y\""; if ($school[overflowSH]) { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Chapter Activities Award of Excellence: </td><td><input type=\"checkbox\" name=\"chact\" value=\"y\""; if ($school[chact]) { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Other: </td><td><input type=\"text\" name=\"other_recog\" value=\"$school[other_recog]\"></td></tr>
*/
?>
