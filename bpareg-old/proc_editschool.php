<?php
session_start();
$school_number=$_SESSION['school_number'];
$address=$_POST['address'];
$city=$_POST['city'];
$zip=$_POST['zip'];

$envact=$_POST['envact'];
$community=$_POST['community'];
$olympics=$_POST['olympics'];
$social=$_POST['social'];
$member=$_POST['member'];
$safety=$_POST['safety'];
$service=$_POST['service'];
$marketing=$_POST['marketing'];
$quality=$_POST['quality'];
$accommodations=$_POST['accommodations'];

/* Removed variables:
$arrive=$_POST['arrive'];
$depart=$_POST['depart'];
$overflowSH=$_POST['overflowSH'];
$chact=$_POST['chact'];
$other_recog=$_POST['other_recog'];
*/

//Connection to DB using PDO:
$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";
 
$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "UPDATE SLCschl SET address='$address', city='$city', zip='$zip',  envact='$envact', community='$community', olympics='$olympics', safety='$safety',  service='$service', member='$member', quality='$quality', social='$social', marketing='$marketing', accommodations='$accommodations', UpdateDate=NOW() WHERE school_number='$school_number'"; 

/* Removed variables from query:
arrive='$arrive'
depart='$depart'
overflowSH='$overflowSH'
chact='$chact'
other_recog='$other_recog'
*/

query = $con->query($sql) or die($con->errorInfo());

header ("Location: /new/index-text-main.php?school_number=$school_number");

?>
