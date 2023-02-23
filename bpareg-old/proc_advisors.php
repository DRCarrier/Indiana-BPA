<?php
// enters school #, first and last name, phone, email, size, a or c, connects with database

$school_number = $_POST['school_number'] ?? '';
$fname=$_POST['fname'] ?? '';
$lname=$_POST['lname'];
$sphone=$_POST['sphone'];
$cell=$_POST['cell'];
$email=$_POST['email'];
$size=$_POST['size'];
$a_c=$_POST['a_c'];
$ChapAssign=$_POST['ChapAssign'];
$SameAssignment=$_POST['SameAssignment'];
$AssignmentComment=$_POST['AssignmentComment'];
$finished=$_POST['finished'];
$addanother=$_POST['addanother'];

//$con = mysql_connect('server','username','password');
//$db = mysql_select_db('database', $con);
$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";
 
$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "INSERT INTO SLCadv (`school_number`, `fname`, `lname`, `sphone`, `cell`, `email`, `size`, `a_c`, `ChapAssign`, `SameAssignment`, `AssignmentComment`, `RegDate`, `UpdateDate`) VALUES ('$school_number', '$fname', '$lname', '$sphone', '$cell', '$email', '$size', '$a_c', '$ChapAssign', '$SameAssignment', '$AssignmentComment', NOW(), NOW());";

//$query = mysql_query($sql) or die(mysql_error());
$query = $con->query($sql) or die($con->errorInfo());
if ($finished) { header("Location: /SLCReg/index.php?school_number=$school_number"); }
if ($addanother) { header("Location: /SLCReg/advisors.php?school_number=$school_number"); }

?>
