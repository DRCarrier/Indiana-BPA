<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SLC Registration</title>
</head>
<body>
 
 <? $password3=$_POST['password3'];
$username=$_POST['username'];
$school_number=$_POST['username'];
?>

<form name="form1" method="post" action="index.php<? echo "?school_number=$school_number"; ?>">
<?
$con = mysql_connect('server','username','password');
$db = mysql_select_db('database', $con);

$query = "UPDATE `login` SET `password3` =  '$password3' WHERE `username`='$username'";

 
mysql_query($query, $con);

$sql2 = "SELECT * FROM login WHERE username = '$username'";

$query2 = mysql_query($sql2) or die(mysql_error());
$login = mysql_fetch_array($query2);

if ($login[username]==$username & $login[password]==$login[password3]) {echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">Click the Next button to continue to your registration.</h2></font>'; 
	
	echo "<input type=\"submit\" value=\"Next\" name=\"Next\" id=\"Submit\" />"; }
	
	else 

	{echo '<font face="Arial, Helvetica, sans-serif"><b>The username and/or password do not match what we have in our records.  Please click the BACK button on your browser and try again.  If you do not remember your username and/or password email <a href="mailto:mccloudtr@mvschool.org">Tina McCloud</a>'; }
?>
</form>
</body>
</html>