<?php

$school_number=$_SESSION['school_number'];
$a_s=$_POST['a_s'];
$gender=$_POST['gender'];
$type=$_POST['type'];
$occ_id1=$_POST['occ_id1'];
$occ_id2=$_POST['occ_id2'];
$occ_id3=$_POST['occ_id3'];
$occ_id4=$_POST['occ_id4'];
$finished=$_POST['finished'];
$addanother=$_POST['addanother'];

$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";

$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "INSERT INTO housing (`school_number`, `a_s`, `gender`, `type`, `occ_id1`, `occ_id2`, `occ_id3`, `occ_id4`) VALUES ('$school_number', '$a_s', '$gender', '$type', '$occ_id1', '$occ_id2', '$occ_id3', '$occ_id4');";

$query = $con->query($sql) or die($con->errorInfo());

if ($finished) { header("Location: /new/index-text-main.php?school_number=$school_number"); }
if ($addanother) { header("Location: /new/housing.php?school_number=$school_number"); }

?>
