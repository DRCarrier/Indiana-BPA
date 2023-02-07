<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style>
<title>SLC Registration</title>
<body text="#000000" link="#FF0000" vlink="#FF0000">
<? 
$school_number=$_GET['school_number'];

?>

<?

$con = mysql_connect('server','username','password');
$db = mysql_select_db('database', $con);

$sql = "SELECT * FROM SLCschl WHERE school_number = '$school_number'";

$query = mysql_query($sql) or die(mysql_error());
$school = mysql_fetch_array($query);

 echo "
<html>
<body>
<font face=\"Arial, Helvetica, sans-serif\"><h1>Finalize Registration for School #$school[school_number]</font></h1>
<form method=\"post\" action=\"proc_finalize.php\">
<table>
<tr><td>Registration is Complete: </td><td> <input type=\"checkbox\" name=\"completed\" value=\"y\""; if ($school[completed]) { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Number of Students Registered: </td> <td><input type=\"text\" name=\"students\" value=\"$school[students]\"></td></tr> 
<tr><td>Number of Advisors Registered: </td><td><input type=\"text\" name=\"advisors\" value=\"$school[advisors]\"></td></tr>
<tr><td>Number of Chaperones Registered: </td><td><input type=\"text\" name=\"chaperones\" value=\"$school[chaperones]\"></td></tr>
</table>
<input type=\"hidden\" name=\"school_number\" value=\"$school_number\">
<input type=\"hidden\" name=\"id_num\" value=\"$id_num\">
<input type=\"submit\" value=\"Finalize Registration\">
";  

?>

