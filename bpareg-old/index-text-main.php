<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
<html> 
<head> 
<title>SLC Registration</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
</head> 
 
<body bgcolor="#FFFFFF" text="#494949" link="#0a57bf" vlink="#0a57bf" alink="#000000">
<?php 

$school_number=$_GET['school_number'];


?>



<table width="87%" align="center"> 
  <tr> 
    <td width="23%" height="77"><img src="bpa-logo.jpg" alt="BPA Logo" width="400" height="134"></td> 
    <td width="77%"><p><font size="+2" face="Arial, Helvetica, sans-serif"><strong>2020  
        Indiana Business Professionals of America</strong></font></p> 
      <p><strong><font size="+2" face="Arial, Helvetica, sans-serif">Online SLC  
        Registration</font></strong></p></td> 
  </tr> 
</table> 
<p><font size="+1" face="Arial, Helvetica, sans-serif">To begin the online registration  
  process, please open and print the online registration instructions and SLC registration checklist. </font></p> 
<ul> 
  <li><font size="+1" face="Arial, Helvetica, sans-serif"><a href="instructions.php" target="_blank">Instructions</a></font></li> 

  <li><font size="+1" face="Arial, Helvetica, sans-serif"><a href="slc-checklist.pdf" target="_blank">SLC Registration Checklist</a></font></li>

<!--  <li><font size="+1" face="Arial, Helvetica, sans-serif"><a href="slc-preview.pdf" target="_blank">SLC Preview</a></font></li>    -->

</ul> 
<p><font size="+1" face="Arial, Helvetica, sans-serif">Please be sure to read all of the instructions  
  very carefully. If you have  
  questions, email <a href="mailto:mccloudtr@msdmv.k12.in.us">Tina McCloud</a>.  
</font></p> 
<p><font size="+1" face="Arial, Helvetica, sans-serif"><strong>Registration Deadline:</strong>  
  January 18 </font><font face="Arial, Helvetica, sans-serif">(A $5 late fee per  
  student will be assessed after this date.)</font></p> 
 
<table width="82%" align="center"> 
  <tr>  


 
     
    <td width="52%" height="30">  
  
<p><font face="Arial, Helvetica, sans-serif" >  <font color="#2063f9"> <a href="schoolinfo.php<?php  echo "?school_number=$school_number";  ?>">Enter School Information</a></p> 
  
 <p> <a href="editschool.php<?php  echo "?school_number=$school_number"; ?>">Edit School Information</a></p> 
  
 <p> <a href="advisors.php<?php  echo "?school_number=$school_number";  ?>">Enter Advisor(s)/Chaperone(s) Information</a></p>
  
<p>  <a href="advisorlist.php<?php echo "?school_number=$school_number";  ?>">View/Edit Advisor and Chaperone Information</a></font></p> 
  
<p> <a href="studentlist.php<?php  echo "?school_number=$school_number";  ?>">View/Edit Student Information</a></p>
  
<p>  <a href="students.php<?php echo "?school_number=$school_number";  ?>">Add  Student(s)</a></p>
  
<p>  <a href="housing.php<?php  echo "?school_number=$school_number"; ?>">Enter Housing Information</a> </p> 
  
<p>  <a href="housinglist.php<?php  echo "?school_number=$school_number";  ?>">View/Edit Housing Information</a></p>
 <p> <a href="finalize.php<?php  echo "?school_number=$school_number";  ?>">Finalize Registration</a></p> </font>
  
</table> 
<p><strong><font face="Arial, Helvetica, sans-serif">Invoices will be emailed to advisors by February 3. If you would like to calculate the total cost for your SLC registration, chaperone T-shirts, and housing click <a href="calc_form.pdf" target="blank">here</a> to access a form for calculating your total amount owed.</font></strong></p> 
<p>&nbsp; </p> 
<p>&nbsp; </p> 
</body> 
</html>
