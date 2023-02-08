<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
<html> 
<head> 
<title>SLC Registration</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
</head> 
 
<body bgcolor="#FFFFFF" text="#000000" link="#FF0000" vlink="#FF0000" alink="#FF
0000">
<?php 

$school_number=$_GET['school_number'];
?>
//gets school number


<table width="87%" align="center"> 
  <tr> 
    <td width="23%" height="77"><img src="untitled.jpg" alt="BPA Logo" width="198" height="92"></td> 
    <td width="77%"><p><font size="+2" face="Arial, Helvetica, sans-serif"><strong>2017  
        Indiana Business Professionals of America</strong></font></p> 
      <p><strong><font size="+2" face="Arial, Helvetica, sans-serif">Online SLC  
        Registration</font></strong></p></td> 
  </tr> 
</table> 
<p><font size="+1" face="Arial, Helvetica, sans-serif">To begin the online registration  
  process, please open and print the online registration instructions and SLC registration checklist. A link to the SLC Newsletter is also provided for your reference.</font></p> 
<ul> 
  <li><font size="+1" face="Arial, Helvetica, sans-serif"><a href="instructions.php" target="_blank">Instructions</a></font></li> 
  <li><font size="+1" face="Arial, Helvetica, sans-serif"><a href="checklist.pdf" target="_blank">SLC Registration Checklist</a></font></li>
  <li><font size="+1" face="Arial, Helvetica, sans-serif"><a href="slc-newsletter.pdf" target="_blank">SLC Newsletter</a></font></li> 
</ul> 
<p><font size="+1" face="Arial, Helvetica, sans-serif">Please be sure to read all of the instructions  
  very carefully. If you have  
  questions, email <a href="mailto:mccloudtr@msdmv.k12.in.us">Tina McCloud</a>.  
</font></p> 
<p><font size="+1" face="Arial, Helvetica, sans-serif">Registration Deadline:  
  January 20 </font><font face="Arial, Helvetica, sans-serif">(A $5 late fee per  
  student will be assessed after this date.)</font></p> 
<p>&nbsp;</p> 
<table width="82%" align="center"> 
  <tr>  

<br /> 
 
    <td width="48%" rowspan="6" valign="middle"> <p><font size="+1" face="Arial, Helvetica, sans-serif">Click  
      the appropriate link to the right</font>.</p></td> 
    <td width="52%" height="30">  
<p>
   
  <a href="schoolinfo.php<?php  echo "?school_number=$school_number";  ?>">Enter School Information</a><br> 
  
  <a href="editschool.php<?php  echo "?school_number=$school_number"; ?>">Edit School Information</a><br> 
  
  <a href="advisors.php<?php  echo "?school_number=$school_number";  ?>">Enter Advisor(s)/Chaperone(s) Information</a><br> 
  
  <font color="#FF0000"><a href="advisorlist.php<?php echo "?school_number=$school_number";  ?>">View/Edit Advisor and Chaperone Information</a></font><br> 
  
  <a href="studentlist.php<?php  echo "?school_number=$school_number";  ?>">View/Edit Student Information</a><br> 
  
  <a href="students.php<?php echo "?school_number=$school_number";  ?>">Add  Student(s)</a><br> 
  
  <a href="housing.php<?php  echo "?school_number=$school_number"; ?>">Enter Housing Information</a> <br> 
  
  <a href="housinglist.php<?php echo "?school_number=$school_number";  ?>">View/Edit Housing Information</a><br>
  <a href="finalize.php<?php  echo "?school_number=$school_number";  ?>">Finalize Registration</a><br>
  
  <br> 
  <br>
</p> 

</table> 
<p><strong><font face="Arial, Helvetica, sans-serif">Invoices will be emailed to advisors by February 3. If you would like to calculate the total cost for your SLC registration, chaperone T-shirts, and housing click <a href="calc_form.pdf" target="blank">here</a> to access a form for calculating your total amount owed.</font></strong></p> 
<p>&nbsp; </p> 
<p>&nbsp; </p> 
</body> 
</html>
