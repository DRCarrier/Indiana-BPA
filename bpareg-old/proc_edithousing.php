<?php
//let syou edit housing info (connects to database)
session_start();
$room_id=$_POST['room_id'];
$school_number=$_SESSION['school_number'];
$a_s=$_POST['a_s'];
$gender=$_POST['gender'];
$type=$_POST['type'];
$occ_id1=$_POST['occ_id1'];
$occ_id2=$_POST['occ_id2'];
$occ_id3=$_POST['occ_id3'];
$occ_id4=$_POST['occ_id4'];


header ("Location: /new/housinglist.php?school_number=$school_number");
echo "<input type=\"hidden\" name=\"school_number\" value=\"$school_number\">";


//Connection to DB using PDO:
$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";
$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "UPDATE housing SET a_s='$a_s', gender='$gender', type='$type', occ_id1='$occ_id1', occ_id2='$occ_id2', occ_id3='$occ_id3', occ_id4='$occ_id4' WHERE room_id = '$room_id'";

$query = $con->query($sql) or die($con->errorInfo());



?>
