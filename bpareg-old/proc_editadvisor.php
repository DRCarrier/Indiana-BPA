
<?php //lets you edit an advisor
session_start();
$adv_id=$_POST['adv_id'];
$school_number=$_SESSION['school_number'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$sphone=$_POST['sphone'];
$cell=$_POST['cell'];
$email=$_POST['email'];
$size=$_POST['size'];
$a_c=$_POST['a_c'];
$ChapAssign=$_POST['ChapAssign'];
$SameAssignment=$_POST['SameAssignment'];
$AssignmentComment=$_POST['AssignmentComment'];


header ("Location: /new/advisorlist.php?school_number=$school_number");
echo "<input type=\"hidden\" name=\"school_number\" value=\"$school_number\">";

//Connection to DB using PDO:
$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";
$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "UPDATE SLCadv SET fname='$fname', lname='$lname', sphone='$sphone', cell='$cell', email='$email', size='$size', a_c='$a_c', ChapAssign='$ChapAssign', SameAssignment='$SameAssignment', AssignmentComment='$AssignmentComment', UpdateDate=NOW() WHERE adv_id = '$adv_id)'";

$query = $con->query($sql) or die($con->errorInfo());


?>
