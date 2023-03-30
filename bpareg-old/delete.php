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
<?php
$adv_id=$_POST['adv_id'];
session_start();
$school_number=$_SESSION['school_number'];
$delete=$_POST['delete'];
?>


 <form name="form1" method="post" action="advisorlist.php?school_number=<?php echo $school_number ?>">
 
   
    <table width="100%" border="0">
      <tr>
        <td width="1%" height="279" valign="top">&nbsp;</td>
        <td width="99%" valign="top"><h2 align="left">&nbsp;
                <?php
				
$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";

$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$sql = "DELETE from SLCadv WHERE adv_id='$adv_id'";


//mysql_query($sql, $con);
$con->query($sql);
       
	
	echo "<input type=\"submit\" value=\"Next\" name=\"Next\" id=\"Submit\" />";

	echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">The record has been deleted.  Click the Next button to display the updated advisor list.</h2></font>';




//mysql_close($con);
$con = NULL;



?>

        </h2></td>
      </tr>
    </table>
    </form>

</body>

</html>
