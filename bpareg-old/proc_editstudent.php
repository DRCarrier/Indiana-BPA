<?php
$id_num=$_POST['id_num'];
$school_number=$_POST['school_number'];
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
$merit=$_POST['merit'];

header ("Location: /SLCReg/studentlist.php?school_number=$school_number");
echo "<input type=\"hidden\" name=\"school_number\" value=\"$school_number\">";


//$con = mysql_connect('server','username','password');
//$db = mysql_select_db('database', $con);
$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";
 
$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "UPDATE students SET fname='$fname', lname='$lname', cont1='$cont1', cont2='$cont2', size='$size', officer='$officer', officer_candidate='$officer_candidate', vdelegate='$vdelegate', torch='$torch', opens='$opens', merit='$merit', UpdateDate=NOW() WHERE id_num = '$id_num'";

//$query = mysql_query($sql) or die(mysql_error());
$query = $con->query($sql) or die($con->errorInfo());


?>
