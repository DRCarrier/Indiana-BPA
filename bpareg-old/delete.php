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
<? 
$adv_id=$_POST['adv_id'];
$school_number=$_POST['school_number'];
$delete=$_POST['delete'];
?>


 <form name="form1" method="post" action="advisorlist.php?school_number=<? echo $school_number ?>">
 
   
    <table width="100%" border="0">
      <tr>
        <td width="1%" height="279" valign="top">&nbsp;</td>
        <td width="99%" valign="top"><h2 align="left">&nbsp;
                <?
				
$con = mysql_connect('server','username','password');
$db = mysql_select_db('database', $con);


$sql = "DELETE from SLCadv WHERE adv_id='$adv_id'";


mysql_query($sql, $con);
	
	
	echo "<input type=\"submit\" value=\"Next\" name=\"Next\" id=\"Submit\" />";

	echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">The record has been deleted.  Click the Next button to display the updated advisor list.</h2></font>';




mysql_close($con);



?>

        </h2></td>
      </tr>
    </table>
    </form>

</body>

</html>