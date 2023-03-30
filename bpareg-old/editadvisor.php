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
$adv_id=$_GET['adv_id'];
?>


  
<?php


$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";

$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$sql = "SELECT * FROM SLCadv WHERE adv_id = '$adv_id' AND school_number='$school_number'";

$query = $con->query($sql) or die($con->errorInfo());
$advisor = $query->fetch(PDO::FETCH_BOTH);

echo "
<html>
<head>
<title>SLC Registration</title></font>
</head>
<body>

<font face=\"Arial, Helvetica, sans-serif\"><h1>Editing $advisor[fname] $advisor[lname]</h1></font>
<form method=\"post\" action=\"proc_editadvisor.php\">

<table>
<tr><td>First Name: </td><td> <input type=\"text\" name=\"fname\" value=\"$advisor[fname]\"></td></tr>
<tr><td>Last Name: </td><td> <input type=\"text\" name=\"lname\" value=\"$advisor[lname]\"></td></tr>
<tr><td>School Phone: </td><td><input type=\"text\" name=\"sphone\" value=\"$advisor[sphone]\"></td></tr>
<tr><td>Cell Phone: </td><td> <input type=\"text\" name=\"cell\" value=\"$advisor[cell]\"></td></tr>
<tr><td>Email: </td><td><input type=\"text\" name=\"email\" value=\"$advisor[email]\"></td></tr>
<tr><td>Shirt Size (select s, m, l, xl, xxl, or xxl): </td><td><select name=\"size\"> <option value=\"$advisor[size]\" selected=\"selected\">$advisor[size]</option>

<option value=\"S\">S</option>
<option value=\"M\">M</option>
<option value=\"L\">L</option>
<option value=\"XL\">XL</option>
<option value=\"XXL\">XXL</option>
<option value=\"XXXL\">XXXL</option>
<option value=\"\">None</option>
</td></tr>
<tr><td>Advisor or Chaperone (select A or C): </td><td><select name=\"a_c\"> <option value=\"$advisor[a_c]\" selected=\"selected\">$advisor[a_c]</option>
<option value=\"A\">A</option>
<option value=\"C\">C</option>
</td></tr>
<tr><td>Chaperone Assignment: </td><td> <input type=\"checkbox\" name=\"ChapAssign\" value=\"y\""; if ($advisor[ChapAssign]) { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Same Assignment as Last Year: </td><td> <input type=\"checkbox\" name=\"SameAssignment\" value=\"y\""; if ($advisor[SameAssignment]) { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Comment: </td><td><input type=\"text\" name=\"AssignmentComment\" value=\"$advisor[AssignmentComment]\"></td></tr>

</table>
<input type=\"hidden\" name=\"school_number\" value=\"$school_number\">
<input type=\"hidden\" name=\"adv_id\" value=\"$adv_id\">
<input type=\"submit\" value=\"Save Changes\">
";

 ?>
