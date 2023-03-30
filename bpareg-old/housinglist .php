<?php
session_start();
print_r($_SESSION);
$school_number=$_SESSION['school_number']; 
$delete = isset($_GET['delete']) ? true : false;
$room_id = isset($_GET['room_id']) ? $_GET['room_id'] : 0;

 

//Connection to DB using PDO:
$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";
$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($delete && $room_id > 0) {
$con->query("delete from housing where room_id='$room_id'");
}

$sql = "SELECT school_name FROM schools WHERE school_number = '$school_number'";
$result = $con->query($sql) or die($con->errorInfo());
$temp = $result->fetch(PDO::FETCH_ASSOC);
$school_name = $temp['school_name'];

$sql = "SELECT * FROM housing WHERE school_number = '$school_number'";
$result = $con->query($sql) or die($con->errorInfo());
$housing = $result->fetch(PDO::FETCH_BOTH);

$housing_block = "<table border=\"1\">";
$housing_block .= "<td>Room ID Number</td>";
$housing_block .= "<td>Advisor/Student Room</td>";
$housing_block .= "<td>Gender</td>";
$housing_block .= "<td>Room Type</td>";
$housing_block .= "<td>Occupant ID #1</td>";
$housing_block .= "<td>Occupant ID #2</td>";
$housing_block .= "<td>Occupant ID #3</td>";
$housing_block .= "<td>Occupant ID #4</td>";
$housing_block .= "<td>Delete</td>";
$housing_block .= "</tr>";


while ($housing) {

$housing_block .= "<tr>";
$housing_block .= "<td><a href=\"/SLCReg/edithousing.php?room_id=$housing[room_id] & school_number=$housing[school_number]\">$housing[room_id]</a></td>";
$housing_block .= "<td>$housing[a_s]</td>";
$housing_block .= "<td>$housing[gender]</td>";
$housing_block .= "<td>$housing[type]</td>";
$housing_block .= "<td>$housing[occ_id1]</td>";
$housing_block .= "<td>$housing[occ_id2]</td>";
$housing_block .= "<td>$housing[occ_id3]</td>";
$housing_block .= "<td>$housing[occ_id4]</td>";
$housing_block .= "<td><a href=\"housinglist.php?school_number=$school_number&room_id=$housing[room_id]&delete=1\">Delete?</a></td>";
$housing_block .= "</tr>";

 //$housing = mysql_fetch_array($result);
$housing = $results->fetch(PDO::FETCH_BOTH);
}


$housing_block .= "</table>";

?>

<html>
<head>
<title>SLC Registration</title>
</head>
<body>
<h1><font face="Arial, Helvetica, sans-serif">BPA SLC 2020 Housing List</font></h1>
<font face="Arial, Helvetica, sans-serif">
<p><strong><font size="-1">Note: </font></strong><font size="-1">In the table below, the Room ID Number has been automatically assigned and cannot be changed. These ID numbers will not begin with 1 and may not be in sequence.</font></p></font>
<h2><?php echo "<font face=\"Arial, Helvetica, sans-serif\">$school_name - $school_number </font>"; ?>
<?php echo "$housing_block"; ?>
<br>
<a href="/new/index-text-main.php<?php echo "?school_number=$school_number"; ?>">Home</a>
</body>
</html>
