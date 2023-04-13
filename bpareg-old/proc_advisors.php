<?php
session_start();
$school_number = $_SESSION['school_number'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$sphone = $_POST['sphone'];
$cell = $_POST['cell'];
$email = $_POST['email'];
$size = $_POST['size'];
$a_c = $_POST['a_c'];
$ChapAssign = $_POST['ChapAssign'];
$SameAssignment = $_POST['SameAssignment'];
$AssignmentComment = $_POST['AssignmentComment'];
$finished = $_POST['finished'];
$addanother = $_POST['addanother'];


//Connection to DB using PDO:
$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";
$con = new PDO("mysql:host=$servername;dbname=bpareg", $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO SLCadv (`school_number`, `fname`, `lname`, `sphone`, `cell`, `email`, `size`, `a_c`, `ChapAssign`, `SameAssignment`, `AssignmentComment`, `RegDate`, `UpdateDate`) VALUES ( :school_number, :fname, :lname, :sphone, :cell, :email, :size, :a_c, :ChapAssign, :SameAssignment, :AssignmentComment, NOW(), NOW());";
$stmt = $con->prepare($sql);
$stmt->bindParam(':school_number', $school_number);
$stmt->bindParam(':fname', $fname);
$stmt->bindParam(':lname', $lname);
$stmt->bindParam(':sphone', $sphone);
$stmt->bindParam(':cell', $cell);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':size', $size);
$stmt->bindParam(':a_c', $a_c);
$stmt->bindParam(':ChapAssign', $ChapAssign);
$stmt->bindParam(':SameAssignment', $SameAssignment);
$stmt->bindParam(':AssignmentComment', $AssignmentComment);

$stmt->execute();

if ($finished) { header("Location: /new/index-text-main.php?school_number=$school_number"); }
if ($addanother) { header("Location: /new/advisors.php?school_number=$school_number"); }
?>
