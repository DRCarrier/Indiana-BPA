<?php
$school_number=$_POST['school_number'];
$completed=$_POST['completed'];
$advisors=$_POST['advisors'];
$students=$_POST['students'];
$chaperones=$_POST['chaperones'];


//$con = mysql_connect('server','username','password');
//$db = mysql_select_db('database', $con);
$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";
 
$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "UPDATE SLCschl SET completed='$completed', advisors='$advisors', chaperones='$chaperones', students='$students', FinalizeDate=NOW() WHERE school_number='$school_number'"; 

//$query = mysql_query($sql) or die(mysql_error());
$query = $con->query($sql) or die($con->errorInfo());

header ("Location: /SLCReg/index.php?school_number=$school_number");

?>
