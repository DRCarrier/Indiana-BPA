<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>SLC Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php 

$school_number=$_GET['school_number'];

?>
<body bgcolor="#FFFFFF" text="#000000" link="#FF0000" vlink="#FF0000">
<table width="87%" align="center">
  <tr> 
    <td width="23%" height="77"><img src="bpa-logo.jpg" alt="BPA Logo" width="400" height="134"></td>
    <td width="77%"><p><font size="+2" face="Arial, Helvetica, sans-serif"><strong>2020 Indiana Business Professionals of America</strong></font></p>
      <p><strong><font size="+2" face="Arial, Helvetica, sans-serif">Online SLC 
    Registration</font></strong></p></td>
  </tr>
</table>
<form name="form1" method="post" action="proc_housing.php">
  <p align="center"><strong><font size="+2" face="Arial, Helvetica, sans-serif">Housing Information</font></strong></p>
  <table width="84%" border="1" align="center">
    <tr> 
      <td width="20%"><font face="Times New Roman, Times, serif">Advisor or Student Room</font></td>
      <td width="10%"><font face="Times New Roman, Times, serif">
        <select name="a_s" id="a_s">
          <option></option>
          <option value="a">Advisor</option>
          <option value="s">Student</option>
         </select>
      </font></td>
      <td width="70%">Select A if an advisor or advisor(s) will be staying in the room. Select S if only students will be in the room.</td>
    </tr>
    <tr> 
      <td height="27"><font face="Times New Roman, Times, serif">Gender</font></td>
      <td><font face="Times New Roman, Times, serif">
        <select name="gender" id="gender">
          <option></option>
          <option value="m">Male</option>
          <option value="f">Female</option>
          <option value="m/f">Male/Female</option>
        </select>
      </font></td>
      <td>Select M if males will be staying in the room. Select F if females will be staying in the room. The Male/Female option is only available for an advisor room.</td>
    </tr>
    <tr>
      <td><font face="Times New Roman, Times, serif">Room Type</font></td>
      <td><font face="Times New Roman, Times, serif">
        <select name="type" id="type">
          <option></option>
          <option value="s">Single (one person in the room)</option>
          <option value="d">Double (two people in the room)</option>
           <option value="t">Triple (three people in the room)</option>
            <option value="q">Quad (four people in the room)</option>
        </select>
      </font></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><p><br>
      <strong>Note: If you are sharing a room with another school, one advisor should enter all the students for the room, even those from the other school(s). For example, if I had two girls from Mt. Vernon HS who were sharing a room with two girls from Reitz HS, the Reitz advisor and I would need to decide who was going to enter the room. If I decided to enter the occupants of the shared room, I would need to contact the Reitz advisor to get the student ID numbers for the two Reitz students. When invoices are generated, each school will be charged for its students.</strong></p></td>
    </tr>
    <tr> 
      <td><font face="Times New Roman, Times, serif">Occupant 1 ID Number</font></td>
      <td><font face="Times New Roman, Times, serif"> 
        <input name="occ_id1" type="text" id="occ_id1" size="20">
        </font></td>
      <td rowspan="4"><p><strong>*Note: You must enter the ID numbers from the Student and/or Advisor List into the Occupant ID boxes. Student ID numbers are the  NLC membership ID #. There is a hyphen in the ID #: 24-xxx-xxxx.</strong></p>
      <p><strong>**For advisors, DO NOT use their national membership number. Use the ID number on the Advisor List.</strong></p></td>
    </tr>
    <tr> 
      <td><font face="Times New Roman, Times, serif">Occupant 2 ID Number</font></td>
      <td><font face="Times New Roman, Times, serif"> 
        <input name="occ_id2" type="text" id="occ_id2" size="20">
        </font></td>
    </tr>
    <tr>
      <td><font face="Times New Roman, Times, serif">Occupant 3 ID Number</font></td>
      <td><font face="Times New Roman, Times, serif">
        <input name="occ_id3" type="text" id="occ_id3" size="20">
      </font></td>
    </tr>
    <tr>
      <td><font face="Times New Roman, Times, serif">Occupant 4 ID Number</font></td>
      <td><font face="Times New Roman, Times, serif">
        <input name="occ_id4" type="text" id="occ_id4" size="20">
      </font></td>
    </tr>
  </table>
  <blockquote>
    <blockquote>
      <p><br>
      </p>
    </blockquote>
  </blockquote>
  <p align="center"><input type="hidden" name="school_number" value="<? echo "$school_number"; ?>"><input type="submit" name="addanother" value="Add Another Room">
    <br>
    <br>
<input type="submit" name="finished" value="Finished Adding Rooms"><br>
</p>
  <table width="30%" align="center">
    <tr align="center" valign="middle"> 
      <td width="24%"><font face="Arial, Helvetica, sans-serif"><a href="index.php<? echo "?school_number=$school_number"; ?>">Home</a></font></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
</form>
<p align="center">&nbsp;</p>
</body>
</html>
