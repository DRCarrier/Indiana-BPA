<?php
session_start();
$id_num=$_POST['id_num'];
$school_number=$_SESSION['school_number'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$cont1=$_POST['cont1'];
$cont2=$_POST['cont2'];
$size=$_POST['size'];
$officer=$_POST['officer'];
$officer_candidate=$_POST['officer_candidate'];
$vdelegate=$_POST['vdelegate'];
$torch=$_POST['torch'];  
$opens=$_POST['opens']; 
$torch=$_POST['torch'];

/*Removed unused variables:
$merit=$_POST['merit'];
*/


header ("Location: /new/studentlist.php?school_number=$school_number");
echo "<input type=\"hidden\" name=\"school_number\" value=\"$school_number\">";

//Connection to DB using PDO:
$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";
 
$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "UPDATE students SET fname='$fname', lname='$lname', cont1='$cont1', cont2='$cont2', size='$size', officer='$officer', officer_candidate='$officer_candidate', vdelegate='$vdelegate', torch='$torch', opens='$opens', UpdateDate=NOW() WHERE id_num = '$id_num'";

/*Removed unused variables from query:
merit='$merit',
*/

$query = $con->query($sql) or die($con->errorInfo());


?>
