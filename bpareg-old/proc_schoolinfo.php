<body>
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

?>
<form name="form1" method="post" action="index.php<? echo "?school_number=$school_number"; ?>">

<?php

$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";

$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = "INSERT INTO SLCschl (`school_number`, `address`, `city`, `zip`, `arrive`, `depart`,  `overflowSH`, `envact`, `community`, `olympics`, `safety`, `chact`, `service`, `member`, `quality`, `social`, `marketing`, `other_recog`, `accommodations`, `RegDate`, `UpdateDate`) VALUES ('$school_number', '$address', '$city', '$zip', '$arrive', '$depart', '$overflowSH', '$envact', '$community', '$olympics', '$safety', '$chact', '$service', '$member', '$quality', '$social', '$marketing', '$other_recog', '$accommodations', NOW(), NOW())";

			$query2="SELECT school_number FROM SLCschl WHERE school_number ='$school_number'";
			$result=@mysql_query($query2);
	
			if (mysql_num_rows($result)==0) {echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">Click Next button to return to the registration home page.</h2></font>'; 
	mysql_query($query, $con);
	echo "<input type=\"submit\" value=\"Next\" name=\"Next\" id=\"Submit\" />"; }
			else{echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">You have already entered your school information. If you need to change your information, click the Edit School Information link on the registration home page.  Click the Next button to return to the registration home page.</h2></font>'; 
			echo "<input type=\"submit\" value=\"Next\" name=\"Next\" id=\"Submit\" />";}






?>
</form>
</body>
