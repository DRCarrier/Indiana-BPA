<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>SLC Registration</title>
<link href="style_sheet.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#0000FF" vlink="#0000FF" alink="#0000FF">
<?php $password=$_POST['password'];
$password2=$_POST['password2'];
$username=$_POST['username'];
$school_number=$_SESSION['school_number'];
?>


 <form name="form1" method="post" action="/SLCReg/index.php<?php echo "?school_number=$school_number"; ?>">
 
   
    <table width="100%" border="0">
      <tr>
        <td width="1%" height="279" valign="top">&nbsp;</td>
        <td width="99%" valign="top"><h2 align="left">&nbsp;
                <?php
	 // create hash password
    $password = '$password2';
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    echo $hashed_password;
		
		
				
$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";

$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password);
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



//    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')"; 
$sql = "INSERT INTO `login` ( `password`,`password2`, `username`) VALUES ('password', '$hashed_password', '$username')"; 



if ($password==$password2) {
	if(strlen($password)>=6 & strlen($password)<=12){$pw=$password;} 
		else {$password=NULL; echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">Your password needs to be at least 6 characters and no more than 12 characters. Please click the BACK button on your browser and re-enter your username and password.</h2></font>'; exit;}} 
	else {$password=NULL; echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">Your password did not match the confirmed password! Please click the BACK button on your browser and re-enter your username and password.</h2></font>'; exit;}

if ($pw) {
			$query2="SELECT username FROM login WHERE username ='$username'";
			$result=@$con->query($query2); 
			$count = $result->fetchColumn();		
	
			$query3="SELECT school_number FROM schools WHERE school_number='$username'";
			$result2=@$con->query($query3);
			$count2 = $result->fetchColumn();
	
			if ($count==0) {
							if ($count2==1) {echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">Your username and password have been created.  Click the Next button to continue the registration process.</h2></font>'; 
	$con->query($sql);
	
	
	echo "<input type=\"submit\" value=\"Next\" name=\"Next\" id=\"Submit\" />";
}
			else{echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">You have entered an invalid school number as your username.  Please verify your school number on the School List file and click the BACK button on your browser to re-enter your username and password.</h2></font>'; }
				
				}
			
				else{echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">An account for your school number has already been created.  If you have forgotten your password, please contact <a href="mailto:mccloudtr@mvschool.org">Tina McCloud</a>.</h2></font>'; }
			
			}			
			


	
	else {
		echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">Please try again.</h2></font>';} 



	
	$con= NULL;



?>

        </h2></td>
      </tr>
    </table>
    </form>

</body>

</html>
