<?php
session_start();
$school_number = $_SESSION['school_number'];
$delete = isset($_GET['delete']) ? true : false;
$id_num = isset($_GET['id_num']) ? $_GET['id_num'] : 0;

//Connection to DB with PDO:
$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";

$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($delete && $id_num > 0) {
	$con->query("delete from students where id_num='$id_num'");
	
}


$sql = "SELECT school_name FROM schools WHERE school_number = '$school_number'";
$result = $con->query($sql) or die($con->errorInfo());
$temp = $result->fetch(PDO::FETCH_BOTH);
$school_name = $temp['school_name'];

$sql = "SELECT * FROM students WHERE school_number = '$school_number'";
$result = $con->query($sql) or die($con->errorInfo());
$student = $result->fetch(PDO::FETCH_BOTH);

$student_block = "<table border=\"1\">";
$student_block .= "<td>ID Number</td>";
$student_block .= "<td>First Name</td>";
$student_block .= "<td>Last Name</td>";
$student_block .= "<td>Gender</td>";
$student_block .= "<td>Contest 1</td>";
$student_block .= "<td>Contest 2</td>";
$student_block .= "<td>Shirt Size</td>";
$student_block .= "<td>Current State</br>Officer</td>";
$student_block .= "<td>Officer</br>Candidate</td>";
$student_block .= "<td>Voting</br>Delegate</td>";
$student_block .= "<td>Torch</br>Awards</td>";
$student_block .= "<td>Open Contests</br>Only</td>";
//$student_block .= "<td>Merit</br>Scholar</td>";
$student_block .= "<td>Delete</td>";
$student_block .= "</tr>";

while ($student) {

	$student_block .= "<tr>";
	$student_block .= "<td><a href=\"editstudent.php?id_num=$student[id_num]&school_number=$student[school_number]\">$student[id_num]</a></td>";
	$student_block .= "<td>$student[fname]</td>";
	$student_block .= "<td>$student[lname]</td>";
	$student_block .= "<td>$student[gender]</td>";
	$student_block .= "<td>$student[cont1]</td>";
	$student_block .= "<td>$student[cont2]</td>";
	$student_block .= "<td>$student[size]</td>";
	$student_block .= "<td>$student[officer]</td>";
	$student_block .= "<td>$student[officer_candidate]</td>";
	$student_block .= "<td>$student[vdelegate]</td>";
	$student_block .= "<td>$student[torch]</td>";
	$student_block .= "<td>$student[opens]</td>";
	//$student_block .= "<td>$student[merit]</td>";
	$student_block .= "<td><a href=\"studentlist.php?school_number=$school_number&id_num=$student[id_num]&delete=1\">Delete?</a></td>";
	$student_block .= "</tr>";

	$student = $result->fetch(PDO::FETCH_BOTH);

}

$student_block .= "</table>";

?>

<html>
<head>
<title>SLC Registration</title>
</head>
<body>
<h1><font face="Arial, Helvetica, sans-serif">BPA SLC 2020 Student List</font></h1>
<h2><?php echo "<font face=\"Arial, Helvetica, sans-serif\">$school_name - $school_number </font>"; ?>
<br><br>
<?php echo "$student_block"; ?>
<br>
<a href="/new/index-text-main.php<?php echo "?school_number=$school_number"; ?>">Home</a>
</body>
</html>
