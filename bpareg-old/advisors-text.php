<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>SLC Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php 


$school_number=$_SESSION['school_number'];

?>
<body bgcolor="#FFFFFF" text="#000000" link="#FF0000" vlink="#FF0000">

<table width="87%" align="center">
  <tr> 
    <td width="23%" height="77"><img src="bpa-logo.jpg" alt="BPA Logo" width="400" height="134"></td>
    <td width="77%"><p><font size="+2" face="Arial, Helvetica, sans-serif"><strong>2020 
        Indiana Business Professionals of America</strong></font></p>
      <p><strong><font size="+2" face="Arial, Helvetica, sans-serif">Online SLC 
    Registration</font></strong></p></td>
  </tr>
</table>
<form name="form1" method="post" action="proc_advisors.php">
  <p align="center"><font size="+2" face="Arial, Helvetica, sans-serif"><strong>Advisor/Chaperone 
    Information</strong></font></p>
  <table width="87%" align="center">
    <tr> 
      <td width="14%"><font face="Times New Roman, Times, serif">First Name</font></td>
      <td width="21%"><font face="Times New Roman, Times, serif"> 
        <input name="fname" type="text" id="fname" size="30">
        </font></td>
      <td width="10%"><font face="Times New Roman, Times, serif">Last Name</font></td>
      <td width="55%"><font face="Times New Roman, Times, serif"> 
        <input name="lname" type="text" id="lname" size="30">
        </font></td>
    </tr>
    <tr> 
      <td height="27"><font face="Times New Roman, Times, serif">School Phone</font></td>
      <td><font face="Times New Roman, Times, serif"> 
        <input name="sphone" type="text" id="sphone" size="30">
        </font></td>
      <td><font face="Times New Roman, Times, serif">Cell Phone</font></td>
      <td><font face="Times New Roman, Times, serif"> 
        <input name="cell" type="text" id="cell" size="30">
        </font></td>
    </tr>
    <tr> 
      <td valign="top"><font face="Times New Roman, Times, serif">Email</font></td>
      <td colspan="3"><p><font face="Times New Roman, Times, serif">
        <input name="email" type="text" id="email" size="50">
      </font></p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td valign="top">Shirt Size</td>
      <td colspan="3"><p><font face="Times New Roman, Times, serif">
        <select name="size" id="size">
          <option> </option>
          <option value="s">Small</option>
          <option value="m">Medium</option>
          <option value="l">Large</option>
          <option value="xl">X-Large</option>
          <option value="xxl">XX-Large</option>
          <option value="xxxl">XXX-Large</option>
        </select>
        <br>
      </font>(Note: Advisors will not be charged for a T-Shirt and should have a shirt size selected. Chaperones will be charged $5 if a T-Shirt Size is selected because they do not pay the $55 registration fee. A  $2 fee will be charged for XX-Large and XXX-Large)</p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td valign="top">Advisor/Chaperone</td>
      <td colspan="2" align="left" valign="top"><table width="76%" align="left">
        <tr valign="top">
          <td width="45%"><p> <font face="Times New Roman, Times, serif">
            <label>
              <input type="radio" name="a_c" value="a">
              Advisor</label>
            <br>
            <label> </label>
          </font></p></td>
          <td width="55%"><font face="Times New Roman, Times, serif">
            <label>
              <input type="radio" name="a_c" value="c">
              Chaperone</label>
          </font></td>
        </tr>
      </table>        <p>&nbsp;</p></td>
      <td align="left" valign="top"><p>Check this box if your chaperone would be willing to assist with an event:
        <input name="ChapAssign" type="hidden" id="ChapAssign" value="n">
        <input name="ChapAssign" type="checkbox" id="ChapAssign" value="y">
      </p>
      <p>&nbsp; </p></td>
    </tr>
    <tr>
      <td valign="top">Advisor Assignment</td>
      <td colspan="3"><label>
        <input name="SameAssignment" type="hidden" id="SameAssignment"  accesskey="1" value="n">
        <input name="SameAssignment" type="checkbox" id="SameAssignment" accesskey="2" value="y">
      I would like the same assignment as last year.<br>
      <p><strong><em>Note: Computer events will be held in the Convention Center. </strong></em></p><br>
      If you would like a new assignment this year, enter what you  would like your assignment to be at this year&rsquo;s SLC.&nbsp; (Do you want to administer or grade, what event would you like to work with, etc.)<br>
      <br>
      <textarea name="AssignmentComment" cols="100" id="AssignmentComment" accesskey="2"></textarea>
      <br>
      <br>
      </label>
        <p>We try our best to give you the assignment you request.  Keep in mind, however, that we must fill many positions and do our best to try to give our students the best testing/evaluation staffing possible.</p>
        <p><strong>Description of Duties</strong>:</p>
        <p>Administrator of Computer Events: Contact assistants, attend administrator meeting, administer test (computer events will be at the hotel/convention center), check with head grader</p>
        <p>Administrator of Judged Events: Contact assistants, attend administrator meeting, work with judges to administer test</p>
        <p>Assistant: Review your event and assist administrator</p>
        <p>Head Grader: Contact other graders, attend head grader meeting, responsible for breaking ties and completing ranking sheet</p>
        <p>Grader: Report to grading room and grade tests</p>
        <label>  <br>
      </label></td>
    </tr>
  </table>
  <br>
  <p align="center"><input type="hidden" name="school_number" value="<?php echo "$school_number"; ?>"><input type="submit" name="addanother" value="Add Another Advisor/Chaperone">
    <br>
    <br>
<input type="submit" name="finished" value="Finished Adding Advisors/Chapones"><br>
</p>
  <table width="30%" align="center">
    <tr align="center" valign="middle"> 
      <td width="24%"><font face="Arial, Helvetica, sans-serif"><a href="index-text-main.php<?php echo "?school_number=$school_number"; ?>">Home</a></font></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
</form>
<p align="center">&nbsp;</p>
</body>
</html>
