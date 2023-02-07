<?php
$school_number=$_POST['school_number'];
$id_num=$_POST['id_num'];
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
$merit=$_POST['merit'];
$finished=$_POST['finished'];
$addanother=$_POST['addanother'];

$con = mysql_connect('server','username','password');
$db = mysql_select_db('database', $con);

$sql = "INSERT INTO students (`id_num`, `school_number`, `fname`, `lname`, `cont1`, `cont2`, `size`, `officer`, `officer_candidate`, `vdelegate`, `torch`, `opens`, `merit`, `RegDate`, `UpdateDate`) VALUES ('$id_num', '$school_number', '$fname', '$lname', '$cont1', '$cont2', '$size', '$officer', '$officer_candidate', '$vdelegate', '$torch', '$opens', '$merit', NOW(), NOW());";

$query = mysql_query($sql) or die(mysql_error());

if ($finished) { header("Location: /SLCReg/index.php?school_number=$school_number"); }
if ($addanother) { header("Location: /SLCReg/students.php?school_number=$school_number"); }

?>
