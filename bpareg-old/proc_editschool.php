<?php
$school_number=$_POST['school_number'];
$address=$_POST['address'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$arrive=$_POST['arrive'];
$depart=$_POST['depart'];

$overflowSH=$_POST['overflowSH'];
$envact=$_POST['envact'];
$community=$_POST['community'];
$olympics=$_POST['olympics'];
$social=$_POST['social'];
$member=$_POST['member'];
$safety=$_POST['safety'];
$chact=$_POST['chact'];
$service=$_POST['service'];
$marketing=$_POST['marketing'];
$quality=$_POST['quality'];
$other_recog=$_POST['other_recog'];
$accommodations=$_POST['accommodations'];

$con = mysql_connect('server','username','password');
$db = mysql_select_db('database', $con);

$sql = "UPDATE SLCschl SET address='$address', city='$city', zip='$zip', arrive='$arrive', depart='$depart',  overflowSH='$overflowSH', envact='$envact', community='$community', olympics='$olympics', safety='$safety', chact='$chact', service='$service', member='$member', quality='$quality', social='$social', marketing='$marketing', other_recog='$other_recog', accommodations='$accommodations', UpdateDate=NOW() WHERE school_number='$school_number'"; 

$query = mysql_query($sql) or die(mysql_error());

header ("Location: /SLCReg/index.php?school_number=$school_number");

?>
