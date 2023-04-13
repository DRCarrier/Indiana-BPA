<?php
session_start();
$school_number=$_SESSION['school_number'];
$completed=$_POST['completed'];
$advisors=$_POST['advisors'];
$students=$_POST['students'];
$chaperones=$_POST['chaperones'];

//Connection to DB using PDO:
$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";
$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "UPDATE SLCschl SET completed='$completed', advisors='$advisors', chaperones='$chaperones', students='$students', FinalizeDate=NOW() WHERE school_number='$school_number'"; 

$query = $con->query($sql) or die($con->errorInfo());

header ("Location: /new/index-text-main.php?school_number=$school_number");

?>
