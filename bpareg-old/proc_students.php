<?php
session_start();
$school_number=$_SESSION['school_number'];
$id_num=$_POST['id_num'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$cont1=$_POST['cont1'];
$cont2=$_POST['cont2'];
$size=$_POST['size'];
$officer=$_POST['officer'];
$officer_candidate=$_POST['officer_candidate'];
$vdelegate=$_POST['vdelegate'];
$torch=$_POST['torch'];
$opens=$_POST['opens'];
$merit=$_POST['merit'];
$finished=$_POST['finished'];
$addanother=$_POST['addanother'];

//Connection to DB using PDO:
$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";
$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "INSERT INTO students (`id_num`, `school_number`, `fname`, `lname`,`gender`, `region`, `cont1`, `cont2`, `size`, `officer`, `officer_candidate`, `vdelegate`, `torch`, `opens`, `merit`, `RegDate`, `UpdateDate`) VALUES ('$id_num', '$school_number', '$fname', '$lname', '$gender', ' ', '$cont1', '$cont2', '$size', '$officer', '$officer_candidate', '$vdelegate', '$torch', '$opens', '$merit', NOW(), NOW());";

$query = $con->query($sql) or die($con->errorInfo());

if ($finished) { header("Location: /new/index-text-main.php?school_number=$school_number"); }
if ($addanother) { header("Location: /new/students.php?school_number=$school_number"); }

?>
