<?php
$school_number = $_GET['school_number'];
$delete = isset($_GET['delete']) ? true : false;
$adv_id = isset($_GET['adv_id']) ? $_GET['adv_id'] : 0;


$con = mysql_connect('server','username','password');
$db = mysql_select_db('database', $con);

if ($delete && $adv_id > 0) {
	mysql_query("delete from SLCadv where adv_id=$adv_id");
	
}

$sql = "SELECT school_name FROM schools WHERE school_number = '$school_number'";
$result = mysql_query($sql) or die(mysql_error());
$temp = mysql_fetch_array($result);
$school_name = $temp['school_name'];

$sql = "SELECT * FROM SLCadv WHERE school_number = '$school_number'";
$result = mysql_query($sql) or die(mysql_error());
$advisor = mysql_fetch_array($result);

$advisor_block = "<table border=\"1\">";
$advisor_block .= "<td>ID Number</td>";
$advisor_block .= "<td>First Name</td>";
$advisor_block .= "<td>Last Name</td>";
$advisor_block .= "<td>Type</td>";
$advisor_block .= "<td>Shirt Size</td>";
$advisor_block .= "<td>School Phone</td>";
$advisor_block .= "<td>Cell Phone</td>";
$advisor_block .= "<td>Email</td>";
$advisor_block .= "<td>Chaperone</br>Assignment</td>";
$advisor_block .= "<td>Same</br>Assignment</td>";
$advisor_block .= "<td>Assignment</br>Comment</td>";
$advisor_block .= "<td>Delete</td>";
$advisor_block .= "</tr>";

while ($advisor) {

	$advisor_block .= "<tr>";
	$advisor_block .= "<td><a href=\"editadvisor.php?adv_id=$advisor[adv_id]&school_number=$advisor[school_number]\">$advisor[adv_id]</a></td>";
	$advisor_block .= "<td>$advisor[fname]</td>";
	$advisor_block .= "<td>$advisor[lname]</td>";
	if ($advisor['a_c'] == 'a' || $advisor['a_c'] == 'A') { $advisor_block .= "<td>Advisor</td>"; }
	if ($advisor['a_c'] == 'c' || $advisor['a_c'] == 'C') { $advisor_block .= "<td>Chaperone</td>"; }
	$advisor_block .= "<td>$advisor[size]</td>";
	$advisor_block .= "<td>$advisor[sphone]</td>";
	$advisor_block .= "<td>$advisor[cell]</td>";
	$advisor_block .= "<td>$advisor[email]</td>";
	$advisor_block .= "<td>$advisor[ChapAssign]</td>";
	$advisor_block .= "<td>$advisor[SameAssignment]</td>";
	$advisor_block .= "<td>$advisor[AssignmentComment]</td>";
	$advisor_block .= "<td><a href=\"advisorlist.php?school_number=$school_number&adv_id=$advisor[adv_id]&delete=1\">Delete?</a></td>";
	$advisor_block .= "</tr>";

	$advisor = mysql_fetch_array($result);

}

$advisor_block .= "</table>";

?>

<html>
<head>
<title>SLC Registration</title>
</head>
<body>
<h1><font face="Arial, Helvetica, sans-serif">BPA SLC 2020 Advisor List</font></h1>
<h2><?php echo "<font face=\"Arial, Helvetica, sans-serif\">$school_name - $school_number </font>"; ?>
<br><br>
<?php echo "$advisor_block"; ?>
<br>
<a href="/SLCReg/index.php<?php echo "?school_number=$school_number"; ?>">Home</a>
</body>
</html>