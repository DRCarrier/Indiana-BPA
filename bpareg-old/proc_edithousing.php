//let syou edit housing info (connects to database)
<?php
$room_id=$_POST['room_id'];
$school_number=$_POST['school_number'];
$a_s=$_POST['a_s'];
$gender=$_POST['gender'];
$type=$_POST['type'];
$occ_id1=$_POST['occ_id1'];
$occ_id2=$_POST['occ_id2'];
$occ_id3=$_POST['occ_id3'];
$occ_id4=$_POST['occ_id4'];


header ("Location: /SLCReg/housinglist.php?school_number=$school_number");
echo "<input type=\"hidden\" name=\"school_number\" value=\"$school_number\">";


//$con = mysql_connect('server','username','password');
//$db = mysql_select_db('database', $con);
$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";
 
$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "UPDATE housing SET a_s='$a_s', gender='$gender', type='$type', occ_id1='$occ_id1', occ_id2='$occ_id2', occ_id3='$occ_id3', occ_id4='$occ_id4' WHERE room_id = '$room_id'";

//$query = mysql_query($sql) or die(mysql_error());
$query = $con->query($sql) or die($con->errorInfo());



?>
